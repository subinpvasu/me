<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/change_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V4\Resources;

class ChangeStatus
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
            "0acf030a3b676f6f676c652f6164732f676f6f676c656164732f76342f656e756d732f6368616e67655f7374617475735f6f7065726174696f6e2e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76342e656e756d7322770a194368616e67655374617475734f7065726174696f6e456e756d225a0a154368616e67655374617475734f7065726174696f6e120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112090a0541444445441002120b0a074348414e4745441003120b0a0752454d4f564544100442ef010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d73421a4368616e67655374617475734f7065726174696f6e50726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56342e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56345c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a456e756d73620670726f746f330af0040a3f676f6f676c652f6164732f676f6f676c656164732f76342f656e756d732f6368616e67655f7374617475735f7265736f757263655f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76342e656e756d732290020a1c4368616e67655374617475735265736f7572636554797065456e756d22ef010a184368616e67655374617475735265736f7572636554797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120c0a0841445f47524f55501003120f0a0b41445f47524f55505f4144100412160a1241445f47524f55505f435249544552494f4e1005120c0a0843414d504149474e100612160a1243414d504149474e5f435249544552494f4e100712080a04464545441009120d0a09464545445f4954454d100a12110a0d41445f47524f55505f46454544100b12110a0d43414d504149474e5f46454544100c12190a1541445f47524f55505f4249445f4d4f444946494552100d42f2010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d73421d4368616e67655374617475735265736f757263655479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56342e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56345c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a456e756d73620670726f746f330acd0f0a35676f6f676c652f6164732f676f6f676c656164732f76342f7265736f75726365732f6368616e67655f7374617475732e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76342e7265736f75726365731a3f676f6f676c652f6164732f676f6f676c656164732f76342f656e756d732f6368616e67655f7374617475735f7265736f757263655f747970652e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22ac0b0a0c4368616e676553746174757312440a0d7265736f757263655f6e616d65180120012809422de04103fa41270a25676f6f676c656164732e676f6f676c65617069732e636f6d2f4368616e676553746174757312400a156c6173745f6368616e67655f646174655f74696d6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410312700a0d7265736f757263655f7479706518042001280e32542e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d732e4368616e67655374617475735265736f7572636554797065456e756d2e4368616e67655374617475735265736f75726365547970654203e0410312590a0863616d706169676e18052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654229e04103fa41230a21676f6f676c656164732e676f6f676c65617069732e636f6d2f43616d706169676e12580a0861645f67726f757018062001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654228e04103fa41220a20676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f7570126c0a0f7265736f757263655f73746174757318082001280e324e2e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d732e4368616e67655374617475734f7065726174696f6e456e756d2e4368616e67655374617475734f7065726174696f6e4203e04103125d0a0b61645f67726f75705f616418092001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565422ae04103fa41240a22676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f75704164126b0a1261645f67726f75705f637269746572696f6e180a2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654231e04103fa412b0a29676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f7570437269746572696f6e126c0a1263616d706169676e5f637269746572696f6e180b2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654232e04103fa412c0a2a676f6f676c656164732e676f6f676c65617069732e636f6d2f43616d706169676e437269746572696f6e12510a0466656564180c2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654225e04103fa411f0a1d676f6f676c656164732e676f6f676c65617069732e636f6d2f46656564125a0a09666565645f6974656d180d2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654229e04103fa41230a21676f6f676c656164732e676f6f676c65617069732e636f6d2f466565644974656d12610a0d61645f67726f75705f66656564180e2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565422ce04103fa41260a24676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f75704665656412620a0d63616d706169676e5f66656564180f2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565422de04103fa41270a25676f6f676c656164732e676f6f676c65617069732e636f6d2f43616d706169676e4665656412700a1561645f67726f75705f6269645f6d6f64696669657218102001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654233e04103fa412d0a2b676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f75704269644d6f6469666965723a5dea415a0a25676f6f676c656164732e676f6f676c65617069732e636f6d2f4368616e67655374617475731231637573746f6d6572732f7b637573746f6d65727d2f6368616e67655374617475732f7b6368616e67655f7374617475737d42fe010a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e7265736f757263657342114368616e676553746174757350726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56342e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56345c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a5265736f7572636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

