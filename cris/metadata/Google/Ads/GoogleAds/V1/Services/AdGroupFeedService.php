<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/ad_group_feed_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class AdGroupFeedService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\AdGroupFeed::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaf0c0a3c676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f61645f67726f75705f666565645f736572766963652e" .
            "70726f746f1220676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e73657276696365731a1c676f6f676c652f6170692f616e6e6f74617469" .
            "6f6e732e70726f746f1a20676f6f676c652f70726f746f6275662f666965" .
            "6c645f6d61736b2e70726f746f1a17676f6f676c652f7270632f73746174" .
            "75732e70726f746f1a17676f6f676c652f6170692f636c69656e742e7072" .
            "6f746f222e0a15476574416447726f757046656564526571756573741215" .
            "0a0d7265736f757263655f6e616d6518012001280922ac010a194d757461" .
            "7465416447726f757046656564735265717565737412130a0b637573746f" .
            "6d65725f6964180120012809124a0a0a6f7065726174696f6e7318022003" .
            "280b32362e676f6f676c652e6164732e676f6f676c656164732e76312e73" .
            "657276696365732e416447726f7570466565644f7065726174696f6e1217" .
            "0a0f7061727469616c5f6661696c75726518032001280812150a0d76616c" .
            "69646174655f6f6e6c7918042001280822ea010a14416447726f75704665" .
            "65644f7065726174696f6e122f0a0b7570646174655f6d61736b18042001" .
            "280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b" .
            "12400a0663726561746518012001280b322e2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e7265736f75726365732e416447726f7570" .
            "46656564480012400a0675706461746518022001280b322e2e676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e7265736f75726365732e41" .
            "6447726f757046656564480012100a0672656d6f76651803200128094800" .
            "420b0a096f7065726174696f6e229b010a1a4d7574617465416447726f75" .
            "704665656473526573706f6e736512310a157061727469616c5f6661696c" .
            "7572655f6572726f7218032001280b32122e676f6f676c652e7270632e53" .
            "7461747573124a0a07726573756c747318022003280b32392e676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e73657276696365732e4d75" .
            "74617465416447726f757046656564526573756c7422300a174d75746174" .
            "65416447726f757046656564526573756c7412150a0d7265736f75726365" .
            "5f6e616d6518012001280932b5030a12416447726f757046656564536572" .
            "7669636512b1010a0e476574416447726f75704665656412372e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e73657276696365732e47" .
            "6574416447726f757046656564526571756573741a2e2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e7265736f75726365732e416447" .
            "726f757046656564223682d3e4930230122e2f76312f7b7265736f757263" .
            "655f6e616d653d637573746f6d6572732f2a2f616447726f757046656564" .
            "732f2a7d12cd010a124d7574617465416447726f75704665656473123b2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e736572766963" .
            "65732e4d7574617465416447726f75704665656473526571756573741a3c" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7365727669" .
            "6365732e4d7574617465416447726f75704665656473526573706f6e7365" .
            "223c82d3e493023622312f76312f637573746f6d6572732f7b637573746f" .
            "6d65725f69643d2a7d2f616447726f757046656564733a6d75746174653a" .
            "012a1a1bca4118676f6f676c656164732e676f6f676c65617069732e636f" .
            "6d42fe010a24636f6d2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76312e73657276696365734217416447726f7570466565645365727669" .
            "636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67" .
            "656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c6561" .
            "64732f76312f73657276696365733b7365727669636573a20203474141aa" .
            "0220476f6f676c652e4164732e476f6f676c654164732e56312e53657276" .
            "69636573ca0220476f6f676c655c4164735c476f6f676c654164735c5631" .
            "5c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c" .
            "654164733a3a56313a3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

