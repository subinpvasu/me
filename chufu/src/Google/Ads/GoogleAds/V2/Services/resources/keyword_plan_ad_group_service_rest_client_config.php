<?php

return [
    'interfaces' => [
        'google.ads.googleads.v2.services.KeywordPlanAdGroupService' => [
            'GetKeywordPlanAdGroup' => [
                'method' => 'get',
                'uriTemplate' => '/v2/{resource_name=customers/*/keywordPlanAdGroups/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateKeywordPlanAdGroups' => [
                'method' => 'post',
                'uriTemplate' => '/v2/customers/{customer_id=*}/keywordPlanAdGroups:mutate',
                'body' => '*',
                'placeholders' => [
                    'customer_id' => [
                        'getters' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
