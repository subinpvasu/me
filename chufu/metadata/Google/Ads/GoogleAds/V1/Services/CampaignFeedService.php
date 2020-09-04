<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/campaign_feed_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class CampaignFeedService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\CampaignFeed::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac20c0a3c676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f63616d706169676e5f666565645f736572766963652e" .
            "70726f746f1220676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e73657276696365731a1c676f6f676c652f6170692f616e6e6f74617469" .
            "6f6e732e70726f746f1a20676f6f676c652f70726f746f6275662f666965" .
            "6c645f6d61736b2e70726f746f1a17676f6f676c652f7270632f73746174" .
            "75732e70726f746f1a17676f6f676c652f6170692f636c69656e742e7072" .
            "6f746f222f0a1647657443616d706169676e466565645265717565737412" .
            "150a0d7265736f757263655f6e616d6518012001280922ae010a1a4d7574" .
            "61746543616d706169676e46656564735265717565737412130a0b637573" .
            "746f6d65725f6964180120012809124b0a0a6f7065726174696f6e731802" .
            "2003280b32372e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e73657276696365732e43616d706169676e466565644f7065726174696f" .
            "6e12170a0f7061727469616c5f6661696c75726518032001280812150a0d" .
            "76616c69646174655f6f6e6c7918042001280822ed010a1543616d706169" .
            "676e466565644f7065726174696f6e122f0a0b7570646174655f6d61736b" .
            "18042001280b321a2e676f6f676c652e70726f746f6275662e4669656c64" .
            "4d61736b12410a0663726561746518012001280b322f2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e7265736f75726365732e43616d" .
            "706169676e46656564480012410a0675706461746518022001280b322f2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e7265736f7572" .
            "6365732e43616d706169676e46656564480012100a0672656d6f76651803" .
            "200128094800420b0a096f7065726174696f6e229d010a1b4d7574617465" .
            "43616d706169676e4665656473526573706f6e736512310a157061727469" .
            "616c5f6661696c7572655f6572726f7218032001280b32122e676f6f676c" .
            "652e7270632e537461747573124b0a07726573756c747318022003280b32" .
            "3a2e676f6f676c652e6164732e676f6f676c656164732e76312e73657276" .
            "696365732e4d757461746543616d706169676e46656564526573756c7422" .
            "310a184d757461746543616d706169676e46656564526573756c7412150a" .
            "0d7265736f757263655f6e616d6518012001280932be030a1343616d7061" .
            "69676e466565645365727669636512b5010a0f47657443616d706169676e" .
            "4665656412382e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e73657276696365732e47657443616d706169676e466565645265717565" .
            "73741a2f2e676f6f676c652e6164732e676f6f676c656164732e76312e72" .
            "65736f75726365732e43616d706169676e46656564223782d3e493023112" .
            "2f2f76312f7b7265736f757263655f6e616d653d637573746f6d6572732f" .
            "2a2f63616d706169676e46656564732f2a7d12d1010a134d757461746543" .
            "616d706169676e4665656473123c2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e73657276696365732e4d757461746543616d706169" .
            "676e4665656473526571756573741a3d2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e73657276696365732e4d757461746543616d70" .
            "6169676e4665656473526573706f6e7365223d82d3e493023722322f7631" .
            "2f637573746f6d6572732f7b637573746f6d65725f69643d2a7d2f63616d" .
            "706169676e46656564733a6d75746174653a012a1a1bca4118676f6f676c" .
            "656164732e676f6f676c65617069732e636f6d42ff010a24636f6d2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e7365727669636573" .
            "421843616d706169676e466565645365727669636550726f746f50015a48" .
            "676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f" .
            "676c65617069732f6164732f676f6f676c656164732f76312f7365727669" .
            "6365733b7365727669636573a20203474141aa0220476f6f676c652e4164" .
            "732e476f6f676c654164732e56312e5365727669636573ca0220476f6f67" .
            "6c655c4164735c476f6f676c654164735c56315c5365727669636573ea02" .
            "24476f6f676c653a3a4164733a3a476f6f676c654164733a3a56313a3a53" .
            "65727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

