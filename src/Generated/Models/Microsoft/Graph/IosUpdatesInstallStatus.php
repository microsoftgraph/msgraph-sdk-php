<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class IosUpdatesInstallStatus extends Enum {
    public const DEVICE_OS_HIGHER_THAN_DESIRED_OS_VERSION = 'deviceOsHigherThanDesiredOsVersion';
    public const SHARED_DEVICE_USER_LOGGED_IN_ERROR = 'sharedDeviceUserLoggedInError';
    public const NOT_SUPPORTED_OPERATION = 'notSupportedOperation';
    public const INSTALL_FAILED = 'installFailed';
    public const INSTALL_PHONE_CALL_IN_PROGRESS = 'installPhoneCallInProgress';
    public const INSTALL_INSUFFICIENT_POWER = 'installInsufficientPower';
    public const INSTALL_INSUFFICIENT_SPACE = 'installInsufficientSpace';
    public const INSTALLING = 'installing';
    public const DOWNLOAD_INSUFFICIENT_NETWORK = 'downloadInsufficientNetwork';
    public const DOWNLOAD_INSUFFICIENT_POWER = 'downloadInsufficientPower';
    public const DOWNLOAD_INSUFFICIENT_SPACE = 'downloadInsufficientSpace';
    public const DOWNLOAD_REQUIRES_COMPUTER = 'downloadRequiresComputer';
    public const DOWNLOAD_FAILED = 'downloadFailed';
    public const DOWNLOADING = 'downloading';
    public const SUCCESS = 'success';
    public const AVAILABLE = 'available';
    public const IDLE = 'idle';
    public const UNKNOWN = 'unknown';
}
