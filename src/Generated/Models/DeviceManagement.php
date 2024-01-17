<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Singleton entity that acts as a container for all device management functionality.
*/
class DeviceManagement extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagement {
        return new DeviceManagement();
    }

    /**
     * Gets the applePushNotificationCertificate property value. Apple push notification certificate.
     * @return ApplePushNotificationCertificate|null
    */
    public function getApplePushNotificationCertificate(): ?ApplePushNotificationCertificate {
        $val = $this->getBackingStore()->get('applePushNotificationCertificate');
        if (is_null($val) || $val instanceof ApplePushNotificationCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applePushNotificationCertificate'");
    }

    /**
     * Gets the auditEvents property value. The Audit Events
     * @return array<AuditEvent>|null
    */
    public function getAuditEvents(): ?array {
        $val = $this->getBackingStore()->get('auditEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuditEvent::class);
            /** @var array<AuditEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'auditEvents'");
    }

    /**
     * Gets the complianceManagementPartners property value. The list of Compliance Management Partners configured by the tenant.
     * @return array<ComplianceManagementPartner>|null
    */
    public function getComplianceManagementPartners(): ?array {
        $val = $this->getBackingStore()->get('complianceManagementPartners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ComplianceManagementPartner::class);
            /** @var array<ComplianceManagementPartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceManagementPartners'");
    }

    /**
     * Gets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @return OnPremisesConditionalAccessSettings|null
    */
    public function getConditionalAccessSettings(): ?OnPremisesConditionalAccessSettings {
        $val = $this->getBackingStore()->get('conditionalAccessSettings');
        if (is_null($val) || $val instanceof OnPremisesConditionalAccessSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessSettings'");
    }

    /**
     * Gets the detectedApps property value. The list of detected apps associated with a device.
     * @return array<DetectedApp>|null
    */
    public function getDetectedApps(): ?array {
        $val = $this->getBackingStore()->get('detectedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DetectedApp::class);
            /** @var array<DetectedApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectedApps'");
    }

    /**
     * Gets the deviceCategories property value. The list of device categories with the tenant.
     * @return array<DeviceCategory>|null
    */
    public function getDeviceCategories(): ?array {
        $val = $this->getBackingStore()->get('deviceCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceCategory::class);
            /** @var array<DeviceCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCategories'");
    }

    /**
     * Gets the deviceCompliancePolicies property value. The device compliance policies.
     * @return array<DeviceCompliancePolicy>|null
    */
    public function getDeviceCompliancePolicies(): ?array {
        $val = $this->getBackingStore()->get('deviceCompliancePolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceCompliancePolicy::class);
            /** @var array<DeviceCompliancePolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCompliancePolicies'");
    }

    /**
     * Gets the deviceCompliancePolicyDeviceStateSummary property value. The device compliance state summary for this account.
     * @return DeviceCompliancePolicyDeviceStateSummary|null
    */
    public function getDeviceCompliancePolicyDeviceStateSummary(): ?DeviceCompliancePolicyDeviceStateSummary {
        $val = $this->getBackingStore()->get('deviceCompliancePolicyDeviceStateSummary');
        if (is_null($val) || $val instanceof DeviceCompliancePolicyDeviceStateSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCompliancePolicyDeviceStateSummary'");
    }

    /**
     * Gets the deviceCompliancePolicySettingStateSummaries property value. The summary states of compliance policy settings for this account.
     * @return array<DeviceCompliancePolicySettingStateSummary>|null
    */
    public function getDeviceCompliancePolicySettingStateSummaries(): ?array {
        $val = $this->getBackingStore()->get('deviceCompliancePolicySettingStateSummaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceCompliancePolicySettingStateSummary::class);
            /** @var array<DeviceCompliancePolicySettingStateSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCompliancePolicySettingStateSummaries'");
    }

    /**
     * Gets the deviceConfigurationDeviceStateSummaries property value. The device configuration device state summary for this account.
     * @return DeviceConfigurationDeviceStateSummary|null
    */
    public function getDeviceConfigurationDeviceStateSummaries(): ?DeviceConfigurationDeviceStateSummary {
        $val = $this->getBackingStore()->get('deviceConfigurationDeviceStateSummaries');
        if (is_null($val) || $val instanceof DeviceConfigurationDeviceStateSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfigurationDeviceStateSummaries'");
    }

    /**
     * Gets the deviceConfigurations property value. The device configurations.
     * @return array<DeviceConfiguration>|null
    */
    public function getDeviceConfigurations(): ?array {
        $val = $this->getBackingStore()->get('deviceConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfiguration::class);
            /** @var array<DeviceConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfigurations'");
    }

    /**
     * Gets the deviceEnrollmentConfigurations property value. The list of device enrollment configurations
     * @return array<DeviceEnrollmentConfiguration>|null
    */
    public function getDeviceEnrollmentConfigurations(): ?array {
        $val = $this->getBackingStore()->get('deviceEnrollmentConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceEnrollmentConfiguration::class);
            /** @var array<DeviceEnrollmentConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceEnrollmentConfigurations'");
    }

    /**
     * Gets the deviceManagementPartners property value. The list of Device Management Partners configured by the tenant.
     * @return array<DeviceManagementPartner>|null
    */
    public function getDeviceManagementPartners(): ?array {
        $val = $this->getBackingStore()->get('deviceManagementPartners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementPartner::class);
            /** @var array<DeviceManagementPartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManagementPartners'");
    }

    /**
     * Gets the deviceProtectionOverview property value. Device protection overview.
     * @return DeviceProtectionOverview|null
    */
    public function getDeviceProtectionOverview(): ?DeviceProtectionOverview {
        $val = $this->getBackingStore()->get('deviceProtectionOverview');
        if (is_null($val) || $val instanceof DeviceProtectionOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceProtectionOverview'");
    }

    /**
     * Gets the exchangeConnectors property value. The list of Exchange Connectors configured by the tenant.
     * @return array<DeviceManagementExchangeConnector>|null
    */
    public function getExchangeConnectors(): ?array {
        $val = $this->getBackingStore()->get('exchangeConnectors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementExchangeConnector::class);
            /** @var array<DeviceManagementExchangeConnector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeConnectors'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applePushNotificationCertificate' => fn(ParseNode $n) => $o->setApplePushNotificationCertificate($n->getObjectValue([ApplePushNotificationCertificate::class, 'createFromDiscriminatorValue'])),
            'auditEvents' => fn(ParseNode $n) => $o->setAuditEvents($n->getCollectionOfObjectValues([AuditEvent::class, 'createFromDiscriminatorValue'])),
            'complianceManagementPartners' => fn(ParseNode $n) => $o->setComplianceManagementPartners($n->getCollectionOfObjectValues([ComplianceManagementPartner::class, 'createFromDiscriminatorValue'])),
            'conditionalAccessSettings' => fn(ParseNode $n) => $o->setConditionalAccessSettings($n->getObjectValue([OnPremisesConditionalAccessSettings::class, 'createFromDiscriminatorValue'])),
            'detectedApps' => fn(ParseNode $n) => $o->setDetectedApps($n->getCollectionOfObjectValues([DetectedApp::class, 'createFromDiscriminatorValue'])),
            'deviceCategories' => fn(ParseNode $n) => $o->setDeviceCategories($n->getCollectionOfObjectValues([DeviceCategory::class, 'createFromDiscriminatorValue'])),
            'deviceCompliancePolicies' => fn(ParseNode $n) => $o->setDeviceCompliancePolicies($n->getCollectionOfObjectValues([DeviceCompliancePolicy::class, 'createFromDiscriminatorValue'])),
            'deviceCompliancePolicyDeviceStateSummary' => fn(ParseNode $n) => $o->setDeviceCompliancePolicyDeviceStateSummary($n->getObjectValue([DeviceCompliancePolicyDeviceStateSummary::class, 'createFromDiscriminatorValue'])),
            'deviceCompliancePolicySettingStateSummaries' => fn(ParseNode $n) => $o->setDeviceCompliancePolicySettingStateSummaries($n->getCollectionOfObjectValues([DeviceCompliancePolicySettingStateSummary::class, 'createFromDiscriminatorValue'])),
            'deviceConfigurationDeviceStateSummaries' => fn(ParseNode $n) => $o->setDeviceConfigurationDeviceStateSummaries($n->getObjectValue([DeviceConfigurationDeviceStateSummary::class, 'createFromDiscriminatorValue'])),
            'deviceConfigurations' => fn(ParseNode $n) => $o->setDeviceConfigurations($n->getCollectionOfObjectValues([DeviceConfiguration::class, 'createFromDiscriminatorValue'])),
            'deviceEnrollmentConfigurations' => fn(ParseNode $n) => $o->setDeviceEnrollmentConfigurations($n->getCollectionOfObjectValues([DeviceEnrollmentConfiguration::class, 'createFromDiscriminatorValue'])),
            'deviceManagementPartners' => fn(ParseNode $n) => $o->setDeviceManagementPartners($n->getCollectionOfObjectValues([DeviceManagementPartner::class, 'createFromDiscriminatorValue'])),
            'deviceProtectionOverview' => fn(ParseNode $n) => $o->setDeviceProtectionOverview($n->getObjectValue([DeviceProtectionOverview::class, 'createFromDiscriminatorValue'])),
            'exchangeConnectors' => fn(ParseNode $n) => $o->setExchangeConnectors($n->getCollectionOfObjectValues([DeviceManagementExchangeConnector::class, 'createFromDiscriminatorValue'])),
            'importedWindowsAutopilotDeviceIdentities' => fn(ParseNode $n) => $o->setImportedWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues([ImportedWindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'])),
            'intuneAccountId' => fn(ParseNode $n) => $o->setIntuneAccountId($n->getStringValue()),
            'intuneBrand' => fn(ParseNode $n) => $o->setIntuneBrand($n->getObjectValue([IntuneBrand::class, 'createFromDiscriminatorValue'])),
            'iosUpdateStatuses' => fn(ParseNode $n) => $o->setIosUpdateStatuses($n->getCollectionOfObjectValues([IosUpdateDeviceStatus::class, 'createFromDiscriminatorValue'])),
            'managedDeviceOverview' => fn(ParseNode $n) => $o->setManagedDeviceOverview($n->getObjectValue([ManagedDeviceOverview::class, 'createFromDiscriminatorValue'])),
            'managedDevices' => fn(ParseNode $n) => $o->setManagedDevices($n->getCollectionOfObjectValues([ManagedDevice::class, 'createFromDiscriminatorValue'])),
            'mobileAppTroubleshootingEvents' => fn(ParseNode $n) => $o->setMobileAppTroubleshootingEvents($n->getCollectionOfObjectValues([MobileAppTroubleshootingEvent::class, 'createFromDiscriminatorValue'])),
            'mobileThreatDefenseConnectors' => fn(ParseNode $n) => $o->setMobileThreatDefenseConnectors($n->getCollectionOfObjectValues([MobileThreatDefenseConnector::class, 'createFromDiscriminatorValue'])),
            'notificationMessageTemplates' => fn(ParseNode $n) => $o->setNotificationMessageTemplates($n->getCollectionOfObjectValues([NotificationMessageTemplate::class, 'createFromDiscriminatorValue'])),
            'remoteAssistancePartners' => fn(ParseNode $n) => $o->setRemoteAssistancePartners($n->getCollectionOfObjectValues([RemoteAssistancePartner::class, 'createFromDiscriminatorValue'])),
            'reports' => fn(ParseNode $n) => $o->setReports($n->getObjectValue([DeviceManagementReports::class, 'createFromDiscriminatorValue'])),
            'resourceOperations' => fn(ParseNode $n) => $o->setResourceOperations($n->getCollectionOfObjectValues([ResourceOperation::class, 'createFromDiscriminatorValue'])),
            'roleAssignments' => fn(ParseNode $n) => $o->setRoleAssignments($n->getCollectionOfObjectValues([DeviceAndAppManagementRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'roleDefinitions' => fn(ParseNode $n) => $o->setRoleDefinitions($n->getCollectionOfObjectValues([RoleDefinition::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([DeviceManagementSettings::class, 'createFromDiscriminatorValue'])),
            'softwareUpdateStatusSummary' => fn(ParseNode $n) => $o->setSoftwareUpdateStatusSummary($n->getObjectValue([SoftwareUpdateStatusSummary::class, 'createFromDiscriminatorValue'])),
            'subscriptionState' => fn(ParseNode $n) => $o->setSubscriptionState($n->getEnumValue(DeviceManagementSubscriptionState::class)),
            'telecomExpenseManagementPartners' => fn(ParseNode $n) => $o->setTelecomExpenseManagementPartners($n->getCollectionOfObjectValues([TelecomExpenseManagementPartner::class, 'createFromDiscriminatorValue'])),
            'termsAndConditions' => fn(ParseNode $n) => $o->setTermsAndConditions($n->getCollectionOfObjectValues([TermsAndConditions::class, 'createFromDiscriminatorValue'])),
            'troubleshootingEvents' => fn(ParseNode $n) => $o->setTroubleshootingEvents($n->getCollectionOfObjectValues([DeviceManagementTroubleshootingEvent::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthApplicationPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthApplicationPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthApplicationPerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthDeviceModelPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthDeviceModelPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthDeviceModelPerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthDevicePerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthDevicePerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthDevicePerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthDevicePerformanceDetails' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthDevicePerformanceDetails($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthDevicePerformanceDetails::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthOSVersionPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthOSVersionPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthOSVersionPerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthOverview' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthOverview($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsBaselines' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsBaselines($n->getCollectionOfObjectValues([UserExperienceAnalyticsBaseline::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsCategories' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsCategories($n->getCollectionOfObjectValues([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDevicePerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDevicePerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsDevicePerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceScores' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceScores($n->getCollectionOfObjectValues([UserExperienceAnalyticsDeviceScores::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceStartupHistory' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceStartupHistory($n->getCollectionOfObjectValues([UserExperienceAnalyticsDeviceStartupHistory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceStartupProcesses' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceStartupProcesses($n->getCollectionOfObjectValues([UserExperienceAnalyticsDeviceStartupProcess::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceStartupProcessPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceStartupProcessPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsDeviceStartupProcessPerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsMetricHistory' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsMetricHistory($n->getCollectionOfObjectValues([UserExperienceAnalyticsMetricHistory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsModelScores' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsModelScores($n->getCollectionOfObjectValues([UserExperienceAnalyticsModelScores::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsOverview' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsOverview($n->getObjectValue([UserExperienceAnalyticsOverview::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsScoreHistory' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsScoreHistory($n->getCollectionOfObjectValues([UserExperienceAnalyticsScoreHistory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsSettings' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsSettings($n->getObjectValue([UserExperienceAnalyticsSettings::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsWorkFromAnywhereMetrics' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsWorkFromAnywhereMetrics($n->getCollectionOfObjectValues([UserExperienceAnalyticsWorkFromAnywhereMetric::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsWorkFromAnywhereModelPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsWorkFromAnywhereModelPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsWorkFromAnywhereModelPerformance::class, 'createFromDiscriminatorValue'])),
            'virtualEndpoint' => fn(ParseNode $n) => $o->setVirtualEndpoint($n->getObjectValue([VirtualEndpoint::class, 'createFromDiscriminatorValue'])),
            'windowsAutopilotDeviceIdentities' => fn(ParseNode $n) => $o->setWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues([WindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'])),
            'windowsInformationProtectionAppLearningSummaries' => fn(ParseNode $n) => $o->setWindowsInformationProtectionAppLearningSummaries($n->getCollectionOfObjectValues([WindowsInformationProtectionAppLearningSummary::class, 'createFromDiscriminatorValue'])),
            'windowsInformationProtectionNetworkLearningSummaries' => fn(ParseNode $n) => $o->setWindowsInformationProtectionNetworkLearningSummaries($n->getCollectionOfObjectValues([WindowsInformationProtectionNetworkLearningSummary::class, 'createFromDiscriminatorValue'])),
            'windowsMalwareInformation' => fn(ParseNode $n) => $o->setWindowsMalwareInformation($n->getCollectionOfObjectValues([WindowsMalwareInformation::class, 'createFromDiscriminatorValue'])),
            'windowsMalwareOverview' => fn(ParseNode $n) => $o->setWindowsMalwareOverview($n->getObjectValue([WindowsMalwareOverview::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the importedWindowsAutopilotDeviceIdentities property value. Collection of imported Windows autopilot devices.
     * @return array<ImportedWindowsAutopilotDeviceIdentity>|null
    */
    public function getImportedWindowsAutopilotDeviceIdentities(): ?array {
        $val = $this->getBackingStore()->get('importedWindowsAutopilotDeviceIdentities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ImportedWindowsAutopilotDeviceIdentity::class);
            /** @var array<ImportedWindowsAutopilotDeviceIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importedWindowsAutopilotDeviceIdentities'");
    }

    /**
     * Gets the intuneAccountId property value. Intune Account Id for given tenant
     * @return string|null
    */
    public function getIntuneAccountId(): ?string {
        $val = $this->getBackingStore()->get('intuneAccountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intuneAccountId'");
    }

    /**
     * Gets the intuneBrand property value. intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     * @return IntuneBrand|null
    */
    public function getIntuneBrand(): ?IntuneBrand {
        $val = $this->getBackingStore()->get('intuneBrand');
        if (is_null($val) || $val instanceof IntuneBrand) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intuneBrand'");
    }

    /**
     * Gets the iosUpdateStatuses property value. The IOS software update installation statuses for this account.
     * @return array<IosUpdateDeviceStatus>|null
    */
    public function getIosUpdateStatuses(): ?array {
        $val = $this->getBackingStore()->get('iosUpdateStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosUpdateDeviceStatus::class);
            /** @var array<IosUpdateDeviceStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosUpdateStatuses'");
    }

    /**
     * Gets the managedDeviceOverview property value. Device overview
     * @return ManagedDeviceOverview|null
    */
    public function getManagedDeviceOverview(): ?ManagedDeviceOverview {
        $val = $this->getBackingStore()->get('managedDeviceOverview');
        if (is_null($val) || $val instanceof ManagedDeviceOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceOverview'");
    }

    /**
     * Gets the managedDevices property value. The list of managed devices.
     * @return array<ManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        $val = $this->getBackingStore()->get('managedDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDevice::class);
            /** @var array<ManagedDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDevices'");
    }

    /**
     * Gets the mobileAppTroubleshootingEvents property value. The collection property of MobileAppTroubleshootingEvent.
     * @return array<MobileAppTroubleshootingEvent>|null
    */
    public function getMobileAppTroubleshootingEvents(): ?array {
        $val = $this->getBackingStore()->get('mobileAppTroubleshootingEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileAppTroubleshootingEvent::class);
            /** @var array<MobileAppTroubleshootingEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileAppTroubleshootingEvents'");
    }

    /**
     * Gets the mobileThreatDefenseConnectors property value. The list of Mobile threat Defense connectors configured by the tenant.
     * @return array<MobileThreatDefenseConnector>|null
    */
    public function getMobileThreatDefenseConnectors(): ?array {
        $val = $this->getBackingStore()->get('mobileThreatDefenseConnectors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileThreatDefenseConnector::class);
            /** @var array<MobileThreatDefenseConnector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileThreatDefenseConnectors'");
    }

    /**
     * Gets the notificationMessageTemplates property value. The Notification Message Templates.
     * @return array<NotificationMessageTemplate>|null
    */
    public function getNotificationMessageTemplates(): ?array {
        $val = $this->getBackingStore()->get('notificationMessageTemplates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NotificationMessageTemplate::class);
            /** @var array<NotificationMessageTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationMessageTemplates'");
    }

    /**
     * Gets the remoteAssistancePartners property value. The remote assist partners.
     * @return array<RemoteAssistancePartner>|null
    */
    public function getRemoteAssistancePartners(): ?array {
        $val = $this->getBackingStore()->get('remoteAssistancePartners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RemoteAssistancePartner::class);
            /** @var array<RemoteAssistancePartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteAssistancePartners'");
    }

    /**
     * Gets the reports property value. Reports singleton
     * @return DeviceManagementReports|null
    */
    public function getReports(): ?DeviceManagementReports {
        $val = $this->getBackingStore()->get('reports');
        if (is_null($val) || $val instanceof DeviceManagementReports) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reports'");
    }

    /**
     * Gets the resourceOperations property value. The Resource Operations.
     * @return array<ResourceOperation>|null
    */
    public function getResourceOperations(): ?array {
        $val = $this->getBackingStore()->get('resourceOperations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourceOperation::class);
            /** @var array<ResourceOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceOperations'");
    }

    /**
     * Gets the roleAssignments property value. The Role Assignments.
     * @return array<DeviceAndAppManagementRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        $val = $this->getBackingStore()->get('roleAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceAndAppManagementRoleAssignment::class);
            /** @var array<DeviceAndAppManagementRoleAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleAssignments'");
    }

    /**
     * Gets the roleDefinitions property value. The Role Definitions.
     * @return array<RoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        $val = $this->getBackingStore()->get('roleDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RoleDefinition::class);
            /** @var array<RoleDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinitions'");
    }

    /**
     * Gets the settings property value. Account level settings.
     * @return DeviceManagementSettings|null
    */
    public function getSettings(): ?DeviceManagementSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof DeviceManagementSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the softwareUpdateStatusSummary property value. The software update status summary.
     * @return SoftwareUpdateStatusSummary|null
    */
    public function getSoftwareUpdateStatusSummary(): ?SoftwareUpdateStatusSummary {
        $val = $this->getBackingStore()->get('softwareUpdateStatusSummary');
        if (is_null($val) || $val instanceof SoftwareUpdateStatusSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'softwareUpdateStatusSummary'");
    }

    /**
     * Gets the subscriptionState property value. Tenant mobile device management subscription state.
     * @return DeviceManagementSubscriptionState|null
    */
    public function getSubscriptionState(): ?DeviceManagementSubscriptionState {
        $val = $this->getBackingStore()->get('subscriptionState');
        if (is_null($val) || $val instanceof DeviceManagementSubscriptionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionState'");
    }

    /**
     * Gets the telecomExpenseManagementPartners property value. The telecom expense management partners.
     * @return array<TelecomExpenseManagementPartner>|null
    */
    public function getTelecomExpenseManagementPartners(): ?array {
        $val = $this->getBackingStore()->get('telecomExpenseManagementPartners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TelecomExpenseManagementPartner::class);
            /** @var array<TelecomExpenseManagementPartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'telecomExpenseManagementPartners'");
    }

    /**
     * Gets the termsAndConditions property value. The terms and conditions associated with device management of the company.
     * @return array<TermsAndConditions>|null
    */
    public function getTermsAndConditions(): ?array {
        $val = $this->getBackingStore()->get('termsAndConditions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TermsAndConditions::class);
            /** @var array<TermsAndConditions>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termsAndConditions'");
    }

    /**
     * Gets the troubleshootingEvents property value. The list of troubleshooting events for the tenant.
     * @return array<DeviceManagementTroubleshootingEvent>|null
    */
    public function getTroubleshootingEvents(): ?array {
        $val = $this->getBackingStore()->get('troubleshootingEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementTroubleshootingEvent::class);
            /** @var array<DeviceManagementTroubleshootingEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'troubleshootingEvents'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformance property value. User experience analytics appHealth Application Performance
     * @return array<UserExperienceAnalyticsAppHealthApplicationPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthApplicationPerformance::class);
            /** @var array<UserExperienceAnalyticsAppHealthApplicationPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthApplicationPerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property value. User experience analytics appHealth Application Performance by App Version details
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails::class);
            /** @var array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property value. User experience analytics appHealth Application Performance by App Version Device Id
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId::class);
            /** @var array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property value. User experience analytics appHealth Application Performance by OS Version
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion::class);
            /** @var array<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDeviceModelPerformance property value. User experience analytics appHealth Model Performance
     * @return array<UserExperienceAnalyticsAppHealthDeviceModelPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthDeviceModelPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthDeviceModelPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthDeviceModelPerformance::class);
            /** @var array<UserExperienceAnalyticsAppHealthDeviceModelPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthDeviceModelPerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDevicePerformance property value. User experience analytics appHealth Device Performance
     * @return array<UserExperienceAnalyticsAppHealthDevicePerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthDevicePerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthDevicePerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthDevicePerformance::class);
            /** @var array<UserExperienceAnalyticsAppHealthDevicePerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthDevicePerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDevicePerformanceDetails property value. User experience analytics device performance details
     * @return array<UserExperienceAnalyticsAppHealthDevicePerformanceDetails>|null
    */
    public function getUserExperienceAnalyticsAppHealthDevicePerformanceDetails(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthDevicePerformanceDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthDevicePerformanceDetails::class);
            /** @var array<UserExperienceAnalyticsAppHealthDevicePerformanceDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthDevicePerformanceDetails'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthOSVersionPerformance property value. User experience analytics appHealth OS version Performance
     * @return array<UserExperienceAnalyticsAppHealthOSVersionPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthOSVersionPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthOSVersionPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthOSVersionPerformance::class);
            /** @var array<UserExperienceAnalyticsAppHealthOSVersionPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthOSVersionPerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthOverview property value. User experience analytics appHealth overview
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getUserExperienceAnalyticsAppHealthOverview(): ?UserExperienceAnalyticsCategory {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthOverview');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthOverview'");
    }

    /**
     * Gets the userExperienceAnalyticsBaselines property value. User experience analytics baselines
     * @return array<UserExperienceAnalyticsBaseline>|null
    */
    public function getUserExperienceAnalyticsBaselines(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsBaselines');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsBaseline::class);
            /** @var array<UserExperienceAnalyticsBaseline>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsBaselines'");
    }

    /**
     * Gets the userExperienceAnalyticsCategories property value. User experience analytics categories
     * @return array<UserExperienceAnalyticsCategory>|null
    */
    public function getUserExperienceAnalyticsCategories(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsCategory::class);
            /** @var array<UserExperienceAnalyticsCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsCategories'");
    }

    /**
     * Gets the userExperienceAnalyticsDevicePerformance property value. User experience analytics device performance
     * @return array<UserExperienceAnalyticsDevicePerformance>|null
    */
    public function getUserExperienceAnalyticsDevicePerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDevicePerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDevicePerformance::class);
            /** @var array<UserExperienceAnalyticsDevicePerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDevicePerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceScores property value. User experience analytics device scores
     * @return array<UserExperienceAnalyticsDeviceScores>|null
    */
    public function getUserExperienceAnalyticsDeviceScores(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceScores');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDeviceScores::class);
            /** @var array<UserExperienceAnalyticsDeviceScores>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceScores'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupHistory property value. User experience analytics device Startup History
     * @return array<UserExperienceAnalyticsDeviceStartupHistory>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupHistory(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceStartupHistory');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDeviceStartupHistory::class);
            /** @var array<UserExperienceAnalyticsDeviceStartupHistory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceStartupHistory'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupProcesses property value. User experience analytics device Startup Processes
     * @return array<UserExperienceAnalyticsDeviceStartupProcess>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupProcesses(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceStartupProcesses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDeviceStartupProcess::class);
            /** @var array<UserExperienceAnalyticsDeviceStartupProcess>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceStartupProcesses'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupProcessPerformance property value. User experience analytics device Startup Process Performance
     * @return array<UserExperienceAnalyticsDeviceStartupProcessPerformance>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupProcessPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceStartupProcessPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDeviceStartupProcessPerformance::class);
            /** @var array<UserExperienceAnalyticsDeviceStartupProcessPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceStartupProcessPerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsMetricHistory property value. User experience analytics metric history
     * @return array<UserExperienceAnalyticsMetricHistory>|null
    */
    public function getUserExperienceAnalyticsMetricHistory(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsMetricHistory');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsMetricHistory::class);
            /** @var array<UserExperienceAnalyticsMetricHistory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsMetricHistory'");
    }

    /**
     * Gets the userExperienceAnalyticsModelScores property value. User experience analytics model scores
     * @return array<UserExperienceAnalyticsModelScores>|null
    */
    public function getUserExperienceAnalyticsModelScores(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsModelScores');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsModelScores::class);
            /** @var array<UserExperienceAnalyticsModelScores>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsModelScores'");
    }

    /**
     * Gets the userExperienceAnalyticsOverview property value. User experience analytics overview
     * @return UserExperienceAnalyticsOverview|null
    */
    public function getUserExperienceAnalyticsOverview(): ?UserExperienceAnalyticsOverview {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsOverview');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsOverview'");
    }

    /**
     * Gets the userExperienceAnalyticsScoreHistory property value. User experience analytics device Startup Score History
     * @return array<UserExperienceAnalyticsScoreHistory>|null
    */
    public function getUserExperienceAnalyticsScoreHistory(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsScoreHistory');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsScoreHistory::class);
            /** @var array<UserExperienceAnalyticsScoreHistory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsScoreHistory'");
    }

    /**
     * Gets the userExperienceAnalyticsSettings property value. User experience analytics device settings
     * @return UserExperienceAnalyticsSettings|null
    */
    public function getUserExperienceAnalyticsSettings(): ?UserExperienceAnalyticsSettings {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsSettings');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsSettings'");
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property value. User experience analytics work from anywhere hardware readiness metrics.
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric'");
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereMetrics property value. User experience analytics work from anywhere metrics.
     * @return array<UserExperienceAnalyticsWorkFromAnywhereMetric>|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereMetrics(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsWorkFromAnywhereMetrics');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsWorkFromAnywhereMetric::class);
            /** @var array<UserExperienceAnalyticsWorkFromAnywhereMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsWorkFromAnywhereMetrics'");
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereModelPerformance property value. The user experience analytics work from anywhere model performance
     * @return array<UserExperienceAnalyticsWorkFromAnywhereModelPerformance>|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereModelPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsWorkFromAnywhereModelPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsWorkFromAnywhereModelPerformance::class);
            /** @var array<UserExperienceAnalyticsWorkFromAnywhereModelPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsWorkFromAnywhereModelPerformance'");
    }

    /**
     * Gets the virtualEndpoint property value. The virtualEndpoint property
     * @return VirtualEndpoint|null
    */
    public function getVirtualEndpoint(): ?VirtualEndpoint {
        $val = $this->getBackingStore()->get('virtualEndpoint');
        if (is_null($val) || $val instanceof VirtualEndpoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'virtualEndpoint'");
    }

    /**
     * Gets the windowsAutopilotDeviceIdentities property value. The Windows autopilot device identities contained collection.
     * @return array<WindowsAutopilotDeviceIdentity>|null
    */
    public function getWindowsAutopilotDeviceIdentities(): ?array {
        $val = $this->getBackingStore()->get('windowsAutopilotDeviceIdentities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsAutopilotDeviceIdentity::class);
            /** @var array<WindowsAutopilotDeviceIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsAutopilotDeviceIdentities'");
    }

    /**
     * Gets the windowsInformationProtectionAppLearningSummaries property value. The windows information protection app learning summaries.
     * @return array<WindowsInformationProtectionAppLearningSummary>|null
    */
    public function getWindowsInformationProtectionAppLearningSummaries(): ?array {
        $val = $this->getBackingStore()->get('windowsInformationProtectionAppLearningSummaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionAppLearningSummary::class);
            /** @var array<WindowsInformationProtectionAppLearningSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsInformationProtectionAppLearningSummaries'");
    }

    /**
     * Gets the windowsInformationProtectionNetworkLearningSummaries property value. The windows information protection network learning summaries.
     * @return array<WindowsInformationProtectionNetworkLearningSummary>|null
    */
    public function getWindowsInformationProtectionNetworkLearningSummaries(): ?array {
        $val = $this->getBackingStore()->get('windowsInformationProtectionNetworkLearningSummaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionNetworkLearningSummary::class);
            /** @var array<WindowsInformationProtectionNetworkLearningSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsInformationProtectionNetworkLearningSummaries'");
    }

    /**
     * Gets the windowsMalwareInformation property value. The list of affected malware in the tenant.
     * @return array<WindowsMalwareInformation>|null
    */
    public function getWindowsMalwareInformation(): ?array {
        $val = $this->getBackingStore()->get('windowsMalwareInformation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsMalwareInformation::class);
            /** @var array<WindowsMalwareInformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsMalwareInformation'");
    }

    /**
     * Gets the windowsMalwareOverview property value. Malware overview for windows devices.
     * @return WindowsMalwareOverview|null
    */
    public function getWindowsMalwareOverview(): ?WindowsMalwareOverview {
        $val = $this->getBackingStore()->get('windowsMalwareOverview');
        if (is_null($val) || $val instanceof WindowsMalwareOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsMalwareOverview'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applePushNotificationCertificate', $this->getApplePushNotificationCertificate());
        $writer->writeCollectionOfObjectValues('auditEvents', $this->getAuditEvents());
        $writer->writeCollectionOfObjectValues('complianceManagementPartners', $this->getComplianceManagementPartners());
        $writer->writeObjectValue('conditionalAccessSettings', $this->getConditionalAccessSettings());
        $writer->writeCollectionOfObjectValues('detectedApps', $this->getDetectedApps());
        $writer->writeCollectionOfObjectValues('deviceCategories', $this->getDeviceCategories());
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicies', $this->getDeviceCompliancePolicies());
        $writer->writeObjectValue('deviceCompliancePolicyDeviceStateSummary', $this->getDeviceCompliancePolicyDeviceStateSummary());
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicySettingStateSummaries', $this->getDeviceCompliancePolicySettingStateSummaries());
        $writer->writeObjectValue('deviceConfigurationDeviceStateSummaries', $this->getDeviceConfigurationDeviceStateSummaries());
        $writer->writeCollectionOfObjectValues('deviceConfigurations', $this->getDeviceConfigurations());
        $writer->writeCollectionOfObjectValues('deviceEnrollmentConfigurations', $this->getDeviceEnrollmentConfigurations());
        $writer->writeCollectionOfObjectValues('deviceManagementPartners', $this->getDeviceManagementPartners());
        $writer->writeObjectValue('deviceProtectionOverview', $this->getDeviceProtectionOverview());
        $writer->writeCollectionOfObjectValues('exchangeConnectors', $this->getExchangeConnectors());
        $writer->writeCollectionOfObjectValues('importedWindowsAutopilotDeviceIdentities', $this->getImportedWindowsAutopilotDeviceIdentities());
        $writer->writeStringValue('intuneAccountId', $this->getIntuneAccountId());
        $writer->writeObjectValue('intuneBrand', $this->getIntuneBrand());
        $writer->writeCollectionOfObjectValues('iosUpdateStatuses', $this->getIosUpdateStatuses());
        $writer->writeObjectValue('managedDeviceOverview', $this->getManagedDeviceOverview());
        $writer->writeCollectionOfObjectValues('managedDevices', $this->getManagedDevices());
        $writer->writeCollectionOfObjectValues('mobileAppTroubleshootingEvents', $this->getMobileAppTroubleshootingEvents());
        $writer->writeCollectionOfObjectValues('mobileThreatDefenseConnectors', $this->getMobileThreatDefenseConnectors());
        $writer->writeCollectionOfObjectValues('notificationMessageTemplates', $this->getNotificationMessageTemplates());
        $writer->writeCollectionOfObjectValues('remoteAssistancePartners', $this->getRemoteAssistancePartners());
        $writer->writeObjectValue('reports', $this->getReports());
        $writer->writeCollectionOfObjectValues('resourceOperations', $this->getResourceOperations());
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->getRoleAssignments());
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->getRoleDefinitions());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeObjectValue('softwareUpdateStatusSummary', $this->getSoftwareUpdateStatusSummary());
        $writer->writeEnumValue('subscriptionState', $this->getSubscriptionState());
        $writer->writeCollectionOfObjectValues('telecomExpenseManagementPartners', $this->getTelecomExpenseManagementPartners());
        $writer->writeCollectionOfObjectValues('termsAndConditions', $this->getTermsAndConditions());
        $writer->writeCollectionOfObjectValues('troubleshootingEvents', $this->getTroubleshootingEvents());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformance', $this->getUserExperienceAnalyticsAppHealthApplicationPerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails', $this->getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId', $this->getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion', $this->getUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthDeviceModelPerformance', $this->getUserExperienceAnalyticsAppHealthDeviceModelPerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthDevicePerformance', $this->getUserExperienceAnalyticsAppHealthDevicePerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthDevicePerformanceDetails', $this->getUserExperienceAnalyticsAppHealthDevicePerformanceDetails());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthOSVersionPerformance', $this->getUserExperienceAnalyticsAppHealthOSVersionPerformance());
        $writer->writeObjectValue('userExperienceAnalyticsAppHealthOverview', $this->getUserExperienceAnalyticsAppHealthOverview());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBaselines', $this->getUserExperienceAnalyticsBaselines());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsCategories', $this->getUserExperienceAnalyticsCategories());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDevicePerformance', $this->getUserExperienceAnalyticsDevicePerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceScores', $this->getUserExperienceAnalyticsDeviceScores());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceStartupHistory', $this->getUserExperienceAnalyticsDeviceStartupHistory());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceStartupProcesses', $this->getUserExperienceAnalyticsDeviceStartupProcesses());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceStartupProcessPerformance', $this->getUserExperienceAnalyticsDeviceStartupProcessPerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsMetricHistory', $this->getUserExperienceAnalyticsMetricHistory());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsModelScores', $this->getUserExperienceAnalyticsModelScores());
        $writer->writeObjectValue('userExperienceAnalyticsOverview', $this->getUserExperienceAnalyticsOverview());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsScoreHistory', $this->getUserExperienceAnalyticsScoreHistory());
        $writer->writeObjectValue('userExperienceAnalyticsSettings', $this->getUserExperienceAnalyticsSettings());
        $writer->writeObjectValue('userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric', $this->getUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsWorkFromAnywhereMetrics', $this->getUserExperienceAnalyticsWorkFromAnywhereMetrics());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsWorkFromAnywhereModelPerformance', $this->getUserExperienceAnalyticsWorkFromAnywhereModelPerformance());
        $writer->writeObjectValue('virtualEndpoint', $this->getVirtualEndpoint());
        $writer->writeCollectionOfObjectValues('windowsAutopilotDeviceIdentities', $this->getWindowsAutopilotDeviceIdentities());
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionAppLearningSummaries', $this->getWindowsInformationProtectionAppLearningSummaries());
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionNetworkLearningSummaries', $this->getWindowsInformationProtectionNetworkLearningSummaries());
        $writer->writeCollectionOfObjectValues('windowsMalwareInformation', $this->getWindowsMalwareInformation());
        $writer->writeObjectValue('windowsMalwareOverview', $this->getWindowsMalwareOverview());
    }

    /**
     * Sets the applePushNotificationCertificate property value. Apple push notification certificate.
     * @param ApplePushNotificationCertificate|null $value Value to set for the applePushNotificationCertificate property.
    */
    public function setApplePushNotificationCertificate(?ApplePushNotificationCertificate $value): void {
        $this->getBackingStore()->set('applePushNotificationCertificate', $value);
    }

    /**
     * Sets the auditEvents property value. The Audit Events
     * @param array<AuditEvent>|null $value Value to set for the auditEvents property.
    */
    public function setAuditEvents(?array $value): void {
        $this->getBackingStore()->set('auditEvents', $value);
    }

    /**
     * Sets the complianceManagementPartners property value. The list of Compliance Management Partners configured by the tenant.
     * @param array<ComplianceManagementPartner>|null $value Value to set for the complianceManagementPartners property.
    */
    public function setComplianceManagementPartners(?array $value): void {
        $this->getBackingStore()->set('complianceManagementPartners', $value);
    }

    /**
     * Sets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @param OnPremisesConditionalAccessSettings|null $value Value to set for the conditionalAccessSettings property.
    */
    public function setConditionalAccessSettings(?OnPremisesConditionalAccessSettings $value): void {
        $this->getBackingStore()->set('conditionalAccessSettings', $value);
    }

    /**
     * Sets the detectedApps property value. The list of detected apps associated with a device.
     * @param array<DetectedApp>|null $value Value to set for the detectedApps property.
    */
    public function setDetectedApps(?array $value): void {
        $this->getBackingStore()->set('detectedApps', $value);
    }

    /**
     * Sets the deviceCategories property value. The list of device categories with the tenant.
     * @param array<DeviceCategory>|null $value Value to set for the deviceCategories property.
    */
    public function setDeviceCategories(?array $value): void {
        $this->getBackingStore()->set('deviceCategories', $value);
    }

    /**
     * Sets the deviceCompliancePolicies property value. The device compliance policies.
     * @param array<DeviceCompliancePolicy>|null $value Value to set for the deviceCompliancePolicies property.
    */
    public function setDeviceCompliancePolicies(?array $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicies', $value);
    }

    /**
     * Sets the deviceCompliancePolicyDeviceStateSummary property value. The device compliance state summary for this account.
     * @param DeviceCompliancePolicyDeviceStateSummary|null $value Value to set for the deviceCompliancePolicyDeviceStateSummary property.
    */
    public function setDeviceCompliancePolicyDeviceStateSummary(?DeviceCompliancePolicyDeviceStateSummary $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicyDeviceStateSummary', $value);
    }

    /**
     * Sets the deviceCompliancePolicySettingStateSummaries property value. The summary states of compliance policy settings for this account.
     * @param array<DeviceCompliancePolicySettingStateSummary>|null $value Value to set for the deviceCompliancePolicySettingStateSummaries property.
    */
    public function setDeviceCompliancePolicySettingStateSummaries(?array $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicySettingStateSummaries', $value);
    }

    /**
     * Sets the deviceConfigurationDeviceStateSummaries property value. The device configuration device state summary for this account.
     * @param DeviceConfigurationDeviceStateSummary|null $value Value to set for the deviceConfigurationDeviceStateSummaries property.
    */
    public function setDeviceConfigurationDeviceStateSummaries(?DeviceConfigurationDeviceStateSummary $value): void {
        $this->getBackingStore()->set('deviceConfigurationDeviceStateSummaries', $value);
    }

    /**
     * Sets the deviceConfigurations property value. The device configurations.
     * @param array<DeviceConfiguration>|null $value Value to set for the deviceConfigurations property.
    */
    public function setDeviceConfigurations(?array $value): void {
        $this->getBackingStore()->set('deviceConfigurations', $value);
    }

    /**
     * Sets the deviceEnrollmentConfigurations property value. The list of device enrollment configurations
     * @param array<DeviceEnrollmentConfiguration>|null $value Value to set for the deviceEnrollmentConfigurations property.
    */
    public function setDeviceEnrollmentConfigurations(?array $value): void {
        $this->getBackingStore()->set('deviceEnrollmentConfigurations', $value);
    }

    /**
     * Sets the deviceManagementPartners property value. The list of Device Management Partners configured by the tenant.
     * @param array<DeviceManagementPartner>|null $value Value to set for the deviceManagementPartners property.
    */
    public function setDeviceManagementPartners(?array $value): void {
        $this->getBackingStore()->set('deviceManagementPartners', $value);
    }

    /**
     * Sets the deviceProtectionOverview property value. Device protection overview.
     * @param DeviceProtectionOverview|null $value Value to set for the deviceProtectionOverview property.
    */
    public function setDeviceProtectionOverview(?DeviceProtectionOverview $value): void {
        $this->getBackingStore()->set('deviceProtectionOverview', $value);
    }

    /**
     * Sets the exchangeConnectors property value. The list of Exchange Connectors configured by the tenant.
     * @param array<DeviceManagementExchangeConnector>|null $value Value to set for the exchangeConnectors property.
    */
    public function setExchangeConnectors(?array $value): void {
        $this->getBackingStore()->set('exchangeConnectors', $value);
    }

    /**
     * Sets the importedWindowsAutopilotDeviceIdentities property value. Collection of imported Windows autopilot devices.
     * @param array<ImportedWindowsAutopilotDeviceIdentity>|null $value Value to set for the importedWindowsAutopilotDeviceIdentities property.
    */
    public function setImportedWindowsAutopilotDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('importedWindowsAutopilotDeviceIdentities', $value);
    }

    /**
     * Sets the intuneAccountId property value. Intune Account Id for given tenant
     * @param string|null $value Value to set for the intuneAccountId property.
    */
    public function setIntuneAccountId(?string $value): void {
        $this->getBackingStore()->set('intuneAccountId', $value);
    }

    /**
     * Sets the intuneBrand property value. intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     * @param IntuneBrand|null $value Value to set for the intuneBrand property.
    */
    public function setIntuneBrand(?IntuneBrand $value): void {
        $this->getBackingStore()->set('intuneBrand', $value);
    }

    /**
     * Sets the iosUpdateStatuses property value. The IOS software update installation statuses for this account.
     * @param array<IosUpdateDeviceStatus>|null $value Value to set for the iosUpdateStatuses property.
    */
    public function setIosUpdateStatuses(?array $value): void {
        $this->getBackingStore()->set('iosUpdateStatuses', $value);
    }

    /**
     * Sets the managedDeviceOverview property value. Device overview
     * @param ManagedDeviceOverview|null $value Value to set for the managedDeviceOverview property.
    */
    public function setManagedDeviceOverview(?ManagedDeviceOverview $value): void {
        $this->getBackingStore()->set('managedDeviceOverview', $value);
    }

    /**
     * Sets the managedDevices property value. The list of managed devices.
     * @param array<ManagedDevice>|null $value Value to set for the managedDevices property.
    */
    public function setManagedDevices(?array $value): void {
        $this->getBackingStore()->set('managedDevices', $value);
    }

    /**
     * Sets the mobileAppTroubleshootingEvents property value. The collection property of MobileAppTroubleshootingEvent.
     * @param array<MobileAppTroubleshootingEvent>|null $value Value to set for the mobileAppTroubleshootingEvents property.
    */
    public function setMobileAppTroubleshootingEvents(?array $value): void {
        $this->getBackingStore()->set('mobileAppTroubleshootingEvents', $value);
    }

    /**
     * Sets the mobileThreatDefenseConnectors property value. The list of Mobile threat Defense connectors configured by the tenant.
     * @param array<MobileThreatDefenseConnector>|null $value Value to set for the mobileThreatDefenseConnectors property.
    */
    public function setMobileThreatDefenseConnectors(?array $value): void {
        $this->getBackingStore()->set('mobileThreatDefenseConnectors', $value);
    }

    /**
     * Sets the notificationMessageTemplates property value. The Notification Message Templates.
     * @param array<NotificationMessageTemplate>|null $value Value to set for the notificationMessageTemplates property.
    */
    public function setNotificationMessageTemplates(?array $value): void {
        $this->getBackingStore()->set('notificationMessageTemplates', $value);
    }

    /**
     * Sets the remoteAssistancePartners property value. The remote assist partners.
     * @param array<RemoteAssistancePartner>|null $value Value to set for the remoteAssistancePartners property.
    */
    public function setRemoteAssistancePartners(?array $value): void {
        $this->getBackingStore()->set('remoteAssistancePartners', $value);
    }

    /**
     * Sets the reports property value. Reports singleton
     * @param DeviceManagementReports|null $value Value to set for the reports property.
    */
    public function setReports(?DeviceManagementReports $value): void {
        $this->getBackingStore()->set('reports', $value);
    }

    /**
     * Sets the resourceOperations property value. The Resource Operations.
     * @param array<ResourceOperation>|null $value Value to set for the resourceOperations property.
    */
    public function setResourceOperations(?array $value): void {
        $this->getBackingStore()->set('resourceOperations', $value);
    }

    /**
     * Sets the roleAssignments property value. The Role Assignments.
     * @param array<DeviceAndAppManagementRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('roleAssignments', $value);
    }

    /**
     * Sets the roleDefinitions property value. The Role Definitions.
     * @param array<RoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value): void {
        $this->getBackingStore()->set('roleDefinitions', $value);
    }

    /**
     * Sets the settings property value. Account level settings.
     * @param DeviceManagementSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?DeviceManagementSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the softwareUpdateStatusSummary property value. The software update status summary.
     * @param SoftwareUpdateStatusSummary|null $value Value to set for the softwareUpdateStatusSummary property.
    */
    public function setSoftwareUpdateStatusSummary(?SoftwareUpdateStatusSummary $value): void {
        $this->getBackingStore()->set('softwareUpdateStatusSummary', $value);
    }

    /**
     * Sets the subscriptionState property value. Tenant mobile device management subscription state.
     * @param DeviceManagementSubscriptionState|null $value Value to set for the subscriptionState property.
    */
    public function setSubscriptionState(?DeviceManagementSubscriptionState $value): void {
        $this->getBackingStore()->set('subscriptionState', $value);
    }

    /**
     * Sets the telecomExpenseManagementPartners property value. The telecom expense management partners.
     * @param array<TelecomExpenseManagementPartner>|null $value Value to set for the telecomExpenseManagementPartners property.
    */
    public function setTelecomExpenseManagementPartners(?array $value): void {
        $this->getBackingStore()->set('telecomExpenseManagementPartners', $value);
    }

    /**
     * Sets the termsAndConditions property value. The terms and conditions associated with device management of the company.
     * @param array<TermsAndConditions>|null $value Value to set for the termsAndConditions property.
    */
    public function setTermsAndConditions(?array $value): void {
        $this->getBackingStore()->set('termsAndConditions', $value);
    }

    /**
     * Sets the troubleshootingEvents property value. The list of troubleshooting events for the tenant.
     * @param array<DeviceManagementTroubleshootingEvent>|null $value Value to set for the troubleshootingEvents property.
    */
    public function setTroubleshootingEvents(?array $value): void {
        $this->getBackingStore()->set('troubleshootingEvents', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformance property value. User experience analytics appHealth Application Performance
     * @param array<UserExperienceAnalyticsAppHealthApplicationPerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthApplicationPerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property value. User experience analytics appHealth Application Performance by App Version details
     * @param array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property value. User experience analytics appHealth Application Performance by App Version Device Id
     * @param array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property value. User experience analytics appHealth Application Performance by OS Version
     * @param array<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthDeviceModelPerformance property value. User experience analytics appHealth Model Performance
     * @param array<UserExperienceAnalyticsAppHealthDeviceModelPerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthDeviceModelPerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthDeviceModelPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthDeviceModelPerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthDevicePerformance property value. User experience analytics appHealth Device Performance
     * @param array<UserExperienceAnalyticsAppHealthDevicePerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthDevicePerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthDevicePerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthDevicePerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthDevicePerformanceDetails property value. User experience analytics device performance details
     * @param array<UserExperienceAnalyticsAppHealthDevicePerformanceDetails>|null $value Value to set for the userExperienceAnalyticsAppHealthDevicePerformanceDetails property.
    */
    public function setUserExperienceAnalyticsAppHealthDevicePerformanceDetails(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthDevicePerformanceDetails', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthOSVersionPerformance property value. User experience analytics appHealth OS version Performance
     * @param array<UserExperienceAnalyticsAppHealthOSVersionPerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthOSVersionPerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthOSVersionPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthOSVersionPerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthOverview property value. User experience analytics appHealth overview
     * @param UserExperienceAnalyticsCategory|null $value Value to set for the userExperienceAnalyticsAppHealthOverview property.
    */
    public function setUserExperienceAnalyticsAppHealthOverview(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthOverview', $value);
    }

    /**
     * Sets the userExperienceAnalyticsBaselines property value. User experience analytics baselines
     * @param array<UserExperienceAnalyticsBaseline>|null $value Value to set for the userExperienceAnalyticsBaselines property.
    */
    public function setUserExperienceAnalyticsBaselines(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsBaselines', $value);
    }

    /**
     * Sets the userExperienceAnalyticsCategories property value. User experience analytics categories
     * @param array<UserExperienceAnalyticsCategory>|null $value Value to set for the userExperienceAnalyticsCategories property.
    */
    public function setUserExperienceAnalyticsCategories(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsCategories', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDevicePerformance property value. User experience analytics device performance
     * @param array<UserExperienceAnalyticsDevicePerformance>|null $value Value to set for the userExperienceAnalyticsDevicePerformance property.
    */
    public function setUserExperienceAnalyticsDevicePerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDevicePerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceScores property value. User experience analytics device scores
     * @param array<UserExperienceAnalyticsDeviceScores>|null $value Value to set for the userExperienceAnalyticsDeviceScores property.
    */
    public function setUserExperienceAnalyticsDeviceScores(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceScores', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceStartupHistory property value. User experience analytics device Startup History
     * @param array<UserExperienceAnalyticsDeviceStartupHistory>|null $value Value to set for the userExperienceAnalyticsDeviceStartupHistory property.
    */
    public function setUserExperienceAnalyticsDeviceStartupHistory(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceStartupHistory', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceStartupProcesses property value. User experience analytics device Startup Processes
     * @param array<UserExperienceAnalyticsDeviceStartupProcess>|null $value Value to set for the userExperienceAnalyticsDeviceStartupProcesses property.
    */
    public function setUserExperienceAnalyticsDeviceStartupProcesses(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceStartupProcesses', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceStartupProcessPerformance property value. User experience analytics device Startup Process Performance
     * @param array<UserExperienceAnalyticsDeviceStartupProcessPerformance>|null $value Value to set for the userExperienceAnalyticsDeviceStartupProcessPerformance property.
    */
    public function setUserExperienceAnalyticsDeviceStartupProcessPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceStartupProcessPerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsMetricHistory property value. User experience analytics metric history
     * @param array<UserExperienceAnalyticsMetricHistory>|null $value Value to set for the userExperienceAnalyticsMetricHistory property.
    */
    public function setUserExperienceAnalyticsMetricHistory(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsMetricHistory', $value);
    }

    /**
     * Sets the userExperienceAnalyticsModelScores property value. User experience analytics model scores
     * @param array<UserExperienceAnalyticsModelScores>|null $value Value to set for the userExperienceAnalyticsModelScores property.
    */
    public function setUserExperienceAnalyticsModelScores(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsModelScores', $value);
    }

    /**
     * Sets the userExperienceAnalyticsOverview property value. User experience analytics overview
     * @param UserExperienceAnalyticsOverview|null $value Value to set for the userExperienceAnalyticsOverview property.
    */
    public function setUserExperienceAnalyticsOverview(?UserExperienceAnalyticsOverview $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsOverview', $value);
    }

    /**
     * Sets the userExperienceAnalyticsScoreHistory property value. User experience analytics device Startup Score History
     * @param array<UserExperienceAnalyticsScoreHistory>|null $value Value to set for the userExperienceAnalyticsScoreHistory property.
    */
    public function setUserExperienceAnalyticsScoreHistory(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsScoreHistory', $value);
    }

    /**
     * Sets the userExperienceAnalyticsSettings property value. User experience analytics device settings
     * @param UserExperienceAnalyticsSettings|null $value Value to set for the userExperienceAnalyticsSettings property.
    */
    public function setUserExperienceAnalyticsSettings(?UserExperienceAnalyticsSettings $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsSettings', $value);
    }

    /**
     * Sets the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property value. User experience analytics work from anywhere hardware readiness metrics.
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|null $value Value to set for the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property.
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric', $value);
    }

    /**
     * Sets the userExperienceAnalyticsWorkFromAnywhereMetrics property value. User experience analytics work from anywhere metrics.
     * @param array<UserExperienceAnalyticsWorkFromAnywhereMetric>|null $value Value to set for the userExperienceAnalyticsWorkFromAnywhereMetrics property.
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereMetrics(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsWorkFromAnywhereMetrics', $value);
    }

    /**
     * Sets the userExperienceAnalyticsWorkFromAnywhereModelPerformance property value. The user experience analytics work from anywhere model performance
     * @param array<UserExperienceAnalyticsWorkFromAnywhereModelPerformance>|null $value Value to set for the userExperienceAnalyticsWorkFromAnywhereModelPerformance property.
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereModelPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsWorkFromAnywhereModelPerformance', $value);
    }

    /**
     * Sets the virtualEndpoint property value. The virtualEndpoint property
     * @param VirtualEndpoint|null $value Value to set for the virtualEndpoint property.
    */
    public function setVirtualEndpoint(?VirtualEndpoint $value): void {
        $this->getBackingStore()->set('virtualEndpoint', $value);
    }

    /**
     * Sets the windowsAutopilotDeviceIdentities property value. The Windows autopilot device identities contained collection.
     * @param array<WindowsAutopilotDeviceIdentity>|null $value Value to set for the windowsAutopilotDeviceIdentities property.
    */
    public function setWindowsAutopilotDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('windowsAutopilotDeviceIdentities', $value);
    }

    /**
     * Sets the windowsInformationProtectionAppLearningSummaries property value. The windows information protection app learning summaries.
     * @param array<WindowsInformationProtectionAppLearningSummary>|null $value Value to set for the windowsInformationProtectionAppLearningSummaries property.
    */
    public function setWindowsInformationProtectionAppLearningSummaries(?array $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionAppLearningSummaries', $value);
    }

    /**
     * Sets the windowsInformationProtectionNetworkLearningSummaries property value. The windows information protection network learning summaries.
     * @param array<WindowsInformationProtectionNetworkLearningSummary>|null $value Value to set for the windowsInformationProtectionNetworkLearningSummaries property.
    */
    public function setWindowsInformationProtectionNetworkLearningSummaries(?array $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionNetworkLearningSummaries', $value);
    }

    /**
     * Sets the windowsMalwareInformation property value. The list of affected malware in the tenant.
     * @param array<WindowsMalwareInformation>|null $value Value to set for the windowsMalwareInformation property.
    */
    public function setWindowsMalwareInformation(?array $value): void {
        $this->getBackingStore()->set('windowsMalwareInformation', $value);
    }

    /**
     * Sets the windowsMalwareOverview property value. Malware overview for windows devices.
     * @param WindowsMalwareOverview|null $value Value to set for the windowsMalwareOverview property.
    */
    public function setWindowsMalwareOverview(?WindowsMalwareOverview $value): void {
        $this->getBackingStore()->set('windowsMalwareOverview', $value);
    }

}
