<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/keyword_plan_negative_keyword_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class KeywordPlanNegativeKeywordService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\KeywordPlanNegativeKeyword::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adc0e0a4c676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f6b6579776f72645f706c616e5f6e656761746976655f" .
            "6b6579776f72645f736572766963652e70726f746f1220676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e73657276696365731a1c676f6f" .
            "676c652f6170692f616e6e6f746174696f6e732e70726f746f1a20676f6f" .
            "676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a" .
            "17676f6f676c652f7270632f7374617475732e70726f746f1a17676f6f67" .
            "6c652f6170692f636c69656e742e70726f746f223d0a244765744b657977" .
            "6f7264506c616e4e656761746976654b6579776f72645265717565737412" .
            "150a0d7265736f757263655f6e616d6518012001280922ca010a284d7574" .
            "6174654b6579776f7264506c616e4e656761746976654b6579776f726473" .
            "5265717565737412130a0b637573746f6d65725f69641801200128091259" .
            "0a0a6f7065726174696f6e7318022003280b32452e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e73657276696365732e4b6579776f72" .
            "64506c616e4e656761746976654b6579776f72644f7065726174696f6e12" .
            "170a0f7061727469616c5f6661696c75726518032001280812150a0d7661" .
            "6c69646174655f6f6e6c791804200128082297020a234b6579776f726450" .
            "6c616e4e656761746976654b6579776f72644f7065726174696f6e122f0a" .
            "0b7570646174655f6d61736b18042001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e4669656c644d61736b124f0a0663726561746518012001" .
            "280b323d2e676f6f676c652e6164732e676f6f676c656164732e76312e72" .
            "65736f75726365732e4b6579776f7264506c616e4e656761746976654b65" .
            "79776f72644800124f0a0675706461746518022001280b323d2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e7265736f75726365732e" .
            "4b6579776f7264506c616e4e656761746976654b6579776f726448001210" .
            "0a0672656d6f76651803200128094800420b0a096f7065726174696f6e22" .
            "b9010a294d75746174654b6579776f7264506c616e4e656761746976654b" .
            "6579776f726473526573706f6e736512310a157061727469616c5f666169" .
            "6c7572655f6572726f7218032001280b32122e676f6f676c652e7270632e" .
            "53746174757312590a07726573756c747318022003280b32482e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e73657276696365732e4d" .
            "75746174654b6579776f7264506c616e4e656761746976654b6579776f72" .
            "64526573756c74223f0a264d75746174654b6579776f7264506c616e4e65" .
            "6761746976654b6579776f7264526573756c7412150a0d7265736f757263" .
            "655f6e616d6518012001280932bc040a214b6579776f7264506c616e4e65" .
            "6761746976654b6579776f72645365727669636512ed010a1d4765744b65" .
            "79776f7264506c616e4e656761746976654b6579776f726412462e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e73657276696365732e" .
            "4765744b6579776f7264506c616e4e656761746976654b6579776f726452" .
            "6571756573741a3d2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e7265736f75726365732e4b6579776f7264506c616e4e6567617469" .
            "76654b6579776f7264224582d3e493023f123d2f76312f7b7265736f7572" .
            "63655f6e616d653d637573746f6d6572732f2a2f6b6579776f7264506c61" .
            "6e4e656761746976654b6579776f7264732f2a7d1289020a214d75746174" .
            "654b6579776f7264506c616e4e656761746976654b6579776f726473124a" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7365727669" .
            "6365732e4d75746174654b6579776f7264506c616e4e656761746976654b" .
            "6579776f726473526571756573741a4b2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e73657276696365732e4d75746174654b657977" .
            "6f7264506c616e4e656761746976654b6579776f726473526573706f6e73" .
            "65224b82d3e493024522402f76312f637573746f6d6572732f7b63757374" .
            "6f6d65725f69643d2a7d2f6b6579776f7264506c616e4e65676174697665" .
            "4b6579776f7264733a6d75746174653a012a1a1bca4118676f6f676c6561" .
            "64732e676f6f676c65617069732e636f6d428d020a24636f6d2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e73657276696365734226" .
            "4b6579776f7264506c616e4e656761746976654b6579776f726453657276" .
            "69636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f" .
            "67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c65" .
            "6164732f76312f73657276696365733b7365727669636573a20203474141" .
            "aa0220476f6f676c652e4164732e476f6f676c654164732e56312e536572" .
            "7669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56" .
            "315c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f67" .
            "6c654164733a3a56313a3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

