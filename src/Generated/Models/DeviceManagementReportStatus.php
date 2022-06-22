<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementReportStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const NOT_STARTED = 'notStarted';
    public const IN_PROGRESS = 'inProgress';
    public const COMPLETED = 'completed';
    public const FAILED = 'failed';
}
