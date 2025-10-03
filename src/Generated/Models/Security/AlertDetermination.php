<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class AlertDetermination extends Enum {
    public const UNKNOWN = "unknown";
    public const APT = "apt";
    public const MALWARE = "malware";
    public const SECURITY_PERSONNEL = "securityPersonnel";
    public const SECURITY_TESTING = "securityTesting";
    public const UNWANTED_SOFTWARE = "unwantedSoftware";
    public const OTHER = "other";
    public const MULTI_STAGED_ATTACK = "multiStagedAttack";
    public const COMPROMISED_ACCOUNT = "compromisedAccount";
    public const PHISHING = "phishing";
    public const MALICIOUS_USER_ACTIVITY = "maliciousUserActivity";
    public const NOT_MALICIOUS = "notMalicious";
    public const NOT_ENOUGH_DATA_TO_VALIDATE = "notEnoughDataToValidate";
    public const CONFIRMED_ACTIVITY = "confirmedActivity";
    public const LINE_OF_BUSINESS_APPLICATION = "lineOfBusinessApplication";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
