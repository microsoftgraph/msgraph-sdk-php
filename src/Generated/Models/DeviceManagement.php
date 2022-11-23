<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagement extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagement and sets the default values.
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
        return $this->getBackingStore()->get('applePushNotificationCertificate');
    }

    /**
     * Gets the auditEvents property value. The Audit Events
     * @return array<AuditEvent>|null
    */
    public function getAuditEvents(): ?array {
        return $this->getBackingStore()->get('auditEvents');
    }

    /**
     * Gets the complianceManagementPartners property value. The list of Compliance Management Partners configured by the tenant.
     * @return array<ComplianceManagementPartner>|null
    */
    public function getComplianceManagementPartners(): ?array {
        return $this->getBackingStore()->get('complianceManagementPartners');
    }

    /**
     * Gets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @return OnPremisesConditionalAccessSettings|null
    */
    public function getConditionalAccessSettings(): ?OnPremisesConditionalAccessSettings {
        return $this->getBackingStore()->get('conditionalAccessSettings');
    }

    /**
     * Gets the detectedApps property value. The list of detected apps associated with a device.
     * @return array<DetectedApp>|null
    */
    public function getDetectedApps(): ?array {
        return $this->getBackingStore()->get('detectedApps');
    }

    /**
     * Gets the deviceCategories property value. The list of device categories with the tenant.
     * @return array<DeviceCategory>|null
    */
    public function getDeviceCategories(): ?array {
        return $this->getBackingStore()->get('deviceCategories');
    }

    /**
     * Gets the deviceCompliancePolicies property value. The device compliance policies.
     * @return array<DeviceCompliancePolicy>|null
    */
    public function getDeviceCompliancePolicies(): ?array {
        return $this->getBackingStore()->get('deviceCompliancePolicies');
    }

    /**
     * Gets the deviceCompliancePolicyDeviceStateSummary property value. The device compliance state summary for this account.
     * @return DeviceCompliancePolicyDeviceStateSummary|null
    */
    public function getDeviceCompliancePolicyDeviceStateSummary(): ?DeviceCompliancePolicyDeviceStateSummary {
        return $this->getBackingStore()->get('deviceCompliancePolicyDeviceStateSummary');
    }

    /**
     * Gets the deviceCompliancePolicySettingStateSummaries property value. The summary states of compliance policy settings for this account.
     * @return array<DeviceCompliancePolicySettingStateSummary>|null
    */
    public function getDeviceCompliancePolicySettingStateSummaries(): ?array {
        return $this->getBackingStore()->get('deviceCompliancePolicySettingStateSummaries');
    }

    /**
     * Gets the deviceConfigurationDeviceStateSummaries property value. The device configuration device state summary for this account.
     * @return DeviceConfigurationDeviceStateSummary|null
    */
    public function getDeviceConfigurationDeviceStateSummaries(): ?DeviceConfigurationDeviceStateSummary {
        return $this->getBackingStore()->get('deviceConfigurationDeviceStateSummaries');
    }

    /**
     * Gets the deviceConfigurations property value. The device configurations.
     * @return array<DeviceConfiguration>|null
    */
    public function getDeviceConfigurations(): ?array {
        return $this->getBackingStore()->get('deviceConfigurations');
    }

    /**
     * Gets the deviceEnrollmentConfigurations property value. The list of device enrollment configurations
     * @return array<DeviceEnrollmentConfiguration>|null
    */
    public function getDeviceEnrollmentConfigurations(): ?array {
        return $this->getBackingStore()->get('deviceEnrollmentConfigurations');
    }

    /**
     * Gets the deviceManagementPartners property value. The list of Device Management Partners configured by the tenant.
     * @return array<DeviceManagementPartner>|null
    */
    public function getDeviceManagementPartners(): ?array {
        return $this->getBackingStore()->get('deviceManagementPartners');
    }

    /**
     * Gets the exchangeConnectors property value. The list of Exchange Connectors configured by the tenant.
     * @return array<DeviceManagementExchangeConnector>|null
    */
    public function getExchangeConnectors(): ?array {
        return $this->getBackingStore()->get('exchangeConnectors');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
            'exchangeConnectors' => fn(ParseNode $n) => $o->setExchangeConnectors($n->getCollectionOfObjectValues([DeviceManagementExchangeConnector::class, 'createFromDiscriminatorValue'])),
            'importedWindowsAutopilotDeviceIdentities' => fn(ParseNode $n) => $o->setImportedWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues([ImportedWindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'])),
            'intuneAccountId' => fn(ParseNode $n) => $o->setIntuneAccountId($n->getStringValue()),
            'intuneBrand' => fn(ParseNode $n) => $o->setIntuneBrand($n->getObjectValue([IntuneBrand::class, 'createFromDiscriminatorValue'])),
            'iosUpdateStatuses' => fn(ParseNode $n) => $o->setIosUpdateStatuses($n->getCollectionOfObjectValues([IosUpdateDeviceStatus::class, 'createFromDiscriminatorValue'])),
            'managedDeviceOverview' => fn(ParseNode $n) => $o->setManagedDeviceOverview($n->getObjectValue([ManagedDeviceOverview::class, 'createFromDiscriminatorValue'])),
            'managedDevices' => fn(ParseNode $n) => $o->setManagedDevices($n->getCollectionOfObjectValues([ManagedDevice::class, 'createFromDiscriminatorValue'])),
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
            'windowsAutopilotDeviceIdentities' => fn(ParseNode $n) => $o->setWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues([WindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'])),
            'windowsInformationProtectionAppLearningSummaries' => fn(ParseNode $n) => $o->setWindowsInformationProtectionAppLearningSummaries($n->getCollectionOfObjectValues([WindowsInformationProtectionAppLearningSummary::class, 'createFromDiscriminatorValue'])),
            'windowsInformationProtectionNetworkLearningSummaries' => fn(ParseNode $n) => $o->setWindowsInformationProtectionNetworkLearningSummaries($n->getCollectionOfObjectValues([WindowsInformationProtectionNetworkLearningSummary::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the importedWindowsAutopilotDeviceIdentities property value. Collection of imported Windows autopilot devices.
     * @return array<ImportedWindowsAutopilotDeviceIdentity>|null
    */
    public function getImportedWindowsAutopilotDeviceIdentities(): ?array {
        return $this->getBackingStore()->get('importedWindowsAutopilotDeviceIdentities');
    }

    /**
     * Gets the intuneAccountId property value. Intune Account Id for given tenant
     * @return string|null
    */
    public function getIntuneAccountId(): ?string {
        return $this->getBackingStore()->get('intuneAccountId');
    }

    /**
     * Gets the intuneBrand property value. intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     * @return IntuneBrand|null
    */
    public function getIntuneBrand(): ?IntuneBrand {
        return $this->getBackingStore()->get('intuneBrand');
    }

    /**
     * Gets the iosUpdateStatuses property value. The IOS software update installation statuses for this account.
     * @return array<IosUpdateDeviceStatus>|null
    */
    public function getIosUpdateStatuses(): ?array {
        return $this->getBackingStore()->get('iosUpdateStatuses');
    }

    /**
     * Gets the managedDeviceOverview property value. Device overview
     * @return ManagedDeviceOverview|null
    */
    public function getManagedDeviceOverview(): ?ManagedDeviceOverview {
        return $this->getBackingStore()->get('managedDeviceOverview');
    }

    /**
     * Gets the managedDevices property value. The list of managed devices.
     * @return array<ManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        return $this->getBackingStore()->get('managedDevices');
    }

    /**
     * Gets the mobileThreatDefenseConnectors property value. The list of Mobile threat Defense connectors configured by the tenant.
     * @return array<MobileThreatDefenseConnector>|null
    */
    public function getMobileThreatDefenseConnectors(): ?array {
        return $this->getBackingStore()->get('mobileThreatDefenseConnectors');
    }

    /**
     * Gets the notificationMessageTemplates property value. The Notification Message Templates.
     * @return array<NotificationMessageTemplate>|null
    */
    public function getNotificationMessageTemplates(): ?array {
        return $this->getBackingStore()->get('notificationMessageTemplates');
    }

    /**
     * Gets the remoteAssistancePartners property value. The remote assist partners.
     * @return array<RemoteAssistancePartner>|null
    */
    public function getRemoteAssistancePartners(): ?array {
        return $this->getBackingStore()->get('remoteAssistancePartners');
    }

    /**
     * Gets the reports property value. Reports singleton
     * @return DeviceManagementReports|null
    */
    public function getReports(): ?DeviceManagementReports {
        return $this->getBackingStore()->get('reports');
    }

    /**
     * Gets the resourceOperations property value. The Resource Operations.
     * @return array<ResourceOperation>|null
    */
    public function getResourceOperations(): ?array {
        return $this->getBackingStore()->get('resourceOperations');
    }

    /**
     * Gets the roleAssignments property value. The Role Assignments.
     * @return array<DeviceAndAppManagementRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->getBackingStore()->get('roleAssignments');
    }

    /**
     * Gets the roleDefinitions property value. The Role Definitions.
     * @return array<RoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->getBackingStore()->get('roleDefinitions');
    }

    /**
     * Gets the settings property value. Account level settings.
     * @return DeviceManagementSettings|null
    */
    public function getSettings(): ?DeviceManagementSettings {
        return $this->getBackingStore()->get('settings');
    }

    /**
     * Gets the softwareUpdateStatusSummary property value. The software update status summary.
     * @return SoftwareUpdateStatusSummary|null
    */
    public function getSoftwareUpdateStatusSummary(): ?SoftwareUpdateStatusSummary {
        return $this->getBackingStore()->get('softwareUpdateStatusSummary');
    }

    /**
     * Gets the subscriptionState property value. Tenant mobile device management subscription state.
     * @return DeviceManagementSubscriptionState|null
    */
    public function getSubscriptionState(): ?DeviceManagementSubscriptionState {
        return $this->getBackingStore()->get('subscriptionState');
    }

    /**
     * Gets the telecomExpenseManagementPartners property value. The telecom expense management partners.
     * @return array<TelecomExpenseManagementPartner>|null
    */
    public function getTelecomExpenseManagementPartners(): ?array {
        return $this->getBackingStore()->get('telecomExpenseManagementPartners');
    }

    /**
     * Gets the termsAndConditions property value. The terms and conditions associated with device management of the company.
     * @return array<TermsAndConditions>|null
    */
    public function getTermsAndConditions(): ?array {
        return $this->getBackingStore()->get('termsAndConditions');
    }

    /**
     * Gets the troubleshootingEvents property value. The list of troubleshooting events for the tenant.
     * @return array<DeviceManagementTroubleshootingEvent>|null
    */
    public function getTroubleshootingEvents(): ?array {
        return $this->getBackingStore()->get('troubleshootingEvents');
    }

    /**
     * Gets the windowsAutopilotDeviceIdentities property value. The Windows autopilot device identities contained collection.
     * @return array<WindowsAutopilotDeviceIdentity>|null
    */
    public function getWindowsAutopilotDeviceIdentities(): ?array {
        return $this->getBackingStore()->get('windowsAutopilotDeviceIdentities');
    }

    /**
     * Gets the windowsInformationProtectionAppLearningSummaries property value. The windows information protection app learning summaries.
     * @return array<WindowsInformationProtectionAppLearningSummary>|null
    */
    public function getWindowsInformationProtectionAppLearningSummaries(): ?array {
        return $this->getBackingStore()->get('windowsInformationProtectionAppLearningSummaries');
    }

    /**
     * Gets the windowsInformationProtectionNetworkLearningSummaries property value. The windows information protection network learning summaries.
     * @return array<WindowsInformationProtectionNetworkLearningSummary>|null
    */
    public function getWindowsInformationProtectionNetworkLearningSummaries(): ?array {
        return $this->getBackingStore()->get('windowsInformationProtectionNetworkLearningSummaries');
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
        $writer->writeCollectionOfObjectValues('exchangeConnectors', $this->getExchangeConnectors());
        $writer->writeCollectionOfObjectValues('importedWindowsAutopilotDeviceIdentities', $this->getImportedWindowsAutopilotDeviceIdentities());
        $writer->writeStringValue('intuneAccountId', $this->getIntuneAccountId());
        $writer->writeObjectValue('intuneBrand', $this->getIntuneBrand());
        $writer->writeCollectionOfObjectValues('iosUpdateStatuses', $this->getIosUpdateStatuses());
        $writer->writeObjectValue('managedDeviceOverview', $this->getManagedDeviceOverview());
        $writer->writeCollectionOfObjectValues('managedDevices', $this->getManagedDevices());
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
        $writer->writeCollectionOfObjectValues('windowsAutopilotDeviceIdentities', $this->getWindowsAutopilotDeviceIdentities());
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionAppLearningSummaries', $this->getWindowsInformationProtectionAppLearningSummaries());
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionNetworkLearningSummaries', $this->getWindowsInformationProtectionNetworkLearningSummaries());
    }

    /**
     * Sets the applePushNotificationCertificate property value. Apple push notification certificate.
     *  @param ApplePushNotificationCertificate|null $value Value to set for the applePushNotificationCertificate property.
    */
    public function setApplePushNotificationCertificate(?ApplePushNotificationCertificate $value): void {
        $this->getBackingStore()->set('applePushNotificationCertificate', $value);
    }

    /**
     * Sets the auditEvents property value. The Audit Events
     *  @param array<AuditEvent>|null $value Value to set for the auditEvents property.
    */
    public function setAuditEvents(?array $value): void {
        $this->getBackingStore()->set('auditEvents', $value);
    }

    /**
     * Sets the complianceManagementPartners property value. The list of Compliance Management Partners configured by the tenant.
     *  @param array<ComplianceManagementPartner>|null $value Value to set for the complianceManagementPartners property.
    */
    public function setComplianceManagementPartners(?array $value): void {
        $this->getBackingStore()->set('complianceManagementPartners', $value);
    }

    /**
     * Sets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     *  @param OnPremisesConditionalAccessSettings|null $value Value to set for the conditionalAccessSettings property.
    */
    public function setConditionalAccessSettings(?OnPremisesConditionalAccessSettings $value): void {
        $this->getBackingStore()->set('conditionalAccessSettings', $value);
    }

    /**
     * Sets the detectedApps property value. The list of detected apps associated with a device.
     *  @param array<DetectedApp>|null $value Value to set for the detectedApps property.
    */
    public function setDetectedApps(?array $value): void {
        $this->getBackingStore()->set('detectedApps', $value);
    }

    /**
     * Sets the deviceCategories property value. The list of device categories with the tenant.
     *  @param array<DeviceCategory>|null $value Value to set for the deviceCategories property.
    */
    public function setDeviceCategories(?array $value): void {
        $this->getBackingStore()->set('deviceCategories', $value);
    }

    /**
     * Sets the deviceCompliancePolicies property value. The device compliance policies.
     *  @param array<DeviceCompliancePolicy>|null $value Value to set for the deviceCompliancePolicies property.
    */
    public function setDeviceCompliancePolicies(?array $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicies', $value);
    }

    /**
     * Sets the deviceCompliancePolicyDeviceStateSummary property value. The device compliance state summary for this account.
     *  @param DeviceCompliancePolicyDeviceStateSummary|null $value Value to set for the deviceCompliancePolicyDeviceStateSummary property.
    */
    public function setDeviceCompliancePolicyDeviceStateSummary(?DeviceCompliancePolicyDeviceStateSummary $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicyDeviceStateSummary', $value);
    }

    /**
     * Sets the deviceCompliancePolicySettingStateSummaries property value. The summary states of compliance policy settings for this account.
     *  @param array<DeviceCompliancePolicySettingStateSummary>|null $value Value to set for the deviceCompliancePolicySettingStateSummaries property.
    */
    public function setDeviceCompliancePolicySettingStateSummaries(?array $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicySettingStateSummaries', $value);
    }

    /**
     * Sets the deviceConfigurationDeviceStateSummaries property value. The device configuration device state summary for this account.
     *  @param DeviceConfigurationDeviceStateSummary|null $value Value to set for the deviceConfigurationDeviceStateSummaries property.
    */
    public function setDeviceConfigurationDeviceStateSummaries(?DeviceConfigurationDeviceStateSummary $value): void {
        $this->getBackingStore()->set('deviceConfigurationDeviceStateSummaries', $value);
    }

    /**
     * Sets the deviceConfigurations property value. The device configurations.
     *  @param array<DeviceConfiguration>|null $value Value to set for the deviceConfigurations property.
    */
    public function setDeviceConfigurations(?array $value): void {
        $this->getBackingStore()->set('deviceConfigurations', $value);
    }

    /**
     * Sets the deviceEnrollmentConfigurations property value. The list of device enrollment configurations
     *  @param array<DeviceEnrollmentConfiguration>|null $value Value to set for the deviceEnrollmentConfigurations property.
    */
    public function setDeviceEnrollmentConfigurations(?array $value): void {
        $this->getBackingStore()->set('deviceEnrollmentConfigurations', $value);
    }

    /**
     * Sets the deviceManagementPartners property value. The list of Device Management Partners configured by the tenant.
     *  @param array<DeviceManagementPartner>|null $value Value to set for the deviceManagementPartners property.
    */
    public function setDeviceManagementPartners(?array $value): void {
        $this->getBackingStore()->set('deviceManagementPartners', $value);
    }

    /**
     * Sets the exchangeConnectors property value. The list of Exchange Connectors configured by the tenant.
     *  @param array<DeviceManagementExchangeConnector>|null $value Value to set for the exchangeConnectors property.
    */
    public function setExchangeConnectors(?array $value): void {
        $this->getBackingStore()->set('exchangeConnectors', $value);
    }

    /**
     * Sets the importedWindowsAutopilotDeviceIdentities property value. Collection of imported Windows autopilot devices.
     *  @param array<ImportedWindowsAutopilotDeviceIdentity>|null $value Value to set for the importedWindowsAutopilotDeviceIdentities property.
    */
    public function setImportedWindowsAutopilotDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('importedWindowsAutopilotDeviceIdentities', $value);
    }

    /**
     * Sets the intuneAccountId property value. Intune Account Id for given tenant
     *  @param string|null $value Value to set for the intuneAccountId property.
    */
    public function setIntuneAccountId(?string $value): void {
        $this->getBackingStore()->set('intuneAccountId', $value);
    }

    /**
     * Sets the intuneBrand property value. intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     *  @param IntuneBrand|null $value Value to set for the intuneBrand property.
    */
    public function setIntuneBrand(?IntuneBrand $value): void {
        $this->getBackingStore()->set('intuneBrand', $value);
    }

    /**
     * Sets the iosUpdateStatuses property value. The IOS software update installation statuses for this account.
     *  @param array<IosUpdateDeviceStatus>|null $value Value to set for the iosUpdateStatuses property.
    */
    public function setIosUpdateStatuses(?array $value): void {
        $this->getBackingStore()->set('iosUpdateStatuses', $value);
    }

    /**
     * Sets the managedDeviceOverview property value. Device overview
     *  @param ManagedDeviceOverview|null $value Value to set for the managedDeviceOverview property.
    */
    public function setManagedDeviceOverview(?ManagedDeviceOverview $value): void {
        $this->getBackingStore()->set('managedDeviceOverview', $value);
    }

    /**
     * Sets the managedDevices property value. The list of managed devices.
     *  @param array<ManagedDevice>|null $value Value to set for the managedDevices property.
    */
    public function setManagedDevices(?array $value): void {
        $this->getBackingStore()->set('managedDevices', $value);
    }

    /**
     * Sets the mobileThreatDefenseConnectors property value. The list of Mobile threat Defense connectors configured by the tenant.
     *  @param array<MobileThreatDefenseConnector>|null $value Value to set for the mobileThreatDefenseConnectors property.
    */
    public function setMobileThreatDefenseConnectors(?array $value): void {
        $this->getBackingStore()->set('mobileThreatDefenseConnectors', $value);
    }

    /**
     * Sets the notificationMessageTemplates property value. The Notification Message Templates.
     *  @param array<NotificationMessageTemplate>|null $value Value to set for the notificationMessageTemplates property.
    */
    public function setNotificationMessageTemplates(?array $value): void {
        $this->getBackingStore()->set('notificationMessageTemplates', $value);
    }

    /**
     * Sets the remoteAssistancePartners property value. The remote assist partners.
     *  @param array<RemoteAssistancePartner>|null $value Value to set for the remoteAssistancePartners property.
    */
    public function setRemoteAssistancePartners(?array $value): void {
        $this->getBackingStore()->set('remoteAssistancePartners', $value);
    }

    /**
     * Sets the reports property value. Reports singleton
     *  @param DeviceManagementReports|null $value Value to set for the reports property.
    */
    public function setReports(?DeviceManagementReports $value): void {
        $this->getBackingStore()->set('reports', $value);
    }

    /**
     * Sets the resourceOperations property value. The Resource Operations.
     *  @param array<ResourceOperation>|null $value Value to set for the resourceOperations property.
    */
    public function setResourceOperations(?array $value): void {
        $this->getBackingStore()->set('resourceOperations', $value);
    }

    /**
     * Sets the roleAssignments property value. The Role Assignments.
     *  @param array<DeviceAndAppManagementRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('roleAssignments', $value);
    }

    /**
     * Sets the roleDefinitions property value. The Role Definitions.
     *  @param array<RoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value): void {
        $this->getBackingStore()->set('roleDefinitions', $value);
    }

    /**
     * Sets the settings property value. Account level settings.
     *  @param DeviceManagementSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?DeviceManagementSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the softwareUpdateStatusSummary property value. The software update status summary.
     *  @param SoftwareUpdateStatusSummary|null $value Value to set for the softwareUpdateStatusSummary property.
    */
    public function setSoftwareUpdateStatusSummary(?SoftwareUpdateStatusSummary $value): void {
        $this->getBackingStore()->set('softwareUpdateStatusSummary', $value);
    }

    /**
     * Sets the subscriptionState property value. Tenant mobile device management subscription state.
     *  @param DeviceManagementSubscriptionState|null $value Value to set for the subscriptionState property.
    */
    public function setSubscriptionState(?DeviceManagementSubscriptionState $value): void {
        $this->getBackingStore()->set('subscriptionState', $value);
    }

    /**
     * Sets the telecomExpenseManagementPartners property value. The telecom expense management partners.
     *  @param array<TelecomExpenseManagementPartner>|null $value Value to set for the telecomExpenseManagementPartners property.
    */
    public function setTelecomExpenseManagementPartners(?array $value): void {
        $this->getBackingStore()->set('telecomExpenseManagementPartners', $value);
    }

    /**
     * Sets the termsAndConditions property value. The terms and conditions associated with device management of the company.
     *  @param array<TermsAndConditions>|null $value Value to set for the termsAndConditions property.
    */
    public function setTermsAndConditions(?array $value): void {
        $this->getBackingStore()->set('termsAndConditions', $value);
    }

    /**
     * Sets the troubleshootingEvents property value. The list of troubleshooting events for the tenant.
     *  @param array<DeviceManagementTroubleshootingEvent>|null $value Value to set for the troubleshootingEvents property.
    */
    public function setTroubleshootingEvents(?array $value): void {
        $this->getBackingStore()->set('troubleshootingEvents', $value);
    }

    /**
     * Sets the windowsAutopilotDeviceIdentities property value. The Windows autopilot device identities contained collection.
     *  @param array<WindowsAutopilotDeviceIdentity>|null $value Value to set for the windowsAutopilotDeviceIdentities property.
    */
    public function setWindowsAutopilotDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('windowsAutopilotDeviceIdentities', $value);
    }

    /**
     * Sets the windowsInformationProtectionAppLearningSummaries property value. The windows information protection app learning summaries.
     *  @param array<WindowsInformationProtectionAppLearningSummary>|null $value Value to set for the windowsInformationProtectionAppLearningSummaries property.
    */
    public function setWindowsInformationProtectionAppLearningSummaries(?array $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionAppLearningSummaries', $value);
    }

    /**
     * Sets the windowsInformationProtectionNetworkLearningSummaries property value. The windows information protection network learning summaries.
     *  @param array<WindowsInformationProtectionNetworkLearningSummary>|null $value Value to set for the windowsInformationProtectionNetworkLearningSummaries property.
    */
    public function setWindowsInformationProtectionNetworkLearningSummaries(?array $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionNetworkLearningSummaries', $value);
    }

}
