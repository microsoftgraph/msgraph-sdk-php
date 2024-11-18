<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AppLockerApplicationControlType extends Enum {
    public const NOT_CONFIGURED = "notConfigured";
    public const ENFORCE_COMPONENTS_AND_STORE_APPS = "enforceComponentsAndStoreApps";
    public const AUDIT_COMPONENTS_AND_STORE_APPS = "auditComponentsAndStoreApps";
    public const ENFORCE_COMPONENTS_STORE_APPS_AND_SMARTLOCKER = "enforceComponentsStoreAppsAndSmartlocker";
    public const AUDIT_COMPONENTS_STORE_APPS_AND_SMARTLOCKER = "auditComponentsStoreAppsAndSmartlocker";
}
