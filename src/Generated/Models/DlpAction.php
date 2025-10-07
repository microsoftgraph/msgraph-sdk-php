<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DlpAction extends Enum {
    public const NOTIFY_USER = "notifyUser";
    public const BLOCK_ACCESS = "blockAccess";
    public const DEVICE_RESTRICTION = "deviceRestriction";
    public const BROWSER_RESTRICTION = "browserRestriction";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const RESTRICT_ACCESS = "restrictAccess";
    public const GENERATE_ALERT = "generateAlert";
    public const GENERATE_INCIDENT_REPORT_ACTION = "generateIncidentReportAction";
    public const S_P_BLOCK_ANONYMOUS_ACCESS = "sPBlockAnonymousAccess";
    public const S_P_RUNTIME_ACCESS_CONTROL = "sPRuntimeAccessControl";
    public const S_P_SHARING_NOTIFY_USER = "sPSharingNotifyUser";
    public const S_P_SHARING_GENERATE_INCIDENT_REPORT = "sPSharingGenerateIncidentReport";
}
