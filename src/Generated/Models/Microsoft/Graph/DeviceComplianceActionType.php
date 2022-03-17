<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceComplianceActionType extends Enum {
    public const NO_ACTION = 'noAction';
    public const NOTIFICATION = 'notification';
    public const BLOCK = 'block';
    public const RETIRE = 'retire';
    public const WIPE = 'wipe';
    public const REMOVE_RESOURCE_ACCESS_PROFILES = 'removeResourceAccessProfiles';
    public const PUSH_NOTIFICATION = 'pushNotification';
}
