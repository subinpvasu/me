<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/keyword_plan_ad_group_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Services;

class KeywordPlanAdGroupService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa0070a3d676f6f676c652f6164732f676f6f676c656164732f76332f7265736f75726365732f6b6579776f72645f706c616e5f61645f67726f75702e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365731a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22d3030a124b6579776f7264506c616e416447726f7570124a0a0d7265736f757263655f6e616d651801200128094233e04105fa412d0a2b676f6f676c656164732e676f6f676c65617069732e636f6d2f4b6579776f7264506c616e416447726f7570126e0a156b6579776f72645f706c616e5f63616d706169676e18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654231fa412e0a2c676f6f676c656164732e676f6f676c65617069732e636f6d2f4b6579776f7264506c616e43616d706169676e122c0a02696418032001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e04103122a0a046e616d6518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512330a0e6370635f6269645f6d6963726f7318052001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75653a72ea416f0a2b676f6f676c656164732e676f6f676c65617069732e636f6d2f4b6579776f7264506c616e416447726f75701240637573746f6d6572732f7b637573746f6d65727d2f6b6579776f7264506c616e416447726f7570732f7b6b6579776f72645f706c616e5f61645f67726f75707d4284020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f757263657342174b6579776f7264506c616e416447726f757050726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56332e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56335c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5265736f7572636573620670726f746f330ae00e0a44676f6f676c652f6164732f676f6f676c656164732f76332f73657276696365732f6b6579776f72645f706c616e5f61645f67726f75705f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f226a0a1c4765744b6579776f7264506c616e416447726f757052657175657374124a0a0d7265736f757263655f6e616d651801200128094233e04102fa412d0a2b676f6f676c656164732e676f6f676c65617069732e636f6d2f4b6579776f7264506c616e416447726f757022c4010a204d75746174654b6579776f7264506c616e416447726f7570735265717565737412180a0b637573746f6d65725f69641801200128094203e0410212560a0a6f7065726174696f6e7318022003280b323d2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e4b6579776f7264506c616e416447726f75704f7065726174696f6e4203e0410212170a0f7061727469616c5f6661696c75726518032001280812150a0d76616c69646174655f6f6e6c7918042001280822ff010a1b4b6579776f7264506c616e416447726f75704f7065726174696f6e122f0a0b7570646174655f6d61736b18042001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b12470a0663726561746518012001280b32352e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e4b6579776f7264506c616e416447726f7570480012470a0675706461746518022001280b32352e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e4b6579776f7264506c616e416447726f7570480012100a0672656d6f76651803200128094800420b0a096f7065726174696f6e22a9010a214d75746174654b6579776f7264506c616e416447726f757073526573706f6e736512310a157061727469616c5f6661696c7572655f6572726f7218032001280b32122e676f6f676c652e7270632e53746174757312510a07726573756c747318022003280b32402e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e4d75746174654b6579776f7264506c616e416447726f7570526573756c7422370a1e4d75746174654b6579776f7264506c616e416447726f7570526573756c7412150a0d7265736f757263655f6e616d65180120012809329d040a194b6579776f7264506c616e416447726f75705365727669636512dd010a154765744b6579776f7264506c616e416447726f7570123e2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e4765744b6579776f7264506c616e416447726f7570526571756573741a352e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e4b6579776f7264506c616e416447726f7570224d82d3e493023712352f76332f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f6b6579776f7264506c616e416447726f7570732f2a7dda410d7265736f757263655f6e616d651282020a194d75746174654b6579776f7264506c616e416447726f75707312422e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e4d75746174654b6579776f7264506c616e416447726f757073526571756573741a432e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e4d75746174654b6579776f7264506c616e416447726f757073526573706f6e7365225c82d3e493023d22382f76332f637573746f6d6572732f7b637573746f6d65725f69643d2a7d2f6b6579776f7264506c616e416447726f7570733a6d75746174653a012ada4116637573746f6d65725f69642c6f7065726174696f6e731a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d4285020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7365727669636573421e4b6579776f7264506c616e416447726f75705365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56332e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56335c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

