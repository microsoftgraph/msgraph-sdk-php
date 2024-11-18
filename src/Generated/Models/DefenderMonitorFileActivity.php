<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DefenderMonitorFileActivity extends Enum {
    public const USER_DEFINED = "userDefined";
    public const DISABLE = "disable";
    public const MONITOR_ALL_FILES = "monitorAllFiles";
    public const MONITOR_INCOMING_FILES_ONLY = "monitorIncomingFilesOnly";
    public const MONITOR_OUTGOING_FILES_ONLY = "monitorOutgoingFilesOnly";
}
