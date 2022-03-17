<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceRegistrationState extends Enum {
    public const NOT_REGISTERED = 'notRegistered';
    public const REGISTERED = 'registered';
    public const REVOKED = 'revoked';
    public const KEY_CONFLICT = 'keyConflict';
    public const APPROVAL_PENDING = 'approvalPending';
    public const CERTIFICATE_RESET = 'certificateReset';
    public const NOT_REGISTERED_PENDING_ENROLLMENT = 'notRegisteredPendingEnrollment';
    public const UNKNOWN = 'unknown';
}
