<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementExchangeAccessStateReason extends Enum {
    public const NONE = "none";
    public const UNKNOWN = "unknown";
    public const EXCHANGE_GLOBAL_RULE = "exchangeGlobalRule";
    public const EXCHANGE_INDIVIDUAL_RULE = "exchangeIndividualRule";
    public const EXCHANGE_DEVICE_RULE = "exchangeDeviceRule";
    public const EXCHANGE_UPGRADE = "exchangeUpgrade";
    public const EXCHANGE_MAILBOX_POLICY = "exchangeMailboxPolicy";
    public const OTHER = "other";
    public const COMPLIANT = "compliant";
    public const NOT_COMPLIANT = "notCompliant";
    public const NOT_ENROLLED = "notEnrolled";
    public const UNKNOWN_LOCATION = "unknownLocation";
    public const MFA_REQUIRED = "mfaRequired";
    public const AZURE_A_D_BLOCK_DUE_TO_ACCESS_POLICY = "azureADBlockDueToAccessPolicy";
    public const COMPROMISED_PASSWORD = "compromisedPassword";
    public const DEVICE_NOT_KNOWN_WITH_MANAGED_APP = "deviceNotKnownWithManagedApp";
}
