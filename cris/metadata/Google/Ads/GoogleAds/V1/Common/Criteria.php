<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/criteria.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Common;

class Criteria
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\AgeRangeType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\AppPaymentModelType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\ContentLabelType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\DayOfWeek::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\Device::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\GenderType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\HotelDateSelectionType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\IncomeRangeType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\InteractionType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\KeywordMatchType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\ListingCustomAttributeIndex::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\ListingGroupType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\LocationGroupRadiusUnits::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\MinuteOfHour::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\ParentalStatusType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\PreferredContentType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\ProductBiddingCategoryLevel::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\ProductChannel::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\ProductChannelExclusivity::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\ProductCondition::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\ProductTypeLevel::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\ProximityRadiusUnits::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\WebpageConditionOperand::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\WebpageConditionOperator::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa3490a2d676f6f676c652f6164732f676f6f676c656164732f76312f63" .
            "6f6d6d6f6e2f63726974657269612e70726f746f121e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e636f6d6d6f6e1a3a676f6f676c65" .
            "2f6164732f676f6f676c656164732f76312f656e756d732f6170705f7061" .
            "796d656e745f6d6f64656c5f747970652e70726f746f1a36676f6f676c65" .
            "2f6164732f676f6f676c656164732f76312f656e756d732f636f6e74656e" .
            "745f6c6162656c5f747970652e70726f746f1a2f676f6f676c652f616473" .
            "2f676f6f676c656164732f76312f656e756d732f6461795f6f665f776565" .
            "6b2e70726f746f1a2a676f6f676c652f6164732f676f6f676c656164732f" .
            "76312f656e756d732f6465766963652e70726f746f1a2f676f6f676c652f" .
            "6164732f676f6f676c656164732f76312f656e756d732f67656e6465725f" .
            "747970652e70726f746f1a3d676f6f676c652f6164732f676f6f676c6561" .
            "64732f76312f656e756d732f686f74656c5f646174655f73656c65637469" .
            "6f6e5f747970652e70726f746f1a35676f6f676c652f6164732f676f6f67" .
            "6c656164732f76312f656e756d732f696e636f6d655f72616e67655f7479" .
            "70652e70726f746f1a34676f6f676c652f6164732f676f6f676c65616473" .
            "2f76312f656e756d732f696e746572616374696f6e5f747970652e70726f" .
            "746f1a36676f6f676c652f6164732f676f6f676c656164732f76312f656e" .
            "756d732f6b6579776f72645f6d617463685f747970652e70726f746f1a42" .
            "676f6f676c652f6164732f676f6f676c656164732f76312f656e756d732f" .
            "6c697374696e675f637573746f6d5f6174747269627574655f696e646578" .
            "2e70726f746f1a36676f6f676c652f6164732f676f6f676c656164732f76" .
            "312f656e756d732f6c697374696e675f67726f75705f747970652e70726f" .
            "746f1a3f676f6f676c652f6164732f676f6f676c656164732f76312f656e" .
            "756d732f6c6f636174696f6e5f67726f75705f7261646975735f756e6974" .
            "732e70726f746f1a32676f6f676c652f6164732f676f6f676c656164732f" .
            "76312f656e756d732f6d696e7574655f6f665f686f75722e70726f746f1a" .
            "38676f6f676c652f6164732f676f6f676c656164732f76312f656e756d73" .
            "2f706172656e74616c5f7374617475735f747970652e70726f746f1a3a67" .
            "6f6f676c652f6164732f676f6f676c656164732f76312f656e756d732f70" .
            "72656665727265645f636f6e74656e745f747970652e70726f746f1a4267" .
            "6f6f676c652f6164732f676f6f676c656164732f76312f656e756d732f70" .
            "726f647563745f62696464696e675f63617465676f72795f6c6576656c2e" .
            "70726f746f1a33676f6f676c652f6164732f676f6f676c656164732f7631" .
            "2f656e756d732f70726f647563745f6368616e6e656c2e70726f746f1a3f" .
            "676f6f676c652f6164732f676f6f676c656164732f76312f656e756d732f" .
            "70726f647563745f6368616e6e656c5f6578636c757369766974792e7072" .
            "6f746f1a35676f6f676c652f6164732f676f6f676c656164732f76312f65" .
            "6e756d732f70726f647563745f636f6e646974696f6e2e70726f746f1a36" .
            "676f6f676c652f6164732f676f6f676c656164732f76312f656e756d732f" .
            "70726f647563745f747970655f6c6576656c2e70726f746f1a3a676f6f67" .
            "6c652f6164732f676f6f676c656164732f76312f656e756d732f70726f78" .
            "696d6974795f7261646975735f756e6974732e70726f746f1a3d676f6f67" .
            "6c652f6164732f676f6f676c656164732f76312f656e756d732f77656270" .
            "6167655f636f6e646974696f6e5f6f706572616e642e70726f746f1a3e67" .
            "6f6f676c652f6164732f676f6f676c656164732f76312f656e756d732f77" .
            "6562706167655f636f6e646974696f6e5f6f70657261746f722e70726f74" .
            "6f1a1e676f6f676c652f70726f746f6275662f77726170706572732e7072" .
            "6f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e7072" .
            "6f746f2293010a0b4b6579776f7264496e666f122a0a0474657874180120" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c756512580a0a6d617463685f7479706518022001280e32442e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e656e756d732e4b657977" .
            "6f72644d6174636854797065456e756d2e4b6579776f72644d6174636854" .
            "797065223a0a0d506c6163656d656e74496e666f12290a0375726c180120" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c7565225b0a154d6f62696c6541707043617465676f7279496e666f1242" .
            "0a1c6d6f62696c655f6170705f63617465676f72795f636f6e7374616e74" .
            "18012001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756522710a154d6f62696c654170706c69636174696f6e496e66" .
            "6f122c0a066170705f696418022001280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c7565122a0a046e616d651803200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6522490a0c4c6f636174696f6e496e666f12390a1367656f5f7461726765" .
            "745f636f6e7374616e7418012001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c7565224c0a0a446576696365496e666f" .
            "123e0a047479706518012001280e32302e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e656e756d732e446576696365456e756d2e4465" .
            "7669636522720a14507265666572726564436f6e74656e74496e666f125a" .
            "0a047479706518022001280e324c2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e656e756d732e507265666572726564436f6e74656e" .
            "7454797065456e756d2e507265666572726564436f6e74656e7454797065" .
            "22f1010a104c697374696e6747726f7570496e666f12520a047479706518" .
            "012001280e32442e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e656e756d732e4c697374696e6747726f757054797065456e756d2e4c" .
            "697374696e6747726f75705479706512480a0a636173655f76616c756518" .
            "022001280b32342e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e636f6d6d6f6e2e4c697374696e6744696d656e73696f6e496e666f12" .
            "3f0a19706172656e745f61645f67726f75705f637269746572696f6e1803" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c7565225c0a104c697374696e6753636f7065496e666f12480a0a6469" .
            "6d656e73696f6e7318022003280b32342e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e636f6d6d6f6e2e4c697374696e6744696d656e" .
            "73696f6e496e666f229b090a144c697374696e6744696d656e73696f6e49" .
            "6e666f12490a0d6c697374696e675f6272616e6418012001280b32302e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e" .
            "4c697374696e674272616e64496e666f4800123f0a08686f74656c5f6964" .
            "18022001280b322b2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e636f6d6d6f6e2e486f74656c4964496e666f480012450a0b686f74" .
            "656c5f636c61737318032001280b322e2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e636f6d6d6f6e2e486f74656c436c617373496e" .
            "666f480012560a14686f74656c5f636f756e7472795f726567696f6e1804" .
            "2001280b32362e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e636f6d6d6f6e2e486f74656c436f756e747279526567696f6e496e666f" .
            "480012450a0b686f74656c5f737461746518052001280b322e2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e486f74" .
            "656c5374617465496e666f480012430a0a686f74656c5f63697479180620" .
            "01280b322d2e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "636f6d6d6f6e2e486f74656c43697479496e666f4800125e0a186c697374" .
            "696e675f637573746f6d5f61747472696275746518072001280b323a2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e" .
            "4c697374696e67437573746f6d417474726962757465496e666f4800125e" .
            "0a1870726f647563745f62696464696e675f63617465676f7279180d2001" .
            "280b323a2e676f6f676c652e6164732e676f6f676c656164732e76312e63" .
            "6f6d6d6f6e2e50726f6475637442696464696e6743617465676f7279496e" .
            "666f4800124d0a0f70726f647563745f6368616e6e656c18082001280b32" .
            "322e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d" .
            "6f6e2e50726f647563744368616e6e656c496e666f480012640a1b70726f" .
            "647563745f6368616e6e656c5f6578636c7573697669747918092001280b" .
            "323d2e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d" .
            "6d6f6e2e50726f647563744368616e6e656c4578636c7573697669747949" .
            "6e666f480012510a1170726f647563745f636f6e646974696f6e180a2001" .
            "280b32342e676f6f676c652e6164732e676f6f676c656164732e76312e63" .
            "6f6d6d6f6e2e50726f64756374436f6e646974696f6e496e666f4800124c" .
            "0a0f70726f647563745f6974656d5f6964180b2001280b32312e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e50726f" .
            "647563744974656d4964496e666f480012470a0c70726f647563745f7479" .
            "7065180c2001280b322f2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e636f6d6d6f6e2e50726f6475637454797065496e666f480012" .
            "600a19756e6b6e6f776e5f6c697374696e675f64696d656e73696f6e180e" .
            "2001280b323b2e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e636f6d6d6f6e2e556e6b6e6f776e4c697374696e6744696d656e73696f" .
            "6e496e666f4800420b0a0964696d656e73696f6e223f0a104c697374696e" .
            "674272616e64496e666f122b0a0576616c756518012001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c7565223a0a0b48" .
            "6f74656c4964496e666f122b0a0576616c756518012001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c7565223c0a0e48" .
            "6f74656c436c617373496e666f122a0a0576616c756518012001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74363456616c756522580a" .
            "16486f74656c436f756e747279526567696f6e496e666f123e0a18636f75" .
            "6e7472795f726567696f6e5f637269746572696f6e18012001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c756522470a" .
            "0e486f74656c5374617465496e666f12350a0f73746174655f6372697465" .
            "72696f6e18012001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c756522450a0d486f74656c43697479496e666f12340a" .
            "0e636974795f637269746572696f6e18012001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c756522b4010a1a4c697374" .
            "696e67437573746f6d417474726962757465496e666f122b0a0576616c75" .
            "6518012001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c756512690a05696e64657818022001280e325a2e676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e656e756d732e4c69737469" .
            "6e67437573746f6d417474726962757465496e646578456e756d2e4c6973" .
            "74696e67437573746f6d417474726962757465496e64657822e4010a1a50" .
            "726f6475637442696464696e6743617465676f7279496e666f12270a0269" .
            "6418012001280b321b2e676f6f676c652e70726f746f6275662e496e7436" .
            "3456616c756512320a0c636f756e7472795f636f646518022001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651269" .
            "0a056c6576656c18032001280e325a2e676f6f676c652e6164732e676f6f" .
            "676c656164732e76312e656e756d732e50726f6475637442696464696e67" .
            "43617465676f72794c6576656c456e756d2e50726f647563744269646469" .
            "6e6743617465676f72794c6576656c22670a1250726f647563744368616e" .
            "6e656c496e666f12510a076368616e6e656c18012001280e32402e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e656e756d732e50726f" .
            "647563744368616e6e656c456e756d2e50726f647563744368616e6e656c" .
            "2294010a1d50726f647563744368616e6e656c4578636c75736976697479" .
            "496e666f12730a136368616e6e656c5f6578636c75736976697479180120" .
            "01280e32562e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "656e756d732e50726f647563744368616e6e656c4578636c757369766974" .
            "79456e756d2e50726f647563744368616e6e656c4578636c757369766974" .
            "79226f0a1450726f64756374436f6e646974696f6e496e666f12570a0963" .
            "6f6e646974696f6e18012001280e32442e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e656e756d732e50726f64756374436f6e646974" .
            "696f6e456e756d2e50726f64756374436f6e646974696f6e22400a115072" .
            "6f647563744974656d4964496e666f122b0a0576616c756518012001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "2293010a0f50726f6475637454797065496e666f122b0a0576616c756518" .
            "012001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756512530a056c6576656c18022001280e32442e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e656e756d732e50726f64756374" .
            "547970654c6576656c456e756d2e50726f64756374547970654c6576656c" .
            "221d0a1b556e6b6e6f776e4c697374696e6744696d656e73696f6e496e66" .
            "6f227c0a1a486f74656c4461746553656c656374696f6e54797065496e66" .
            "6f125e0a047479706518012001280e32502e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76312e656e756d732e486f74656c4461746553656c" .
            "656374696f6e54797065456e756d2e486f74656c4461746553656c656374" .
            "696f6e54797065227d0a1d486f74656c416476616e6365426f6f6b696e67" .
            "57696e646f77496e666f122d0a086d696e5f6461797318012001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74363456616c7565122d0a" .
            "086d61785f6461797318022001280b321b2e676f6f676c652e70726f746f" .
            "6275662e496e74363456616c756522790a15486f74656c4c656e6774684f" .
            "6653746179496e666f122f0a0a6d696e5f6e696768747318012001280b32" .
            "1b2e676f6f676c652e70726f746f6275662e496e74363456616c7565122f" .
            "0a0a6d61785f6e696768747318022001280b321b2e676f6f676c652e7072" .
            "6f746f6275662e496e74363456616c756522620a13486f74656c43686563" .
            "6b496e446179496e666f124b0a0b6461795f6f665f7765656b1801200128" .
            "0e32362e676f6f676c652e6164732e676f6f676c656164732e76312e656e" .
            "756d732e4461794f665765656b456e756d2e4461794f665765656b22670a" .
            "13496e746572616374696f6e54797065496e666f12500a04747970651801" .
            "2001280e32422e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e656e756d732e496e746572616374696f6e54797065456e756d2e496e74" .
            "6572616374696f6e5479706522e3020a0e41645363686564756c65496e66" .
            "6f12520a0c73746172745f6d696e75746518012001280e323c2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e656e756d732e4d696e75" .
            "74654f66486f7572456e756d2e4d696e7574654f66486f757212500a0a65" .
            "6e645f6d696e75746518022001280e323c2e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76312e656e756d732e4d696e7574654f66486f7572" .
            "456e756d2e4d696e7574654f66486f7572122f0a0a73746172745f686f75" .
            "7218032001280b321b2e676f6f676c652e70726f746f6275662e496e7433" .
            "3256616c7565122d0a08656e645f686f757218042001280b321b2e676f6f" .
            "676c652e70726f746f6275662e496e74333256616c7565124b0a0b646179" .
            "5f6f665f7765656b18052001280e32362e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e656e756d732e4461794f665765656b456e756d" .
            "2e4461794f665765656b225a0a0c41676552616e6765496e666f124a0a04" .
            "7479706518012001280e323c2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e656e756d732e41676552616e676554797065456e756d2e" .
            "41676552616e67655479706522540a0a47656e646572496e666f12460a04" .
            "7479706518012001280e32382e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e656e756d732e47656e64657254797065456e756d2e4765" .
            "6e6465725479706522630a0f496e636f6d6552616e6765496e666f12500a" .
            "047479706518012001280e32422e676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e656e756d732e496e636f6d6552616e67655479706545" .
            "6e756d2e496e636f6d6552616e676554797065226c0a12506172656e7461" .
            "6c537461747573496e666f12560a047479706518012001280e32482e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e656e756d732e5061" .
            "72656e74616c53746174757354797065456e756d2e506172656e74616c53" .
            "74617475735479706522420a10596f7554756265566964656f496e666f12" .
            "2e0a08766964656f5f696418012001280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c756522460a12596f75547562654368" .
            "616e6e656c496e666f12300a0a6368616e6e656c5f696418012001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522" .
            "3f0a0c557365724c697374496e666f122f0a09757365725f6c6973741801" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756522a0020a0d50726f78696d697479496e666f123f0a0967656f5f" .
            "706f696e7418012001280b322c2e676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e636f6d6d6f6e2e47656f506f696e74496e666f122c0a" .
            "0672616469757318022001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c756512620a0c7261646975735f756e69747318" .
            "032001280e324c2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e656e756d732e50726f78696d697479526164697573556e697473456e" .
            "756d2e50726f78696d697479526164697573556e697473123c0a07616464" .
            "7265737318042001280b322b2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e636f6d6d6f6e2e41646472657373496e666f228f010a0c" .
            "47656f506f696e74496e666f123f0a1a6c6f6e6769747564655f696e5f6d" .
            "6963726f5f6465677265657318012001280b321b2e676f6f676c652e7072" .
            "6f746f6275662e496e74333256616c7565123e0a196c617469747564655f" .
            "696e5f6d6963726f5f6465677265657318022001280b321b2e676f6f676c" .
            "652e70726f746f6275662e496e74333256616c756522fc020a0b41646472" .
            "657373496e666f12310a0b706f7374616c5f636f646518012001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651233" .
            "0a0d70726f76696e63655f636f646518022001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c756512320a0c636f756e74" .
            "72795f636f646518032001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512330a0d70726f76696e63655f6e616d65" .
            "18042001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512340a0e7374726565745f6164647265737318052001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "12350a0f7374726565745f616464726573733218062001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c7565122f0a0963" .
            "6974795f6e616d6518072001280b321c2e676f6f676c652e70726f746f62" .
            "75662e537472696e6756616c7565226d0a09546f706963496e666f12340a" .
            "0e746f7069635f636f6e7374616e7418012001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c7565122a0a047061746818" .
            "022003280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756522470a0c4c616e6775616765496e666f12370a116c616e6775" .
            "6167655f636f6e7374616e7418012001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c7565223f0a0b4970426c6f636b49" .
            "6e666f12300a0a69705f6164647265737318012001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c756522660a10436f6e" .
            "74656e744c6162656c496e666f12520a047479706518012001280e32442e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e656e756d732e" .
            "436f6e74656e744c6162656c54797065456e756d2e436f6e74656e744c61" .
            "62656c5479706522450a0b43617272696572496e666f12360a1063617272" .
            "6965725f636f6e7374616e7418012001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c756522500a1055736572496e7465" .
            "72657374496e666f123c0a16757365725f696e7465726573745f63617465" .
            "676f727918012001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c7565228d010a0b57656270616765496e666f12340a0e" .
            "637269746572696f6e5f6e616d6518012001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c756512480a0a636f6e646974" .
            "696f6e7318022003280b32342e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e636f6d6d6f6e2e57656270616765436f6e646974696f6e" .
            "496e666f2293020a1457656270616765436f6e646974696f6e496e666f12" .
            "630a076f706572616e6418012001280e32522e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e656e756d732e57656270616765436f6e64" .
            "6974696f6e4f706572616e64456e756d2e57656270616765436f6e646974" .
            "696f6e4f706572616e6412660a086f70657261746f7218022001280e3254" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e656e756d73" .
            "2e57656270616765436f6e646974696f6e4f70657261746f72456e756d2e" .
            "57656270616765436f6e646974696f6e4f70657261746f72122e0a086172" .
            "67756d656e7418032001280b321c2e676f6f676c652e70726f746f627566" .
            "2e537472696e6756616c756522650a1a4f7065726174696e675379737465" .
            "6d56657273696f6e496e666f12470a216f7065726174696e675f73797374" .
            "656d5f76657273696f6e5f636f6e7374616e7418012001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c7565226f0a1341" .
            "70705061796d656e744d6f64656c496e666f12580a047479706518012001" .
            "280e324a2e676f6f676c652e6164732e676f6f676c656164732e76312e65" .
            "6e756d732e4170705061796d656e744d6f64656c54797065456e756d2e41" .
            "70705061796d656e744d6f64656c5479706522500a104d6f62696c654465" .
            "76696365496e666f123c0a166d6f62696c655f6465766963655f636f6e73" .
            "74616e7418012001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c7565224b0a12437573746f6d416666696e697479496e" .
            "666f12350a0f637573746f6d5f616666696e69747918012001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c756522470a" .
            "10437573746f6d496e74656e74496e666f12330a0d637573746f6d5f696e" .
            "74656e7418012001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c75652294020a114c6f636174696f6e47726f7570496e" .
            "666f122a0a046665656418012001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c7565123a0a1467656f5f746172676574" .
            "5f636f6e7374616e747318022003280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c7565122b0a0672616469757318032001" .
            "280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75" .
            "65126a0a0c7261646975735f756e69747318042001280e32542e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e656e756d732e4c6f6361" .
            "74696f6e47726f7570526164697573556e697473456e756d2e4c6f636174" .
            "696f6e47726f7570526164697573556e69747342e8010a22636f6d2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e420d" .
            "437269746572696150726f746f50015a44676f6f676c652e676f6c616e67" .
            "2e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f67" .
            "6f6f676c656164732f76312f636f6d6d6f6e3b636f6d6d6f6ea202034741" .
            "41aa021e476f6f676c652e4164732e476f6f676c654164732e56312e436f" .
            "6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c5631" .
            "5c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c6541" .
            "64733a3a56313a3a436f6d6d6f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

