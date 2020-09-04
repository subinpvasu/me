<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/vanity_pharma_text.proto

namespace Google\Ads\GoogleAds\V3\Enums\VanityPharmaTextEnum;

use UnexpectedValueException;

/**
 * Enum describing possible text.
 *
 * Protobuf type <code>google.ads.googleads.v3.enums.VanityPharmaTextEnum.VanityPharmaText</code>
 */
class VanityPharmaText
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Prescription treatment website with website content in English.
     *
     * Generated from protobuf enum <code>PRESCRIPTION_TREATMENT_WEBSITE_EN = 2;</code>
     */
    const PRESCRIPTION_TREATMENT_WEBSITE_EN = 2;
    /**
     * Prescription treatment website with website content in Spanish
     * (Sitio de tratamientos con receta).
     *
     * Generated from protobuf enum <code>PRESCRIPTION_TREATMENT_WEBSITE_ES = 3;</code>
     */
    const PRESCRIPTION_TREATMENT_WEBSITE_ES = 3;
    /**
     * Prescription device website with website content in English.
     *
     * Generated from protobuf enum <code>PRESCRIPTION_DEVICE_WEBSITE_EN = 4;</code>
     */
    const PRESCRIPTION_DEVICE_WEBSITE_EN = 4;
    /**
     * Prescription device website with website content in Spanish (Sitio de
     * dispositivos con receta).
     *
     * Generated from protobuf enum <code>PRESCRIPTION_DEVICE_WEBSITE_ES = 5;</code>
     */
    const PRESCRIPTION_DEVICE_WEBSITE_ES = 5;
    /**
     * Medical device website with website content in English.
     *
     * Generated from protobuf enum <code>MEDICAL_DEVICE_WEBSITE_EN = 6;</code>
     */
    const MEDICAL_DEVICE_WEBSITE_EN = 6;
    /**
     * Medical device website with website content in Spanish (Sitio de
     * dispositivos médicos).
     *
     * Generated from protobuf enum <code>MEDICAL_DEVICE_WEBSITE_ES = 7;</code>
     */
    const MEDICAL_DEVICE_WEBSITE_ES = 7;
    /**
     * Preventative treatment website with website content in English.
     *
     * Generated from protobuf enum <code>PREVENTATIVE_TREATMENT_WEBSITE_EN = 8;</code>
     */
    const PREVENTATIVE_TREATMENT_WEBSITE_EN = 8;
    /**
     * Preventative treatment website with website content in Spanish (Sitio de
     * tratamientos preventivos).
     *
     * Generated from protobuf enum <code>PREVENTATIVE_TREATMENT_WEBSITE_ES = 9;</code>
     */
    const PREVENTATIVE_TREATMENT_WEBSITE_ES = 9;
    /**
     * Prescription contraception website with website content in English.
     *
     * Generated from protobuf enum <code>PRESCRIPTION_CONTRACEPTION_WEBSITE_EN = 10;</code>
     */
    const PRESCRIPTION_CONTRACEPTION_WEBSITE_EN = 10;
    /**
     * Prescription contraception website with website content in Spanish (Sitio
     * de anticonceptivos con receta).
     *
     * Generated from protobuf enum <code>PRESCRIPTION_CONTRACEPTION_WEBSITE_ES = 11;</code>
     */
    const PRESCRIPTION_CONTRACEPTION_WEBSITE_ES = 11;
    /**
     * Prescription vaccine website with website content in English.
     *
     * Generated from protobuf enum <code>PRESCRIPTION_VACCINE_WEBSITE_EN = 12;</code>
     */
    const PRESCRIPTION_VACCINE_WEBSITE_EN = 12;
    /**
     * Prescription vaccine website with website content in Spanish (Sitio de
     * vacunas con receta).
     *
     * Generated from protobuf enum <code>PRESCRIPTION_VACCINE_WEBSITE_ES = 13;</code>
     */
    const PRESCRIPTION_VACCINE_WEBSITE_ES = 13;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PRESCRIPTION_TREATMENT_WEBSITE_EN => 'PRESCRIPTION_TREATMENT_WEBSITE_EN',
        self::PRESCRIPTION_TREATMENT_WEBSITE_ES => 'PRESCRIPTION_TREATMENT_WEBSITE_ES',
        self::PRESCRIPTION_DEVICE_WEBSITE_EN => 'PRESCRIPTION_DEVICE_WEBSITE_EN',
        self::PRESCRIPTION_DEVICE_WEBSITE_ES => 'PRESCRIPTION_DEVICE_WEBSITE_ES',
        self::MEDICAL_DEVICE_WEBSITE_EN => 'MEDICAL_DEVICE_WEBSITE_EN',
        self::MEDICAL_DEVICE_WEBSITE_ES => 'MEDICAL_DEVICE_WEBSITE_ES',
        self::PREVENTATIVE_TREATMENT_WEBSITE_EN => 'PREVENTATIVE_TREATMENT_WEBSITE_EN',
        self::PREVENTATIVE_TREATMENT_WEBSITE_ES => 'PREVENTATIVE_TREATMENT_WEBSITE_ES',
        self::PRESCRIPTION_CONTRACEPTION_WEBSITE_EN => 'PRESCRIPTION_CONTRACEPTION_WEBSITE_EN',
        self::PRESCRIPTION_CONTRACEPTION_WEBSITE_ES => 'PRESCRIPTION_CONTRACEPTION_WEBSITE_ES',
        self::PRESCRIPTION_VACCINE_WEBSITE_EN => 'PRESCRIPTION_VACCINE_WEBSITE_EN',
        self::PRESCRIPTION_VACCINE_WEBSITE_ES => 'PRESCRIPTION_VACCINE_WEBSITE_ES',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VanityPharmaText::class, \Google\Ads\GoogleAds\V3\Enums\VanityPharmaTextEnum_VanityPharmaText::class);

