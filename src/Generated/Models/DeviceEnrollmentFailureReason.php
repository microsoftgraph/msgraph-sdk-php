<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceEnrollmentFailureReason extends Enum {
    public const UNKNOWN = "unknown";
    public const AUTHENTICATION = "authentication";
    public const AUTHORIZATION = "authorization";
    public const ACCOUNT_VALIDATION = "accountValidation";
    public const USER_VALIDATION = "userValidation";
    public const DEVICE_NOT_SUPPORTED = "deviceNotSupported";
    public const IN_MAINTENANCE = "inMaintenance";
    public const BAD_REQUEST = "badRequest";
    public const FEATURE_NOT_SUPPORTED = "featureNotSupported";
    public const ENROLLMENT_RESTRICTIONS_ENFORCED = "enrollmentRestrictionsEnforced";
    public const CLIENT_DISCONNECTED = "clientDisconnected";
    public const USER_ABANDONMENT = "userAbandonment";
}
