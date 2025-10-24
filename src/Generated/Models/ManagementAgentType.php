<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ManagementAgentType extends Enum {
    public const EAS = "eas";
    public const MDM = "mdm";
    public const EAS_MDM = "easMdm";
    public const INTUNE_CLIENT = "intuneClient";
    public const EAS_INTUNE_CLIENT = "easIntuneClient";
    public const CONFIGURATION_MANAGER_CLIENT = "configurationManagerClient";
    public const CONFIGURATION_MANAGER_CLIENT_MDM = "configurationManagerClientMdm";
    public const CONFIGURATION_MANAGER_CLIENT_MDM_EAS = "configurationManagerClientMdmEas";
    public const UNKNOWN = "unknown";
    public const JAMF = "jamf";
    public const GOOGLE_CLOUD_DEVICE_POLICY_CONTROLLER = "googleCloudDevicePolicyController";
    public const MICROSOFT365_MANAGED_MDM = "microsoft365ManagedMdm";
    public const MS_SENSE = "msSense";
}
