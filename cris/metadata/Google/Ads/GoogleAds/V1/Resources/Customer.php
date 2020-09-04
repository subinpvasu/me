<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/customer.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Resources;

class Customer
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\CustomerPayPerConversionEligibilityFailureReason::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aed0e0a30676f6f676c652f6164732f676f6f676c656164732f76312f72" .
            "65736f75726365732f637573746f6d65722e70726f746f1221676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e7265736f75726365731a1e" .
            "676f6f676c652f70726f746f6275662f77726170706572732e70726f746f" .
            "1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f" .
            "22fe070a08437573746f6d657212150a0d7265736f757263655f6e616d65" .
            "18012001280912270a02696418032001280b321b2e676f6f676c652e7072" .
            "6f746f6275662e496e74363456616c756512360a10646573637269707469" .
            "76655f6e616d6518042001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512330a0d63757272656e63795f636f6465" .
            "18052001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c7565122f0a0974696d655f7a6f6e6518062001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c7565123b0a1574" .
            "7261636b696e675f75726c5f74656d706c61746518072001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c756512360a10" .
            "66696e616c5f75726c5f737566666978180b2001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c756512380a146175746f" .
            "5f74616767696e675f656e61626c656418082001280b321a2e676f6f676c" .
            "652e70726f746f6275662e426f6f6c56616c756512360a126861735f7061" .
            "72746e6572735f626164676518092001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e426f6f6c56616c7565122b0a076d616e61676572180c20" .
            "01280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75" .
            "6512300a0c746573745f6163636f756e74180d2001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e426f6f6c56616c756512570a1663616c6c5f" .
            "7265706f7274696e675f73657474696e67180a2001280b32372e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e7265736f75726365732e" .
            "43616c6c5265706f7274696e6753657474696e6712610a1b636f6e766572" .
            "73696f6e5f747261636b696e675f73657474696e67180e2001280b323c2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e7265736f7572" .
            "6365732e436f6e76657273696f6e547261636b696e6753657474696e6712" .
            "520a1372656d61726b6574696e675f73657474696e67180f2001280b3235" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7265736f75" .
            "726365732e52656d61726b6574696e6753657474696e6712bd010a2e7061" .
            "795f7065725f636f6e76657273696f6e5f656c69676962696c6974795f66" .
            "61696c7572655f726561736f6e7318102003280e3284012e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e656e756d732e437573746f6d" .
            "6572506179506572436f6e76657273696f6e456c69676962696c69747946" .
            "61696c757265526561736f6e456e756d2e437573746f6d65725061795065" .
            "72436f6e76657273696f6e456c69676962696c6974794661696c75726552" .
            "6561736f6e22d7010a1443616c6c5265706f7274696e6753657474696e67" .
            "123a0a1663616c6c5f7265706f7274696e675f656e61626c656418012001" .
            "280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c7565" .
            "12450a2163616c6c5f636f6e76657273696f6e5f7265706f7274696e675f" .
            "656e61626c656418022001280b321a2e676f6f676c652e70726f746f6275" .
            "662e426f6f6c56616c7565123c0a1663616c6c5f636f6e76657273696f6e" .
            "5f616374696f6e18092001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756522a3010a19436f6e76657273696f6e5472" .
            "61636b696e6753657474696e67123b0a16636f6e76657273696f6e5f7472" .
            "61636b696e675f696418012001280b321b2e676f6f676c652e70726f746f" .
            "6275662e496e74363456616c756512490a2463726f73735f6163636f756e" .
            "745f636f6e76657273696f6e5f747261636b696e675f696418022001280b" .
            "321b2e676f6f676c652e70726f746f6275662e496e74363456616c756522" .
            "520a1252656d61726b6574696e6753657474696e67123c0a16676f6f676c" .
            "655f676c6f62616c5f736974655f74616718012001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c756542fa010a25636f" .
            "6d2e676f6f676c652e6164732e676f6f676c656164732e76312e7265736f" .
            "7572636573420d437573746f6d657250726f746f50015a4a676f6f676c65" .
            "2e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069" .
            "732f6164732f676f6f676c656164732f76312f7265736f75726365733b72" .
            "65736f7572636573a20203474141aa0221476f6f676c652e4164732e476f" .
            "6f676c654164732e56312e5265736f7572636573ca0221476f6f676c655c" .
            "4164735c476f6f676c654164735c56315c5265736f7572636573ea022547" .
            "6f6f676c653a3a4164733a3a476f6f676c654164733a3a56313a3a526573" .
            "6f7572636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

