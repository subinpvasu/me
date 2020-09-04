<?php

/* 
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  Author : SUBIN P VASU, Freelance Google Ads(AdWords) API Developer - PHP, Python
 *  Created On : 26-Aug-2020 
 */




/**
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Grpc;
require __DIR__ . '/vendor/autoload.php';

use GetOpt\GetOpt;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentNames;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentParser;
use Google\Ads\GoogleAds\Lib\V4\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V4\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\Lib\V4\GoogleAdsException;
use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;
use Google\Ads\GoogleAds\Util\V4\ResourceNames;
use Google\Ads\GoogleAds\V4\Enums\KeywordPlanNetworkEnum\KeywordPlanNetwork;
use Google\Ads\GoogleAds\V4\Errors\GoogleAdsError;
use Google\Ads\GoogleAds\V4\Services\GenerateKeywordIdeaResult;
use Google\Ads\GoogleAds\V4\Services\KeywordAndUrlSeed;
use Google\Ads\GoogleAds\V4\Services\KeywordSeed;
use Google\Ads\GoogleAds\V4\Services\UrlSeed;
use Google\ApiCore\ApiException;
use Google\Protobuf\StringValue;

/** This example generates keyword ideas from a list of seed keywords or a seed page URL. */
class GenerateKeywordIdeas
{
    private const CUSTOMER_ID = '6076703147';
    // Location criteria IDs. For example, specify 21167 for New York. For more information
    // on determining this value, see
    // https://developers.google.com/adwords/api/docs/appendix/geotargeting.
    private const LOCATION_ID_1 = '1007749';
    

    // A language criterion ID. For example, specify 1000 for English. For more information
    // on determining this value, see
    // https://developers.google.com/adwords/api/docs/appendix/codes-formats#languages.
    private const LANGUAGE_ID = '1000';

    private const KEYWORD_TEXT_1 = 'Python Developer';
    

    // Optional: Specify a URL string related to your business to generate ideas.
    private const PAGE_URL = null;

    public static function main()
    {
        // Either pass the required parameters for this example on the command line, or insert them
        // into the constants above.
        $options = (new ArgumentParser())->parseCommandArguments([
            ArgumentNames::CUSTOMER_ID => GetOpt::REQUIRED_ARGUMENT,
            ArgumentNames::LOCATION_IDS => GetOpt::REQUIRED_ARGUMENT,
            ArgumentNames::LANGUAGE_ID => GetOpt::REQUIRED_ARGUMENT,
            ArgumentNames::KEYWORD_TEXTS => GetOpt::REQUIRED_ARGUMENT,
            ArgumentNames::PAGE_URL => GetOpt::OPTIONAL_ARGUMENT,
        ]);

        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())
     ->withClientId('435665370423-lcvhar9ud41sei5jakivd7mo093b8aqs.apps.googleusercontent.com')
    ->withClientSecret('7aLu_rdAd9sT1XODR-IgX3em')
    ->withRefreshToken('1//0gUofpRkkIC5-CgYIARAAGBASNwF-L9Irg4lPpR3-NAlXm5EFhE7JgbxJ3dqI9ROUPW0n3Cse2X-PJL2BrtHRYXytwkogxg49bEw')
    ->build();
$googleAdsClient = (new GoogleAdsClientBuilder())
    ->withOAuth2Credential($oAuth2Credential)
    ->withDeveloperToken('164oteZ_x-t9PxaFy1Mikg')
    ->withLoginCustomerId('6076703147')
    ->build();

        try {
            self::runExample(
                $googleAdsClient,
                $options[ArgumentNames::CUSTOMER_ID] ?: self::CUSTOMER_ID,
                $options[ArgumentNames::LOCATION_IDS] ?:
                    [self::LOCATION_ID_1],
                $options[ArgumentNames::LANGUAGE_ID] ?: self::LANGUAGE_ID,
                $options[ArgumentNames::KEYWORD_TEXTS] ?:
                    [self::KEYWORD_TEXT_1],
                $options[ArgumentNames::PAGE_URL] ?: self::PAGE_URL
            );
        } catch (GoogleAdsException $googleAdsException) {
            printf(
                "Request with ID '%s' has failed.%sGoogle Ads failure details:%s",
                $googleAdsException->getRequestId(),
                PHP_EOL,
                PHP_EOL
            );
            foreach ($googleAdsException->getGoogleAdsFailure()->getErrors() as $error) {
                /** @var GoogleAdsError $error */
                printf(
                    "\t%s: %s%s",
                    $error->getErrorCode()->getErrorCode(),
                    $error->getMessage(),
                    PHP_EOL
                );
            }
            exit(1);
        } catch (ApiException $apiException) {
            printf(
                "ApiException was thrown with message '%s'.%s",
                $apiException->getMessage(),
                PHP_EOL
            );
            exit(1);
        }
    }

    /**
     * Runs the example.
     *
     * @param GoogleAdsClient $googleAdsClient the Google Ads API client
     * @param int $customerId the customer ID
     * @param int[] $locationIds the location IDs
     * @param int $languageId the language ID
     * @param string[] $keywords the list of keywords to use as a seed for ideas
     * @param string|null $pageUrl optional URL related to your business to use as a seed for ideas
     */
    public static function runExample(
        GoogleAdsClient $googleAdsClient,
        int $customerId,
        array $locationIds,
        int $languageId,
        array $keywords,
        ?string $pageUrl
    ) {
        $keywordPlanIdeaServiceClient = $googleAdsClient->getKeywordPlanIdeaServiceClient();

        // Make sure that keywords and/or page URL were specified. The request must have exactly one
        // of urlSeed, keywordSeed, or keywordAndUrlSeed set.
        if (empty($keywords) && is_null($pageUrl)) {
            throw new \InvalidArgumentException(
                'At least one of keywords or page URL is required, but neither was specified.'
            );
        }

        // Specify the optional arguments of the request as a keywordSeed, urlSeed,
        // or keywordAndUrlSeed.
        $requestOptionalArgs = [];
        if (empty($keywords)) {
            // Only page URL was specified, so use a UrlSeed.
            $requestOptionalArgs['urlSeed'] =
                new UrlSeed(['url' => new StringValue(['value' => $pageUrl])]);
        } elseif (is_null($pageUrl)) {
            // Only keywords were specified, so use a KeywordSeed.
            $requestOptionalArgs['keywordSeed'] = new KeywordSeed([
                'keywords' => array_map(function ($keyword) {
                    return new StringValue(['value' => $keyword]);
                }, $keywords)
            ]);
        } else {
            // Both page URL and keywords were specified, so use a KeywordAndUrlSeed.
            $requestOptionalArgs['keywordAndUrlSeed'] = new KeywordAndUrlSeed([
                'url' => new StringValue(['value' => $pageUrl]),
                'keywords' => array_map(function ($keyword) {
                    return new StringValue(['value' => $keyword]);
                }, $keywords)
            ]);
        }

        // Create a list of geo target constants based on the resource name of specified location
        // IDs.
        $geoTargetConstants =  array_map(function ($locationId) {
            return new StringValue(
                ['value' => ResourceNames::forGeoTargetConstant($locationId)]
            );
        }, $locationIds);

        // Generate keyword ideas based on the specified parameters.
        $response = $keywordPlanIdeaServiceClient->generateKeywordIdeas(
            // Set the language resource using the provided language ID.
            new StringValue(['value' => ResourceNames::forLanguageConstant($languageId)]),
            [
                'customerId' => $customerId,
                // Add the resource name of each location ID to the request.
                'geoTargetConstants' => $geoTargetConstants,
                // Set the network. To restrict to only Google Search, change the parameter below to
                // KeywordPlanNetwork::GOOGLE_SEARCH.
                'keywordPlanNetwork' => KeywordPlanNetwork::GOOGLE_SEARCH_AND_PARTNERS
            ] + $requestOptionalArgs
        );
        echo '<pre>';
        $rest = [];
        $i=0;
        // Iterate over the results and print its detail.
        foreach ($response->iterateAllElements() as $result) {
            $i++;
            try{
            $temp['kwd'] = $result->getText()->getValue();
//            $temp['search'] = is_null($result->getKeywordIdeaMetrics()) ? 0 : $result->getKeywordIdeaMetrics()->getAvgMonthlySearches()->getValue();
//            $temp['volume'] = is_null($result->getKeywordIdeaMetrics()) || is_null($result->getKeywordIdeaMetrics()->getAvgMonthlySearches()) ? 0 : $result->getKeywordIdeaMetrics()->getAvgMonthlySearches()->getValue();
//            $temp['competition'] = is_null($result->getKeywordIdeaMetrics()) || is_null($result->getKeywordIdeaMetrics()->getCompetition()) ? 0 : $result->getKeywordIdeaMetrics()->getCompetition();
//            $temp['low'] = is_null($result->getKeywordIdeaMetrics()) || is_null($result->getKeywordIdeaMetrics()->getLowTopOfPageBidMicros()) ? 0 : $result->getKeywordIdeaMetrics()->getLowTopOfPageBidMicros()->getValue();
//            $temp['high'] = is_null($result->getKeywordIdeaMetrics()) || is_null($result->getKeywordIdeaMetrics()->getHighTopOfPageBidMicros()) ? 0 : $result->getKeywordIdeaMetrics()->getHighTopOfPageBidMicros()->getValue();
            $temp['rest'] = $result->getKeywordIdeaMetrics();
            }catch(ApiException $e)
            {
                //$e
            }
                    
            /** @var GenerateKeywordIdeaResult $result */
            // Note that the competition printed below is enum value.
            // For example, a value of 2 will be returned when the competition is 'LOW'.
            // A mapping of enum names to values can be found at KeywordPlanCompetitionLevel.php.
//            printf(
//                "Keyword idea text '%s' has %d average monthly searches and competition as %d.%s<br/>",
//                $result->getText()->getValue(),
//                is_null($result->getKeywordIdeaMetrics()) ? 0 : $result->getKeywordIdeaMetrics()->getAvgMonthlySearches()->getValue(),
//                is_null($result->getKeywordIdeaMetrics()) ?
//                    0 : $result->getKeywordIdeaMetrics()->get,
//                PHP_EOL
//            );
            $rest[] = $temp;
if($i>5)
{
    break;
}
          
        }
//        print_r($rest);
        var_dump($rest);
    }
}

GenerateKeywordIdeas::main();
