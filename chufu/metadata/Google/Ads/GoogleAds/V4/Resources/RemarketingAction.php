<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/remarketing_action.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V4\Resources;

class RemarketingAction
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
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac2030a3d676f6f676c652f6164732f676f6f676c656164732f76342f656e756d732f747261636b696e675f636f64655f706167655f666f726d61742e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76342e656e756d7322670a1a547261636b696e67436f646550616765466f726d6174456e756d22490a16547261636b696e67436f646550616765466f726d6174120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112080a0448544d4c100212070a03414d50100342f0010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d73421b547261636b696e67436f646550616765466f726d617450726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56342e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56345c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a456e756d73620670726f746f330ade030a36676f6f676c652f6164732f676f6f676c656164732f76342f656e756d732f747261636b696e675f636f64655f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76342e656e756d73228f010a14547261636b696e67436f646554797065456e756d22770a10547261636b696e67436f646554797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a0757454250414745100212130a0f574542504147455f4f4e434c49434b100312110a0d434c49434b5f544f5f43414c4c100412100a0c574542534954455f43414c4c100542ea010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d734215547261636b696e67436f64655479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56342e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56345c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a456e756d73620670726f746f330af3050a30676f6f676c652f6164732f676f6f676c656164732f76342f636f6d6d6f6e2f7461675f736e69707065742e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76342e636f6d6d6f6e1a36676f6f676c652f6164732f676f6f676c656164732f76342f656e756d732f747261636b696e675f636f64655f747970652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22b3020a0a546167536e697070657412520a047479706518012001280e32442e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d732e547261636b696e67436f646554797065456e756d2e547261636b696e67436f64655479706512650a0b706167655f666f726d617418022001280e32502e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d732e547261636b696e67436f646550616765466f726d6174456e756d2e547261636b696e67436f646550616765466f726d617412350a0f676c6f62616c5f736974655f74616718032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512330a0d6576656e745f736e697070657418042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756542ea010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e636f6d6d6f6e420f546167536e697070657450726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56342e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56345c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a436f6d6d6f6e620670726f746f330ad8060a3a676f6f676c652f6164732f676f6f676c656164732f76342f7265736f75726365732f72656d61726b6574696e675f616374696f6e2e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76342e7265736f75726365731a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22ee020a1152656d61726b6574696e67416374696f6e12490a0d7265736f757263655f6e616d651801200128094232e04105fa412c0a2a676f6f676c656164732e676f6f676c65617069732e636f6d2f52656d61726b6574696e67416374696f6e122c0a02696418022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e04103122a0a046e616d6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512450a0c7461675f736e69707065747318042003280b322a2e676f6f676c652e6164732e676f6f676c656164732e76342e636f6d6d6f6e2e546167536e69707065744203e041033a6dea416a0a2a676f6f676c656164732e676f6f676c65617069732e636f6d2f52656d61726b6574696e67416374696f6e123c637573746f6d6572732f7b637573746f6d65727d2f72656d61726b6574696e67416374696f6e732f7b72656d61726b6574696e675f616374696f6e7d4283020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e7265736f7572636573421652656d61726b6574696e67416374696f6e50726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56342e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56345c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a5265736f7572636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

