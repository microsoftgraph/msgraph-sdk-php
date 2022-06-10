<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OnenoteSourceService extends Enum {
    public const UNKNOWN = 'Unknown';
    public const ONE_DRIVE = 'OneDrive';
    public const ONE_DRIVE_FOR_BUSINESS = 'OneDriveForBusiness';
    public const ON_PREM_ONE_DRIVE_FOR_BUSINESS = 'OnPremOneDriveForBusiness';
}
