<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/asset_link_error.proto

namespace Google\Ads\GoogleAds\V5\Errors\AssetLinkErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible asset link errors.
 *
 * Protobuf type <code>google.ads.googleads.v5.errors.AssetLinkErrorEnum.AssetLinkError</code>
 */
class AssetLinkError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Pinning is not supported for the given asset link field.
     *
     * Generated from protobuf enum <code>PINNING_UNSUPPORTED = 2;</code>
     */
    const PINNING_UNSUPPORTED = 2;
    /**
     * The given field type is not supported to be added directly via asset
     * links.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_FIELD_TYPE = 3;</code>
     */
    const UNSUPPORTED_FIELD_TYPE = 3;
    /**
     * The given asset's type and the specified field type are incompatible.
     *
     * Generated from protobuf enum <code>FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE = 4;</code>
     */
    const FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE = 4;
    /**
     * The specified field type is incompatible with the given campaign type.
     *
     * Generated from protobuf enum <code>FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE = 5;</code>
     */
    const FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PINNING_UNSUPPORTED => 'PINNING_UNSUPPORTED',
        self::UNSUPPORTED_FIELD_TYPE => 'UNSUPPORTED_FIELD_TYPE',
        self::FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE => 'FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE',
        self::FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE => 'FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE',
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
class_alias(AssetLinkError::class, \Google\Ads\GoogleAds\V5\Errors\AssetLinkErrorEnum_AssetLinkError::class);
