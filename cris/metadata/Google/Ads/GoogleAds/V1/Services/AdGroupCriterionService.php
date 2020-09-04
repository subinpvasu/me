<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/ad_group_criterion_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class AdGroupCriterionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Policy::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\AdGroupCriterion::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9b0e0a41676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f61645f67726f75705f637269746572696f6e5f736572" .
            "766963652e70726f746f1220676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e73657276696365731a3a676f6f676c652f6164732f676f6f" .
            "676c656164732f76312f7265736f75726365732f61645f67726f75705f63" .
            "7269746572696f6e2e70726f746f1a1c676f6f676c652f6170692f616e6e" .
            "6f746174696f6e732e70726f746f1a20676f6f676c652f70726f746f6275" .
            "662f6669656c645f6d61736b2e70726f746f1a17676f6f676c652f727063" .
            "2f7374617475732e70726f746f1a17676f6f676c652f6170692f636c6965" .
            "6e742e70726f746f22330a1a476574416447726f7570437269746572696f" .
            "6e5265717565737412150a0d7265736f757263655f6e616d651801200128" .
            "0922b4010a1c4d7574617465416447726f75704372697465726961526571" .
            "7565737412130a0b637573746f6d65725f6964180120012809124f0a0a6f" .
            "7065726174696f6e7318022003280b323b2e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76312e73657276696365732e416447726f75704372" .
            "69746572696f6e4f7065726174696f6e12170a0f7061727469616c5f6661" .
            "696c75726518032001280812150a0d76616c69646174655f6f6e6c791804" .
            "2001280822d3020a19416447726f7570437269746572696f6e4f70657261" .
            "74696f6e122f0a0b7570646174655f6d61736b18042001280b321a2e676f" .
            "6f676c652e70726f746f6275662e4669656c644d61736b12580a1c657865" .
            "6d70745f706f6c6963795f76696f6c6174696f6e5f6b6579731805200328" .
            "0b32322e676f6f676c652e6164732e676f6f676c656164732e76312e636f" .
            "6d6d6f6e2e506f6c69637956696f6c6174696f6e4b657912450a06637265" .
            "61746518012001280b32332e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e7265736f75726365732e416447726f757043726974657269" .
            "6f6e480012450a0675706461746518022001280b32332e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e7265736f75726365732e416447" .
            "726f7570437269746572696f6e480012100a0672656d6f76651803200128" .
            "094800420b0a096f7065726174696f6e22a3010a1d4d7574617465416447" .
            "726f75704372697465726961526573706f6e736512310a15706172746961" .
            "6c5f6661696c7572655f6572726f7218032001280b32122e676f6f676c65" .
            "2e7270632e537461747573124f0a07726573756c747318022003280b323e" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7365727669" .
            "6365732e4d7574617465416447726f7570437269746572696f6e52657375" .
            "6c7422350a1c4d7574617465416447726f7570437269746572696f6e5265" .
            "73756c7412150a0d7265736f757263655f6e616d6518012001280932d803" .
            "0a17416447726f7570437269746572696f6e5365727669636512c3010a13" .
            "476574416447726f7570437269746572696f6e123c2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e73657276696365732e4765744164" .
            "47726f7570437269746572696f6e526571756573741a332e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e7265736f75726365732e4164" .
            "47726f7570437269746572696f6e223982d3e493023312312f76312f7b72" .
            "65736f757263655f6e616d653d637573746f6d6572732f2a2f616447726f" .
            "757043726974657269612f2a7d12d9010a154d7574617465416447726f75" .
            "704372697465726961123e2e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e73657276696365732e4d7574617465416447726f75704372" .
            "697465726961526571756573741a3f2e676f6f676c652e6164732e676f6f" .
            "676c656164732e76312e73657276696365732e4d7574617465416447726f" .
            "75704372697465726961526573706f6e7365223f82d3e493023922342f76" .
            "312f637573746f6d6572732f7b637573746f6d65725f69643d2a7d2f6164" .
            "47726f757043726974657269613a6d75746174653a012a1a1bca4118676f" .
            "6f676c656164732e676f6f676c65617069732e636f6d4283020a24636f6d" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7365727669" .
            "636573421c416447726f7570437269746572696f6e536572766963655072" .
            "6f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e7072" .
            "6f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76" .
            "312f73657276696365733b7365727669636573a20203474141aa0220476f" .
            "6f676c652e4164732e476f6f676c654164732e56312e5365727669636573" .
            "ca0220476f6f676c655c4164735c476f6f676c654164735c56315c536572" .
            "7669636573ea0224476f6f676c653a3a4164733a3a476f6f676c65416473" .
            "3a3a56313a3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

