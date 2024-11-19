<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsDefenderProductStatus extends Enum {
    public const NO_STATUS = "noStatus";
    public const SERVICE_NOT_RUNNING = "serviceNotRunning";
    public const SERVICE_STARTED_WITHOUT_MALWARE_PROTECTION = "serviceStartedWithoutMalwareProtection";
    public const PENDING_FULL_SCAN_DUE_TO_THREAT_ACTION = "pendingFullScanDueToThreatAction";
    public const PENDING_REBOOT_DUE_TO_THREAT_ACTION = "pendingRebootDueToThreatAction";
    public const PENDING_MANUAL_STEPS_DUE_TO_THREAT_ACTION = "pendingManualStepsDueToThreatAction";
    public const AV_SIGNATURES_OUT_OF_DATE = "avSignaturesOutOfDate";
    public const AS_SIGNATURES_OUT_OF_DATE = "asSignaturesOutOfDate";
    public const NO_QUICK_SCAN_HAPPENED_FOR_SPECIFIED_PERIOD = "noQuickScanHappenedForSpecifiedPeriod";
    public const NO_FULL_SCAN_HAPPENED_FOR_SPECIFIED_PERIOD = "noFullScanHappenedForSpecifiedPeriod";
    public const SYSTEM_INITIATED_SCAN_IN_PROGRESS = "systemInitiatedScanInProgress";
    public const SYSTEM_INITIATED_CLEAN_IN_PROGRESS = "systemInitiatedCleanInProgress";
    public const SAMPLES_PENDING_SUBMISSION = "samplesPendingSubmission";
    public const PRODUCT_RUNNING_IN_EVALUATION_MODE = "productRunningInEvaluationMode";
    public const PRODUCT_RUNNING_IN_NON_GENUINE_MODE = "productRunningInNonGenuineMode";
    public const PRODUCT_EXPIRED = "productExpired";
    public const OFFLINE_SCAN_REQUIRED = "offlineScanRequired";
    public const SERVICE_SHUTDOWN_AS_PART_OF_SYSTEM_SHUTDOWN = "serviceShutdownAsPartOfSystemShutdown";
    public const THREAT_REMEDIATION_FAILED_CRITICALLY = "threatRemediationFailedCritically";
    public const THREAT_REMEDIATION_FAILED_NON_CRITICALLY = "threatRemediationFailedNonCritically";
    public const NO_STATUS_FLAGS_SET = "noStatusFlagsSet";
    public const PLATFORM_OUT_OF_DATE = "platformOutOfDate";
    public const PLATFORM_UPDATE_IN_PROGRESS = "platformUpdateInProgress";
    public const PLATFORM_ABOUT_TO_BE_OUTDATED = "platformAboutToBeOutdated";
    public const SIGNATURE_OR_PLATFORM_END_OF_LIFE_IS_PAST_OR_IS_IMPENDING = "signatureOrPlatformEndOfLifeIsPastOrIsImpending";
    public const WINDOWS_S_MODE_SIGNATURES_IN_USE_ON_NON_WIN10_S_INSTALL = "windowsSModeSignaturesInUseOnNonWin10SInstall";
}
