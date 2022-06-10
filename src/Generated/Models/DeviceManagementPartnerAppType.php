<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementPartnerAppType extends Enum {
    public const UNKNOWN = 'unknown';
    public const SINGLE_TENANT_APP = 'singleTenantApp';
    public const MULTI_TENANT_APP = 'multiTenantApp';
}
