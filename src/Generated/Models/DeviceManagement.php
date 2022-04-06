<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagement extends Entity 
{
    /** @var ApplePushNotificationCertificate|null $applePushNotificationCertificate Apple push notification certificate. */
    private ?ApplePushNotificationCertificate $applePushNotificationCertificate = null;
    
    /** @var array<ComplianceManagementPartner>|null $complianceManagementPartners The list of Compliance Management Partners configured by the tenant. */
    private ?array $complianceManagementPartners = null;
    
    /** @var OnPremisesConditionalAccessSettings|null $conditionalAccessSettings The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access */
    private ?OnPremisesConditionalAccessSettings $conditionalAccessSettings = null;
    
    /** @var array<DetectedApp>|null $detectedApps The list of detected apps associated with a device. */
    private ?array $detectedApps = null;
    
    /** @var array<DeviceCategory>|null $deviceCategories The list of device categories with the tenant. */
    private ?array $deviceCategories = null;
    
    /** @var array<DeviceCompliancePolicy>|null $deviceCompliancePolicies The device compliance policies. */
    private ?array $deviceCompliancePolicies = null;
    
    /** @var DeviceCompliancePolicyDeviceStateSummary|null $deviceCompliancePolicyDeviceStateSummary The device compliance state summary for this account. */
    private ?DeviceCompliancePolicyDeviceStateSummary $deviceCompliancePolicyDeviceStateSummary = null;
    
    /** @var array<DeviceCompliancePolicySettingStateSummary>|null $deviceCompliancePolicySettingStateSummaries The summary states of compliance policy settings for this account. */
    private ?array $deviceCompliancePolicySettingStateSummaries = null;
    
    /** @var DeviceConfigurationDeviceStateSummary|null $deviceConfigurationDeviceStateSummaries The device configuration device state summary for this account. */
    private ?DeviceConfigurationDeviceStateSummary $deviceConfigurationDeviceStateSummaries = null;
    
    /** @var array<DeviceConfiguration>|null $deviceConfigurations The device configurations. */
    private ?array $deviceConfigurations = null;
    
    /** @var array<DeviceEnrollmentConfiguration>|null $deviceEnrollmentConfigurations The list of device enrollment configurations */
    private ?array $deviceEnrollmentConfigurations = null;
    
    /** @var array<DeviceManagementPartner>|null $deviceManagementPartners The list of Device Management Partners configured by the tenant. */
    private ?array $deviceManagementPartners = null;
    
    /** @var array<DeviceManagementExchangeConnector>|null $exchangeConnectors The list of Exchange Connectors configured by the tenant. */
    private ?array $exchangeConnectors = null;
    
    /** @var array<ImportedWindowsAutopilotDeviceIdentity>|null $importedWindowsAutopilotDeviceIdentities Collection of imported Windows autopilot devices. */
    private ?array $importedWindowsAutopilotDeviceIdentities = null;
    
    /** @var string|null $intuneAccountId Intune Account Id for given tenant */
    private ?string $intuneAccountId = null;
    
    /** @var IntuneBrand|null $intuneBrand intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal. */
    private ?IntuneBrand $intuneBrand = null;
    
    /** @var array<IosUpdateDeviceStatus>|null $iosUpdateStatuses The IOS software update installation statuses for this account. */
    private ?array $iosUpdateStatuses = null;
    
    /** @var ManagedDeviceOverview|null $managedDeviceOverview Device overview */
    private ?ManagedDeviceOverview $managedDeviceOverview = null;
    
    /** @var array<ManagedDevice>|null $managedDevices The list of managed devices. */
    private ?array $managedDevices = null;
    
    /** @var array<MobileThreatDefenseConnector>|null $mobileThreatDefenseConnectors The list of Mobile threat Defense connectors configured by the tenant. */
    private ?array $mobileThreatDefenseConnectors = null;
    
    /** @var array<NotificationMessageTemplate>|null $notificationMessageTemplates The Notification Message Templates. */
    private ?array $notificationMessageTemplates = null;
    
    /** @var array<RemoteAssistancePartner>|null $remoteAssistancePartners The remote assist partners. */
    private ?array $remoteAssistancePartners = null;
    
    /** @var DeviceManagementReports|null $reports Reports singleton */
    private ?DeviceManagementReports $reports = null;
    
    /** @var array<ResourceOperation>|null $resourceOperations The Resource Operations. */
    private ?array $resourceOperations = null;
    
    /** @var array<DeviceAndAppManagementRoleAssignment>|null $roleAssignments The Role Assignments. */
    private ?array $roleAssignments = null;
    
    /** @var array<RoleDefinition>|null $roleDefinitions The Role Definitions. */
    private ?array $roleDefinitions = null;
    
    /** @var DeviceManagementSettings|null $settings Account level settings. */
    private ?DeviceManagementSettings $settings = null;
    
    /** @var SoftwareUpdateStatusSummary|null $softwareUpdateStatusSummary The software update status summary. */
    private ?SoftwareUpdateStatusSummary $softwareUpdateStatusSummary = null;
    
    /** @var DeviceManagementSubscriptionState|null $subscriptionState Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut. */
    private ?DeviceManagementSubscriptionState $subscriptionState = null;
    
    /** @var array<TelecomExpenseManagementPartner>|null $telecomExpenseManagementPartners The telecom expense management partners. */
    private ?array $telecomExpenseManagementPartners = null;
    
    /** @var array<TermsAndConditions>|null $termsAndConditions The terms and conditions associated with device management of the company. */
    private ?array $termsAndConditions = null;
    
    /** @var array<DeviceManagementTroubleshootingEvent>|null $troubleshootingEvents The list of troubleshooting events for the tenant. */
    private ?array $troubleshootingEvents = null;
    
    /** @var array<WindowsAutopilotDeviceIdentity>|null $windowsAutopilotDeviceIdentities The Windows autopilot device identities contained collection. */
    private ?array $windowsAutopilotDeviceIdentities = null;
    
    /** @var array<WindowsInformationProtectionAppLearningSummary>|null $windowsInformationProtectionAppLearningSummaries The windows information protection app learning summaries. */
    private ?array $windowsInformationProtectionAppLearningSummaries = null;
    
    /** @var array<WindowsInformationProtectionNetworkLearningSummary>|null $windowsInformationProtectionNetworkLearningSummaries The windows information protection network learning summaries. */
    private ?array $windowsInformationProtectionNetworkLearningSummaries = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagement {
        return new DeviceManagement();
    }

    /**
     * Gets the applePushNotificationCertificate property value. Apple push notification certificate.
     * @return ApplePushNotificationCertificate|null
    */
    public function getApplePushNotificationCertificate(): ?ApplePushNotificationCertificate {
        return $this->applePushNotificationCertificate;
    }

    /**
     * Gets the complianceManagementPartners property value. The list of Compliance Management Partners configured by the tenant.
     * @return array<ComplianceManagementPartner>|null
    */
    public function getComplianceManagementPartners(): ?array {
        return $this->complianceManagementPartners;
    }

    /**
     * Gets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @return OnPremisesConditionalAccessSettings|null
    */
    public function getConditionalAccessSettings(): ?OnPremisesConditionalAccessSettings {
        return $this->conditionalAccessSettings;
    }

    /**
     * Gets the detectedApps property value. The list of detected apps associated with a device.
     * @return array<DetectedApp>|null
    */
    public function getDetectedApps(): ?array {
        return $this->detectedApps;
    }

    /**
     * Gets the deviceCategories property value. The list of device categories with the tenant.
     * @return array<DeviceCategory>|null
    */
    public function getDeviceCategories(): ?array {
        return $this->deviceCategories;
    }

    /**
     * Gets the deviceCompliancePolicies property value. The device compliance policies.
     * @return array<DeviceCompliancePolicy>|null
    */
    public function getDeviceCompliancePolicies(): ?array {
        return $this->deviceCompliancePolicies;
    }

    /**
     * Gets the deviceCompliancePolicyDeviceStateSummary property value. The device compliance state summary for this account.
     * @return DeviceCompliancePolicyDeviceStateSummary|null
    */
    public function getDeviceCompliancePolicyDeviceStateSummary(): ?DeviceCompliancePolicyDeviceStateSummary {
        return $this->deviceCompliancePolicyDeviceStateSummary;
    }

    /**
     * Gets the deviceCompliancePolicySettingStateSummaries property value. The summary states of compliance policy settings for this account.
     * @return array<DeviceCompliancePolicySettingStateSummary>|null
    */
    public function getDeviceCompliancePolicySettingStateSummaries(): ?array {
        return $this->deviceCompliancePolicySettingStateSummaries;
    }

    /**
     * Gets the deviceConfigurationDeviceStateSummaries property value. The device configuration device state summary for this account.
     * @return DeviceConfigurationDeviceStateSummary|null
    */
    public function getDeviceConfigurationDeviceStateSummaries(): ?DeviceConfigurationDeviceStateSummary {
        return $this->deviceConfigurationDeviceStateSummaries;
    }

    /**
     * Gets the deviceConfigurations property value. The device configurations.
     * @return array<DeviceConfiguration>|null
    */
    public function getDeviceConfigurations(): ?array {
        return $this->deviceConfigurations;
    }

    /**
     * Gets the deviceEnrollmentConfigurations property value. The list of device enrollment configurations
     * @return array<DeviceEnrollmentConfiguration>|null
    */
    public function getDeviceEnrollmentConfigurations(): ?array {
        return $this->deviceEnrollmentConfigurations;
    }

    /**
     * Gets the deviceManagementPartners property value. The list of Device Management Partners configured by the tenant.
     * @return array<DeviceManagementPartner>|null
    */
    public function getDeviceManagementPartners(): ?array {
        return $this->deviceManagementPartners;
    }

    /**
     * Gets the exchangeConnectors property value. The list of Exchange Connectors configured by the tenant.
     * @return array<DeviceManagementExchangeConnector>|null
    */
    public function getExchangeConnectors(): ?array {
        return $this->exchangeConnectors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'applePushNotificationCertificate' => function (self $o, ParseNode $n) { $o->setApplePushNotificationCertificate($n->getObjectValue(ApplePushNotificationCertificate::class)); },
            'complianceManagementPartners' => function (self $o, ParseNode $n) { $o->setComplianceManagementPartners($n->getCollectionOfObjectValues(ComplianceManagementPartner::class)); },
            'conditionalAccessSettings' => function (self $o, ParseNode $n) { $o->setConditionalAccessSettings($n->getObjectValue(OnPremisesConditionalAccessSettings::class)); },
            'detectedApps' => function (self $o, ParseNode $n) { $o->setDetectedApps($n->getCollectionOfObjectValues(DetectedApp::class)); },
            'deviceCategories' => function (self $o, ParseNode $n) { $o->setDeviceCategories($n->getCollectionOfObjectValues(DeviceCategory::class)); },
            'deviceCompliancePolicies' => function (self $o, ParseNode $n) { $o->setDeviceCompliancePolicies($n->getCollectionOfObjectValues(DeviceCompliancePolicy::class)); },
            'deviceCompliancePolicyDeviceStateSummary' => function (self $o, ParseNode $n) { $o->setDeviceCompliancePolicyDeviceStateSummary($n->getObjectValue(DeviceCompliancePolicyDeviceStateSummary::class)); },
            'deviceCompliancePolicySettingStateSummaries' => function (self $o, ParseNode $n) { $o->setDeviceCompliancePolicySettingStateSummaries($n->getCollectionOfObjectValues(DeviceCompliancePolicySettingStateSummary::class)); },
            'deviceConfigurationDeviceStateSummaries' => function (self $o, ParseNode $n) { $o->setDeviceConfigurationDeviceStateSummaries($n->getObjectValue(DeviceConfigurationDeviceStateSummary::class)); },
            'deviceConfigurations' => function (self $o, ParseNode $n) { $o->setDeviceConfigurations($n->getCollectionOfObjectValues(DeviceConfiguration::class)); },
            'deviceEnrollmentConfigurations' => function (self $o, ParseNode $n) { $o->setDeviceEnrollmentConfigurations($n->getCollectionOfObjectValues(DeviceEnrollmentConfiguration::class)); },
            'deviceManagementPartners' => function (self $o, ParseNode $n) { $o->setDeviceManagementPartners($n->getCollectionOfObjectValues(DeviceManagementPartner::class)); },
            'exchangeConnectors' => function (self $o, ParseNode $n) { $o->setExchangeConnectors($n->getCollectionOfObjectValues(DeviceManagementExchangeConnector::class)); },
            'importedWindowsAutopilotDeviceIdentities' => function (self $o, ParseNode $n) { $o->setImportedWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues(ImportedWindowsAutopilotDeviceIdentity::class)); },
            'intuneAccountId' => function (self $o, ParseNode $n) { $o->setIntuneAccountId($n->getStringValue()); },
            'intuneBrand' => function (self $o, ParseNode $n) { $o->setIntuneBrand($n->getObjectValue(IntuneBrand::class)); },
            'iosUpdateStatuses' => function (self $o, ParseNode $n) { $o->setIosUpdateStatuses($n->getCollectionOfObjectValues(IosUpdateDeviceStatus::class)); },
            'managedDeviceOverview' => function (self $o, ParseNode $n) { $o->setManagedDeviceOverview($n->getObjectValue(ManagedDeviceOverview::class)); },
            'managedDevices' => function (self $o, ParseNode $n) { $o->setManagedDevices($n->getCollectionOfObjectValues(ManagedDevice::class)); },
            'mobileThreatDefenseConnectors' => function (self $o, ParseNode $n) { $o->setMobileThreatDefenseConnectors($n->getCollectionOfObjectValues(MobileThreatDefenseConnector::class)); },
            'notificationMessageTemplates' => function (self $o, ParseNode $n) { $o->setNotificationMessageTemplates($n->getCollectionOfObjectValues(NotificationMessageTemplate::class)); },
            'remoteAssistancePartners' => function (self $o, ParseNode $n) { $o->setRemoteAssistancePartners($n->getCollectionOfObjectValues(RemoteAssistancePartner::class)); },
            'reports' => function (self $o, ParseNode $n) { $o->setReports($n->getObjectValue(DeviceManagementReports::class)); },
            'resourceOperations' => function (self $o, ParseNode $n) { $o->setResourceOperations($n->getCollectionOfObjectValues(ResourceOperation::class)); },
            'roleAssignments' => function (self $o, ParseNode $n) { $o->setRoleAssignments($n->getCollectionOfObjectValues(DeviceAndAppManagementRoleAssignment::class)); },
            'roleDefinitions' => function (self $o, ParseNode $n) { $o->setRoleDefinitions($n->getCollectionOfObjectValues(RoleDefinition::class)); },
            'settings' => function (self $o, ParseNode $n) { $o->setSettings($n->getObjectValue(DeviceManagementSettings::class)); },
            'softwareUpdateStatusSummary' => function (self $o, ParseNode $n) { $o->setSoftwareUpdateStatusSummary($n->getObjectValue(SoftwareUpdateStatusSummary::class)); },
            'subscriptionState' => function (self $o, ParseNode $n) { $o->setSubscriptionState($n->getEnumValue(DeviceManagementSubscriptionState::class)); },
            'telecomExpenseManagementPartners' => function (self $o, ParseNode $n) { $o->setTelecomExpenseManagementPartners($n->getCollectionOfObjectValues(TelecomExpenseManagementPartner::class)); },
            'termsAndConditions' => function (self $o, ParseNode $n) { $o->setTermsAndConditions($n->getCollectionOfObjectValues(TermsAndConditions::class)); },
            'troubleshootingEvents' => function (self $o, ParseNode $n) { $o->setTroubleshootingEvents($n->getCollectionOfObjectValues(DeviceManagementTroubleshootingEvent::class)); },
            'windowsAutopilotDeviceIdentities' => function (self $o, ParseNode $n) { $o->setWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues(WindowsAutopilotDeviceIdentity::class)); },
            'windowsInformationProtectionAppLearningSummaries' => function (self $o, ParseNode $n) { $o->setWindowsInformationProtectionAppLearningSummaries($n->getCollectionOfObjectValues(WindowsInformationProtectionAppLearningSummary::class)); },
            'windowsInformationProtectionNetworkLearningSummaries' => function (self $o, ParseNode $n) { $o->setWindowsInformationProtectionNetworkLearningSummaries($n->getCollectionOfObjectValues(WindowsInformationProtectionNetworkLearningSummary::class)); },
        ]);
    }

    /**
     * Gets the importedWindowsAutopilotDeviceIdentities property value. Collection of imported Windows autopilot devices.
     * @return array<ImportedWindowsAutopilotDeviceIdentity>|null
    */
    public function getImportedWindowsAutopilotDeviceIdentities(): ?array {
        return $this->importedWindowsAutopilotDeviceIdentities;
    }

    /**
     * Gets the intuneAccountId property value. Intune Account Id for given tenant
     * @return string|null
    */
    public function getIntuneAccountId(): ?string {
        return $this->intuneAccountId;
    }

    /**
     * Gets the intuneBrand property value. intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     * @return IntuneBrand|null
    */
    public function getIntuneBrand(): ?IntuneBrand {
        return $this->intuneBrand;
    }

    /**
     * Gets the iosUpdateStatuses property value. The IOS software update installation statuses for this account.
     * @return array<IosUpdateDeviceStatus>|null
    */
    public function getIosUpdateStatuses(): ?array {
        return $this->iosUpdateStatuses;
    }

    /**
     * Gets the managedDeviceOverview property value. Device overview
     * @return ManagedDeviceOverview|null
    */
    public function getManagedDeviceOverview(): ?ManagedDeviceOverview {
        return $this->managedDeviceOverview;
    }

    /**
     * Gets the managedDevices property value. The list of managed devices.
     * @return array<ManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        return $this->managedDevices;
    }

    /**
     * Gets the mobileThreatDefenseConnectors property value. The list of Mobile threat Defense connectors configured by the tenant.
     * @return array<MobileThreatDefenseConnector>|null
    */
    public function getMobileThreatDefenseConnectors(): ?array {
        return $this->mobileThreatDefenseConnectors;
    }

    /**
     * Gets the notificationMessageTemplates property value. The Notification Message Templates.
     * @return array<NotificationMessageTemplate>|null
    */
    public function getNotificationMessageTemplates(): ?array {
        return $this->notificationMessageTemplates;
    }

    /**
     * Gets the remoteAssistancePartners property value. The remote assist partners.
     * @return array<RemoteAssistancePartner>|null
    */
    public function getRemoteAssistancePartners(): ?array {
        return $this->remoteAssistancePartners;
    }

    /**
     * Gets the reports property value. Reports singleton
     * @return DeviceManagementReports|null
    */
    public function getReports(): ?DeviceManagementReports {
        return $this->reports;
    }

    /**
     * Gets the resourceOperations property value. The Resource Operations.
     * @return array<ResourceOperation>|null
    */
    public function getResourceOperations(): ?array {
        return $this->resourceOperations;
    }

    /**
     * Gets the roleAssignments property value. The Role Assignments.
     * @return array<DeviceAndAppManagementRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->roleAssignments;
    }

    /**
     * Gets the roleDefinitions property value. The Role Definitions.
     * @return array<RoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->roleDefinitions;
    }

    /**
     * Gets the settings property value. Account level settings.
     * @return DeviceManagementSettings|null
    */
    public function getSettings(): ?DeviceManagementSettings {
        return $this->settings;
    }

    /**
     * Gets the softwareUpdateStatusSummary property value. The software update status summary.
     * @return SoftwareUpdateStatusSummary|null
    */
    public function getSoftwareUpdateStatusSummary(): ?SoftwareUpdateStatusSummary {
        return $this->softwareUpdateStatusSummary;
    }

    /**
     * Gets the subscriptionState property value. Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
     * @return DeviceManagementSubscriptionState|null
    */
    public function getSubscriptionState(): ?DeviceManagementSubscriptionState {
        return $this->subscriptionState;
    }

    /**
     * Gets the telecomExpenseManagementPartners property value. The telecom expense management partners.
     * @return array<TelecomExpenseManagementPartner>|null
    */
    public function getTelecomExpenseManagementPartners(): ?array {
        return $this->telecomExpenseManagementPartners;
    }

    /**
     * Gets the termsAndConditions property value. The terms and conditions associated with device management of the company.
     * @return array<TermsAndConditions>|null
    */
    public function getTermsAndConditions(): ?array {
        return $this->termsAndConditions;
    }

    /**
     * Gets the troubleshootingEvents property value. The list of troubleshooting events for the tenant.
     * @return array<DeviceManagementTroubleshootingEvent>|null
    */
    public function getTroubleshootingEvents(): ?array {
        return $this->troubleshootingEvents;
    }

    /**
     * Gets the windowsAutopilotDeviceIdentities property value. The Windows autopilot device identities contained collection.
     * @return array<WindowsAutopilotDeviceIdentity>|null
    */
    public function getWindowsAutopilotDeviceIdentities(): ?array {
        return $this->windowsAutopilotDeviceIdentities;
    }

    /**
     * Gets the windowsInformationProtectionAppLearningSummaries property value. The windows information protection app learning summaries.
     * @return array<WindowsInformationProtectionAppLearningSummary>|null
    */
    public function getWindowsInformationProtectionAppLearningSummaries(): ?array {
        return $this->windowsInformationProtectionAppLearningSummaries;
    }

    /**
     * Gets the windowsInformationProtectionNetworkLearningSummaries property value. The windows information protection network learning summaries.
     * @return array<WindowsInformationProtectionNetworkLearningSummary>|null
    */
    public function getWindowsInformationProtectionNetworkLearningSummaries(): ?array {
        return $this->windowsInformationProtectionNetworkLearningSummaries;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applePushNotificationCertificate', $this->applePushNotificationCertificate);
        $writer->writeCollectionOfObjectValues('complianceManagementPartners', $this->complianceManagementPartners);
        $writer->writeObjectValue('conditionalAccessSettings', $this->conditionalAccessSettings);
        $writer->writeCollectionOfObjectValues('detectedApps', $this->detectedApps);
        $writer->writeCollectionOfObjectValues('deviceCategories', $this->deviceCategories);
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicies', $this->deviceCompliancePolicies);
        $writer->writeObjectValue('deviceCompliancePolicyDeviceStateSummary', $this->deviceCompliancePolicyDeviceStateSummary);
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicySettingStateSummaries', $this->deviceCompliancePolicySettingStateSummaries);
        $writer->writeObjectValue('deviceConfigurationDeviceStateSummaries', $this->deviceConfigurationDeviceStateSummaries);
        $writer->writeCollectionOfObjectValues('deviceConfigurations', $this->deviceConfigurations);
        $writer->writeCollectionOfObjectValues('deviceEnrollmentConfigurations', $this->deviceEnrollmentConfigurations);
        $writer->writeCollectionOfObjectValues('deviceManagementPartners', $this->deviceManagementPartners);
        $writer->writeCollectionOfObjectValues('exchangeConnectors', $this->exchangeConnectors);
        $writer->writeCollectionOfObjectValues('importedWindowsAutopilotDeviceIdentities', $this->importedWindowsAutopilotDeviceIdentities);
        $writer->writeStringValue('intuneAccountId', $this->intuneAccountId);
        $writer->writeObjectValue('intuneBrand', $this->intuneBrand);
        $writer->writeCollectionOfObjectValues('iosUpdateStatuses', $this->iosUpdateStatuses);
        $writer->writeObjectValue('managedDeviceOverview', $this->managedDeviceOverview);
        $writer->writeCollectionOfObjectValues('managedDevices', $this->managedDevices);
        $writer->writeCollectionOfObjectValues('mobileThreatDefenseConnectors', $this->mobileThreatDefenseConnectors);
        $writer->writeCollectionOfObjectValues('notificationMessageTemplates', $this->notificationMessageTemplates);
        $writer->writeCollectionOfObjectValues('remoteAssistancePartners', $this->remoteAssistancePartners);
        $writer->writeObjectValue('reports', $this->reports);
        $writer->writeCollectionOfObjectValues('resourceOperations', $this->resourceOperations);
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->roleAssignments);
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->roleDefinitions);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeObjectValue('softwareUpdateStatusSummary', $this->softwareUpdateStatusSummary);
        $writer->writeEnumValue('subscriptionState', $this->subscriptionState);
        $writer->writeCollectionOfObjectValues('telecomExpenseManagementPartners', $this->telecomExpenseManagementPartners);
        $writer->writeCollectionOfObjectValues('termsAndConditions', $this->termsAndConditions);
        $writer->writeCollectionOfObjectValues('troubleshootingEvents', $this->troubleshootingEvents);
        $writer->writeCollectionOfObjectValues('windowsAutopilotDeviceIdentities', $this->windowsAutopilotDeviceIdentities);
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionAppLearningSummaries', $this->windowsInformationProtectionAppLearningSummaries);
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionNetworkLearningSummaries', $this->windowsInformationProtectionNetworkLearningSummaries);
    }

    /**
     * Sets the applePushNotificationCertificate property value. Apple push notification certificate.
     *  @param ApplePushNotificationCertificate|null $value Value to set for the applePushNotificationCertificate property.
    */
    public function setApplePushNotificationCertificate(?ApplePushNotificationCertificate $value ): void {
        $this->applePushNotificationCertificate = $value;
    }

    /**
     * Sets the complianceManagementPartners property value. The list of Compliance Management Partners configured by the tenant.
     *  @param array<ComplianceManagementPartner>|null $value Value to set for the complianceManagementPartners property.
    */
    public function setComplianceManagementPartners(?array $value ): void {
        $this->complianceManagementPartners = $value;
    }

    /**
     * Sets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     *  @param OnPremisesConditionalAccessSettings|null $value Value to set for the conditionalAccessSettings property.
    */
    public function setConditionalAccessSettings(?OnPremisesConditionalAccessSettings $value ): void {
        $this->conditionalAccessSettings = $value;
    }

    /**
     * Sets the detectedApps property value. The list of detected apps associated with a device.
     *  @param array<DetectedApp>|null $value Value to set for the detectedApps property.
    */
    public function setDetectedApps(?array $value ): void {
        $this->detectedApps = $value;
    }

    /**
     * Sets the deviceCategories property value. The list of device categories with the tenant.
     *  @param array<DeviceCategory>|null $value Value to set for the deviceCategories property.
    */
    public function setDeviceCategories(?array $value ): void {
        $this->deviceCategories = $value;
    }

    /**
     * Sets the deviceCompliancePolicies property value. The device compliance policies.
     *  @param array<DeviceCompliancePolicy>|null $value Value to set for the deviceCompliancePolicies property.
    */
    public function setDeviceCompliancePolicies(?array $value ): void {
        $this->deviceCompliancePolicies = $value;
    }

    /**
     * Sets the deviceCompliancePolicyDeviceStateSummary property value. The device compliance state summary for this account.
     *  @param DeviceCompliancePolicyDeviceStateSummary|null $value Value to set for the deviceCompliancePolicyDeviceStateSummary property.
    */
    public function setDeviceCompliancePolicyDeviceStateSummary(?DeviceCompliancePolicyDeviceStateSummary $value ): void {
        $this->deviceCompliancePolicyDeviceStateSummary = $value;
    }

    /**
     * Sets the deviceCompliancePolicySettingStateSummaries property value. The summary states of compliance policy settings for this account.
     *  @param array<DeviceCompliancePolicySettingStateSummary>|null $value Value to set for the deviceCompliancePolicySettingStateSummaries property.
    */
    public function setDeviceCompliancePolicySettingStateSummaries(?array $value ): void {
        $this->deviceCompliancePolicySettingStateSummaries = $value;
    }

    /**
     * Sets the deviceConfigurationDeviceStateSummaries property value. The device configuration device state summary for this account.
     *  @param DeviceConfigurationDeviceStateSummary|null $value Value to set for the deviceConfigurationDeviceStateSummaries property.
    */
    public function setDeviceConfigurationDeviceStateSummaries(?DeviceConfigurationDeviceStateSummary $value ): void {
        $this->deviceConfigurationDeviceStateSummaries = $value;
    }

    /**
     * Sets the deviceConfigurations property value. The device configurations.
     *  @param array<DeviceConfiguration>|null $value Value to set for the deviceConfigurations property.
    */
    public function setDeviceConfigurations(?array $value ): void {
        $this->deviceConfigurations = $value;
    }

    /**
     * Sets the deviceEnrollmentConfigurations property value. The list of device enrollment configurations
     *  @param array<DeviceEnrollmentConfiguration>|null $value Value to set for the deviceEnrollmentConfigurations property.
    */
    public function setDeviceEnrollmentConfigurations(?array $value ): void {
        $this->deviceEnrollmentConfigurations = $value;
    }

    /**
     * Sets the deviceManagementPartners property value. The list of Device Management Partners configured by the tenant.
     *  @param array<DeviceManagementPartner>|null $value Value to set for the deviceManagementPartners property.
    */
    public function setDeviceManagementPartners(?array $value ): void {
        $this->deviceManagementPartners = $value;
    }

    /**
     * Sets the exchangeConnectors property value. The list of Exchange Connectors configured by the tenant.
     *  @param array<DeviceManagementExchangeConnector>|null $value Value to set for the exchangeConnectors property.
    */
    public function setExchangeConnectors(?array $value ): void {
        $this->exchangeConnectors = $value;
    }

    /**
     * Sets the importedWindowsAutopilotDeviceIdentities property value. Collection of imported Windows autopilot devices.
     *  @param array<ImportedWindowsAutopilotDeviceIdentity>|null $value Value to set for the importedWindowsAutopilotDeviceIdentities property.
    */
    public function setImportedWindowsAutopilotDeviceIdentities(?array $value ): void {
        $this->importedWindowsAutopilotDeviceIdentities = $value;
    }

    /**
     * Sets the intuneAccountId property value. Intune Account Id for given tenant
     *  @param string|null $value Value to set for the intuneAccountId property.
    */
    public function setIntuneAccountId(?string $value ): void {
        $this->intuneAccountId = $value;
    }

    /**
     * Sets the intuneBrand property value. intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     *  @param IntuneBrand|null $value Value to set for the intuneBrand property.
    */
    public function setIntuneBrand(?IntuneBrand $value ): void {
        $this->intuneBrand = $value;
    }

    /**
     * Sets the iosUpdateStatuses property value. The IOS software update installation statuses for this account.
     *  @param array<IosUpdateDeviceStatus>|null $value Value to set for the iosUpdateStatuses property.
    */
    public function setIosUpdateStatuses(?array $value ): void {
        $this->iosUpdateStatuses = $value;
    }

    /**
     * Sets the managedDeviceOverview property value. Device overview
     *  @param ManagedDeviceOverview|null $value Value to set for the managedDeviceOverview property.
    */
    public function setManagedDeviceOverview(?ManagedDeviceOverview $value ): void {
        $this->managedDeviceOverview = $value;
    }

    /**
     * Sets the managedDevices property value. The list of managed devices.
     *  @param array<ManagedDevice>|null $value Value to set for the managedDevices property.
    */
    public function setManagedDevices(?array $value ): void {
        $this->managedDevices = $value;
    }

    /**
     * Sets the mobileThreatDefenseConnectors property value. The list of Mobile threat Defense connectors configured by the tenant.
     *  @param array<MobileThreatDefenseConnector>|null $value Value to set for the mobileThreatDefenseConnectors property.
    */
    public function setMobileThreatDefenseConnectors(?array $value ): void {
        $this->mobileThreatDefenseConnectors = $value;
    }

    /**
     * Sets the notificationMessageTemplates property value. The Notification Message Templates.
     *  @param array<NotificationMessageTemplate>|null $value Value to set for the notificationMessageTemplates property.
    */
    public function setNotificationMessageTemplates(?array $value ): void {
        $this->notificationMessageTemplates = $value;
    }

    /**
     * Sets the remoteAssistancePartners property value. The remote assist partners.
     *  @param array<RemoteAssistancePartner>|null $value Value to set for the remoteAssistancePartners property.
    */
    public function setRemoteAssistancePartners(?array $value ): void {
        $this->remoteAssistancePartners = $value;
    }

    /**
     * Sets the reports property value. Reports singleton
     *  @param DeviceManagementReports|null $value Value to set for the reports property.
    */
    public function setReports(?DeviceManagementReports $value ): void {
        $this->reports = $value;
    }

    /**
     * Sets the resourceOperations property value. The Resource Operations.
     *  @param array<ResourceOperation>|null $value Value to set for the resourceOperations property.
    */
    public function setResourceOperations(?array $value ): void {
        $this->resourceOperations = $value;
    }

    /**
     * Sets the roleAssignments property value. The Role Assignments.
     *  @param array<DeviceAndAppManagementRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value ): void {
        $this->roleAssignments = $value;
    }

    /**
     * Sets the roleDefinitions property value. The Role Definitions.
     *  @param array<RoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value ): void {
        $this->roleDefinitions = $value;
    }

    /**
     * Sets the settings property value. Account level settings.
     *  @param DeviceManagementSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?DeviceManagementSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the softwareUpdateStatusSummary property value. The software update status summary.
     *  @param SoftwareUpdateStatusSummary|null $value Value to set for the softwareUpdateStatusSummary property.
    */
    public function setSoftwareUpdateStatusSummary(?SoftwareUpdateStatusSummary $value ): void {
        $this->softwareUpdateStatusSummary = $value;
    }

    /**
     * Sets the subscriptionState property value. Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
     *  @param DeviceManagementSubscriptionState|null $value Value to set for the subscriptionState property.
    */
    public function setSubscriptionState(?DeviceManagementSubscriptionState $value ): void {
        $this->subscriptionState = $value;
    }

    /**
     * Sets the telecomExpenseManagementPartners property value. The telecom expense management partners.
     *  @param array<TelecomExpenseManagementPartner>|null $value Value to set for the telecomExpenseManagementPartners property.
    */
    public function setTelecomExpenseManagementPartners(?array $value ): void {
        $this->telecomExpenseManagementPartners = $value;
    }

    /**
     * Sets the termsAndConditions property value. The terms and conditions associated with device management of the company.
     *  @param array<TermsAndConditions>|null $value Value to set for the termsAndConditions property.
    */
    public function setTermsAndConditions(?array $value ): void {
        $this->termsAndConditions = $value;
    }

    /**
     * Sets the troubleshootingEvents property value. The list of troubleshooting events for the tenant.
     *  @param array<DeviceManagementTroubleshootingEvent>|null $value Value to set for the troubleshootingEvents property.
    */
    public function setTroubleshootingEvents(?array $value ): void {
        $this->troubleshootingEvents = $value;
    }

    /**
     * Sets the windowsAutopilotDeviceIdentities property value. The Windows autopilot device identities contained collection.
     *  @param array<WindowsAutopilotDeviceIdentity>|null $value Value to set for the windowsAutopilotDeviceIdentities property.
    */
    public function setWindowsAutopilotDeviceIdentities(?array $value ): void {
        $this->windowsAutopilotDeviceIdentities = $value;
    }

    /**
     * Sets the windowsInformationProtectionAppLearningSummaries property value. The windows information protection app learning summaries.
     *  @param array<WindowsInformationProtectionAppLearningSummary>|null $value Value to set for the windowsInformationProtectionAppLearningSummaries property.
    */
    public function setWindowsInformationProtectionAppLearningSummaries(?array $value ): void {
        $this->windowsInformationProtectionAppLearningSummaries = $value;
    }

    /**
     * Sets the windowsInformationProtectionNetworkLearningSummaries property value. The windows information protection network learning summaries.
     *  @param array<WindowsInformationProtectionNetworkLearningSummary>|null $value Value to set for the windowsInformationProtectionNetworkLearningSummaries property.
    */
    public function setWindowsInformationProtectionNetworkLearningSummaries(?array $value ): void {
        $this->windowsInformationProtectionNetworkLearningSummaries = $value;
    }

}
