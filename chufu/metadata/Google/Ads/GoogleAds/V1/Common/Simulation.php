<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/simulation.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Common;

class Simulation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a80140a2f676f6f676c652f6164732f676f6f676c656164732f76312f63" .
            "6f6d6d6f6e2f73696d756c6174696f6e2e70726f746f121e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e636f6d6d6f6e1a1c676f6f67" .
            "6c652f6170692f616e6e6f746174696f6e732e70726f746f226c0a1e4269" .
            "644d6f64696669657253696d756c6174696f6e506f696e744c697374124a" .
            "0a06706f696e747318012003280b323a2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e636f6d6d6f6e2e4269644d6f64696669657253" .
            "696d756c6174696f6e506f696e7422620a1943706342696453696d756c61" .
            "74696f6e506f696e744c69737412450a06706f696e747318012003280b32" .
            "352e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d" .
            "6f6e2e43706342696453696d756c6174696f6e506f696e7422620a194370" .
            "7642696453696d756c6174696f6e506f696e744c69737412450a06706f69" .
            "6e747318012003280b32352e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e636f6d6d6f6e2e43707642696453696d756c6174696f6e50" .
            "6f696e7422680a1c54617267657443706153696d756c6174696f6e506f69" .
            "6e744c69737412480a06706f696e747318012003280b32382e676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e54617267" .
            "657443706153696d756c6174696f6e506f696e74228e060a1a4269644d6f" .
            "64696669657253696d756c6174696f6e506f696e7412320a0c6269645f6d" .
            "6f64696669657218012001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c7565123a0a146269646461626c655f636f6e76" .
            "657273696f6e7318022001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c756512400a1a6269646461626c655f636f6e76" .
            "657273696f6e735f76616c756518032001280b321c2e676f6f676c652e70" .
            "726f746f6275662e446f75626c6556616c7565122b0a06636c69636b7318" .
            "042001280b321b2e676f6f676c652e70726f746f6275662e496e74363456" .
            "616c756512300a0b636f73745f6d6963726f7318052001280b321b2e676f" .
            "6f676c652e70726f746f6275662e496e74363456616c756512300a0b696d" .
            "7072657373696f6e7318062001280b321b2e676f6f676c652e70726f746f" .
            "6275662e496e74363456616c756512390a14746f705f736c6f745f696d70" .
            "72657373696f6e7318072001280b321b2e676f6f676c652e70726f746f62" .
            "75662e496e74363456616c756512410a1b706172656e745f626964646162" .
            "6c655f636f6e76657273696f6e7318082001280b321c2e676f6f676c652e" .
            "70726f746f6275662e446f75626c6556616c756512470a21706172656e74" .
            "5f6269646461626c655f636f6e76657273696f6e735f76616c7565180920" .
            "01280b321c2e676f6f676c652e70726f746f6275662e446f75626c655661" .
            "6c756512320a0d706172656e745f636c69636b73180a2001280b321b2e67" .
            "6f6f676c652e70726f746f6275662e496e74363456616c756512370a1270" .
            "6172656e745f636f73745f6d6963726f73180b2001280b321b2e676f6f67" .
            "6c652e70726f746f6275662e496e74363456616c756512370a1270617265" .
            "6e745f696d7072657373696f6e73180c2001280b321b2e676f6f676c652e" .
            "70726f746f6275662e496e74363456616c756512400a1b706172656e745f" .
            "746f705f736c6f745f696d7072657373696f6e73180d2001280b321b2e67" .
            "6f6f676c652e70726f746f6275662e496e74363456616c75652296030a15" .
            "43706342696453696d756c6174696f6e506f696e7412330a0e6370635f62" .
            "69645f6d6963726f7318012001280b321b2e676f6f676c652e70726f746f" .
            "6275662e496e74363456616c7565123a0a146269646461626c655f636f6e" .
            "76657273696f6e7318022001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c756512400a1a6269646461626c655f636f6e" .
            "76657273696f6e735f76616c756518032001280b321c2e676f6f676c652e" .
            "70726f746f6275662e446f75626c6556616c7565122b0a06636c69636b73" .
            "18042001280b321b2e676f6f676c652e70726f746f6275662e496e743634" .
            "56616c756512300a0b636f73745f6d6963726f7318052001280b321b2e67" .
            "6f6f676c652e70726f746f6275662e496e74363456616c756512300a0b69" .
            "6d7072657373696f6e7318062001280b321b2e676f6f676c652e70726f74" .
            "6f6275662e496e74363456616c756512390a14746f705f736c6f745f696d" .
            "7072657373696f6e7318072001280b321b2e676f6f676c652e70726f746f" .
            "6275662e496e74363456616c756522b0010a1543707642696453696d756c" .
            "6174696f6e506f696e7412330a0e6370765f6269645f6d6963726f731801" .
            "2001280b321b2e676f6f676c652e70726f746f6275662e496e7436345661" .
            "6c756512300a0b636f73745f6d6963726f7318022001280b321b2e676f6f" .
            "676c652e70726f746f6275662e496e74363456616c756512300a0b696d70" .
            "72657373696f6e7318032001280b321b2e676f6f676c652e70726f746f62" .
            "75662e496e74363456616c7565229c030a1854617267657443706153696d" .
            "756c6174696f6e506f696e7412360a117461726765745f6370615f6d6963" .
            "726f7318012001280b321b2e676f6f676c652e70726f746f6275662e496e" .
            "74363456616c7565123a0a146269646461626c655f636f6e76657273696f" .
            "6e7318022001280b321c2e676f6f676c652e70726f746f6275662e446f75" .
            "626c6556616c756512400a1a6269646461626c655f636f6e76657273696f" .
            "6e735f76616c756518032001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c7565122b0a06636c69636b7318042001280b" .
            "321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512" .
            "300a0b636f73745f6d6963726f7318052001280b321b2e676f6f676c652e" .
            "70726f746f6275662e496e74363456616c756512300a0b696d7072657373" .
            "696f6e7318062001280b321b2e676f6f676c652e70726f746f6275662e49" .
            "6e74363456616c756512390a14746f705f736c6f745f696d707265737369" .
            "6f6e7318072001280b321b2e676f6f676c652e70726f746f6275662e496e" .
            "74363456616c756542ea010a22636f6d2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e636f6d6d6f6e420f53696d756c6174696f6e50" .
            "726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70" .
            "726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f" .
            "76312f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c" .
            "652e4164732e476f6f676c654164732e56312e436f6d6d6f6eca021e476f" .
            "6f676c655c4164735c476f6f676c654164735c56315c436f6d6d6f6eea02" .
            "22476f6f676c653a3a4164733a3a476f6f676c654164733a3a56313a3a43" .
            "6f6d6d6f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

