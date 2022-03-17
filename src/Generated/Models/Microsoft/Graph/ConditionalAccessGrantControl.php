<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ConditionalAccessGrantControl extends Enum {
    public const BLOCK = 'block';
    public const MFA = 'mfa';
    public const COMPLIANT_DEVICE = 'compliantDevice';
    public const DOMAIN_JOINED_DEVICE = 'domainJoinedDevice';
    public const APPROVED_APPLICATION = 'approvedApplication';
    public const COMPLIANT_APPLICATION = 'compliantApplication';
    public const PASSWORD_CHANGE = 'passwordChange';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
