<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class DetectionSource extends Enum {
    public const UNKNOWN = 'unknown';
    public const MICROSOFT_DEFENDER_FOR_ENDPOINT = 'microsoftDefenderForEndpoint';
    public const ANTIVIRUS = 'antivirus';
    public const SMART_SCREEN = 'smartScreen';
    public const CUSTOM_TI = 'customTi';
    public const MICROSOFT_DEFENDER_FOR_OFFICE365 = 'microsoftDefenderForOffice365';
    public const AUTOMATED_INVESTIGATION = 'automatedInvestigation';
    public const MICROSOFT_THREAT_EXPERTS = 'microsoftThreatExperts';
    public const CUSTOM_DETECTION = 'customDetection';
    public const MICROSOFT_DEFENDER_FOR_IDENTITY = 'microsoftDefenderForIdentity';
    public const CLOUD_APP_SECURITY = 'cloudAppSecurity';
    public const MICROSOFT365_DEFENDER = 'microsoft365Defender';
    public const AZURE_AD_IDENTITY_PROTECTION = 'azureAdIdentityProtection';
    public const MANUAL = 'manual';
    public const MICROSOFT_DATA_LOSS_PREVENTION = 'microsoftDataLossPrevention';
    public const APP_GOVERNANCE_POLICY = 'appGovernancePolicy';
    public const APP_GOVERNANCE_DETECTION = 'appGovernanceDetection';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const MICROSOFT_DEFENDER_FOR_CLOUD = 'microsoftDefenderForCloud';
    public const MICROSOFT_DEFENDER_FOR_IO_T = 'microsoftDefenderForIoT';
    public const MICROSOFT_DEFENDER_FOR_SERVERS = 'microsoftDefenderForServers';
    public const MICROSOFT_DEFENDER_FOR_STORAGE = 'microsoftDefenderForStorage';
    public const MICROSOFT_DEFENDER_FOR_D_N_S = 'microsoftDefenderForDNS';
    public const MICROSOFT_DEFENDER_FOR_DATABASES = 'microsoftDefenderForDatabases';
    public const MICROSOFT_DEFENDER_FOR_CONTAINERS = 'microsoftDefenderForContainers';
    public const MICROSOFT_DEFENDER_FOR_NETWORK = 'microsoftDefenderForNetwork';
    public const MICROSOFT_DEFENDER_FOR_APP_SERVICE = 'microsoftDefenderForAppService';
    public const MICROSOFT_DEFENDER_FOR_KEY_VAULT = 'microsoftDefenderForKeyVault';
    public const MICROSOFT_DEFENDER_FOR_RESOURCE_MANAGER = 'microsoftDefenderForResourceManager';
    public const MICROSOFT_DEFENDER_FOR_API_MANAGEMENT = 'microsoftDefenderForApiManagement';
    public const NRT_ALERTS = 'nrtAlerts';
    public const SCHEDULED_ALERTS = 'scheduledAlerts';
    public const MICROSOFT_DEFENDER_THREAT_INTELLIGENCE_ANALYTICS = 'microsoftDefenderThreatIntelligenceAnalytics';
    public const BUILT_IN_ML = 'builtInMl';
    public const MICROSOFT_INSIDER_RISK_MANAGEMENT = 'microsoftInsiderRiskManagement';
    public const MICROSOFT_SENTINEL = 'microsoftSentinel';
}
