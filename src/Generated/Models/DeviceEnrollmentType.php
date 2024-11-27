<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceEnrollmentType extends Enum {
    public const UNKNOWN = "unknown";
    public const USER_ENROLLMENT = "userEnrollment";
    public const DEVICE_ENROLLMENT_MANAGER = "deviceEnrollmentManager";
    public const APPLE_BULK_WITH_USER = "appleBulkWithUser";
    public const APPLE_BULK_WITHOUT_USER = "appleBulkWithoutUser";
    public const WINDOWS_AZURE_A_D_JOIN = "windowsAzureADJoin";
    public const WINDOWS_BULK_USERLESS = "windowsBulkUserless";
    public const WINDOWS_AUTO_ENROLLMENT = "windowsAutoEnrollment";
    public const WINDOWS_BULK_AZURE_DOMAIN_JOIN = "windowsBulkAzureDomainJoin";
    public const WINDOWS_CO_MANAGEMENT = "windowsCoManagement";
    public const WINDOWS_AZURE_A_D_JOIN_USING_DEVICE_AUTH = "windowsAzureADJoinUsingDeviceAuth";
    public const APPLE_USER_ENROLLMENT = "appleUserEnrollment";
    public const APPLE_USER_ENROLLMENT_WITH_SERVICE_ACCOUNT = "appleUserEnrollmentWithServiceAccount";
}
