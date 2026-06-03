<?php

namespace Microsoft\Graph\Generated\DeviceManagement;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\ApplePushNotificationCertificate\ApplePushNotificationCertificateRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\AuditEvents\AuditEventsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\ComplianceManagementPartners\ComplianceManagementPartnersRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\ConditionalAccessSettings\ConditionalAccessSettingsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DetectedApps\DetectedAppsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceCategories\DeviceCategoriesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\DeviceCompliancePoliciesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicyDeviceStateSummary\DeviceCompliancePolicyDeviceStateSummaryRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicySettingStateSummaries\DeviceCompliancePolicySettingStateSummariesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurationDeviceStateSummaries\DeviceConfigurationDeviceStateSummariesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\DeviceConfigurationsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceEnrollmentConfigurations\DeviceEnrollmentConfigurationsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceManagementPartners\DeviceManagementPartnersRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\ExchangeConnectors\ExchangeConnectorsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\GetEffectivePermissionsWithScope\GetEffectivePermissionsWithScopeRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\IosUpdateStatuses\IosUpdateStatusesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\ManagedDeviceOverview\ManagedDeviceOverviewRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\ManagedDevices\ManagedDevicesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\MobileAppTroubleshootingEvents\MobileAppTroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\MobileThreatDefenseConnectors\MobileThreatDefenseConnectorsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\NotificationMessageTemplates\NotificationMessageTemplatesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\RemoteAssistancePartners\RemoteAssistancePartnersRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\ReportsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\ResourceOperations\ResourceOperationsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\RoleAssignments\RoleAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\RoleDefinitions\RoleDefinitionsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\SoftwareUpdateStatusSummary\SoftwareUpdateStatusSummaryRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\TermsAndConditions\TermsAndConditionsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\TroubleshootingEvents\TroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformance\UserExperienceAnalyticsAppHealthApplicationPerformanceR_639a6000;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_3fa78c7f\UserExperienceAnalyticsAppHealthApplicationPerformanceB_b0ce4c31;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_764bd61c\UserExperienceAnalyticsAppHealthApplicationPerformanceB_899202bd;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_76e0e2cf\UserExperienceAnalyticsAppHealthApplicationPerformanceB_73937166;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDeviceModelPerformance\UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_4dcbff66;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDevicePerformance\UserExperienceAnalyticsAppHealthDevicePerformanceRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDevicePerformanceDetails\UserExperienceAnalyticsAppHealthDevicePerformanceDetail_4ca850b6;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOSVersionPerformance\UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_fdb3de6d;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOverview\UserExperienceAnalyticsAppHealthOverviewRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\UserExperienceAnalyticsBaselinesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsCategories\UserExperienceAnalyticsCategoriesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDevicePerformance\UserExperienceAnalyticsDevicePerformanceRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceScores\UserExperienceAnalyticsDeviceScoresRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupHistory\UserExperienceAnalyticsDeviceStartupHistoryRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcesses\UserExperienceAnalyticsDeviceStartupProcessesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformance\UserExperienceAnalyticsDeviceStartupProcessPerformanceR_4c8ce676;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsMetricHistory\UserExperienceAnalyticsMetricHistoryRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsModelScores\UserExperienceAnalyticsModelScoresRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsOverview\UserExperienceAnalyticsOverviewRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsScoreHistory\UserExperienceAnalyticsScoreHistoryRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices\UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_2417dbae;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric\UserExperienceAnalyticsWorkFromAnywhereHardwareReadines_08ab2d74;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics\UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereModelPerformance\UserExperienceAnalyticsWorkFromAnywhereModelPerformance_95ddf1fd;
use Microsoft\Graph\Generated\DeviceManagement\VerifyWindowsEnrollmentAutoDiscoveryWithDomainName\VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\VirtualEndpointRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\WindowsAutopilotDeviceIdentitiesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionAppLearningSummaries\WindowsInformationProtectionAppLearningSummariesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\WindowsInformationProtectionNetworkLearningSummariesReq_49622581;
use Microsoft\Graph\Generated\DeviceManagement\WindowsMalwareInformation\WindowsMalwareInformationRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceManagement;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceManagement singleton.
*/
class DeviceManagementRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the applePushNotificationCertificate property of the microsoft.graph.deviceManagement entity.
    */
    public function applePushNotificationCertificate(): ApplePushNotificationCertificateRequestBuilder {
        return new ApplePushNotificationCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the auditEvents property of the microsoft.graph.deviceManagement entity.
    */
    public function auditEvents(): AuditEventsRequestBuilder {
        return new AuditEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the complianceManagementPartners property of the microsoft.graph.deviceManagement entity.
    */
    public function complianceManagementPartners(): ComplianceManagementPartnersRequestBuilder {
        return new ComplianceManagementPartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the conditionalAccessSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function conditionalAccessSettings(): ConditionalAccessSettingsRequestBuilder {
        return new ConditionalAccessSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the detectedApps property of the microsoft.graph.deviceManagement entity.
    */
    public function detectedApps(): DetectedAppsRequestBuilder {
        return new DetectedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCategories property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceCategories(): DeviceCategoriesRequestBuilder {
        return new DeviceCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicies property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceCompliancePolicies(): DeviceCompliancePoliciesRequestBuilder {
        return new DeviceCompliancePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicyDeviceStateSummary property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceCompliancePolicyDeviceStateSummary(): DeviceCompliancePolicyDeviceStateSummaryRequestBuilder {
        return new DeviceCompliancePolicyDeviceStateSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicySettingStateSummaries property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceCompliancePolicySettingStateSummaries(): DeviceCompliancePolicySettingStateSummariesRequestBuilder {
        return new DeviceCompliancePolicySettingStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurationDeviceStateSummaries property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceConfigurationDeviceStateSummaries(): DeviceConfigurationDeviceStateSummariesRequestBuilder {
        return new DeviceConfigurationDeviceStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurations property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceConfigurations(): DeviceConfigurationsRequestBuilder {
        return new DeviceConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceEnrollmentConfigurations property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceEnrollmentConfigurations(): DeviceEnrollmentConfigurationsRequestBuilder {
        return new DeviceEnrollmentConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceManagementPartners property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceManagementPartners(): DeviceManagementPartnersRequestBuilder {
        return new DeviceManagementPartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exchangeConnectors property of the microsoft.graph.deviceManagement entity.
    */
    public function exchangeConnectors(): ExchangeConnectorsRequestBuilder {
        return new ExchangeConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the importedWindowsAutopilotDeviceIdentities property of the microsoft.graph.deviceManagement entity.
    */
    public function importedWindowsAutopilotDeviceIdentities(): ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder {
        return new ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the iosUpdateStatuses property of the microsoft.graph.deviceManagement entity.
    */
    public function iosUpdateStatuses(): IosUpdateStatusesRequestBuilder {
        return new IosUpdateStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceOverview property of the microsoft.graph.deviceManagement entity.
    */
    public function managedDeviceOverview(): ManagedDeviceOverviewRequestBuilder {
        return new ManagedDeviceOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDevices property of the microsoft.graph.deviceManagement entity.
    */
    public function managedDevices(): ManagedDevicesRequestBuilder {
        return new ManagedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileAppTroubleshootingEvents property of the microsoft.graph.deviceManagement entity.
    */
    public function mobileAppTroubleshootingEvents(): MobileAppTroubleshootingEventsRequestBuilder {
        return new MobileAppTroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileThreatDefenseConnectors property of the microsoft.graph.deviceManagement entity.
    */
    public function mobileThreatDefenseConnectors(): MobileThreatDefenseConnectorsRequestBuilder {
        return new MobileThreatDefenseConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the notificationMessageTemplates property of the microsoft.graph.deviceManagement entity.
    */
    public function notificationMessageTemplates(): NotificationMessageTemplatesRequestBuilder {
        return new NotificationMessageTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the remoteAssistancePartners property of the microsoft.graph.deviceManagement entity.
    */
    public function remoteAssistancePartners(): RemoteAssistancePartnersRequestBuilder {
        return new RemoteAssistancePartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reports property of the microsoft.graph.deviceManagement entity.
    */
    public function reports(): ReportsRequestBuilder {
        return new ReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resourceOperations property of the microsoft.graph.deviceManagement entity.
    */
    public function resourceOperations(): ResourceOperationsRequestBuilder {
        return new ResourceOperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleAssignments property of the microsoft.graph.deviceManagement entity.
    */
    public function roleAssignments(): RoleAssignmentsRequestBuilder {
        return new RoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleDefinitions property of the microsoft.graph.deviceManagement entity.
    */
    public function roleDefinitions(): RoleDefinitionsRequestBuilder {
        return new RoleDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the softwareUpdateStatusSummary property of the microsoft.graph.deviceManagement entity.
    */
    public function softwareUpdateStatusSummary(): SoftwareUpdateStatusSummaryRequestBuilder {
        return new SoftwareUpdateStatusSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the termsAndConditions property of the microsoft.graph.deviceManagement entity.
    */
    public function termsAndConditions(): TermsAndConditionsRequestBuilder {
        return new TermsAndConditionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the troubleshootingEvents property of the microsoft.graph.deviceManagement entity.
    */
    public function troubleshootingEvents(): TroubleshootingEventsRequestBuilder {
        return new TroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformance(): UserExperienceAnalyticsAppHealthApplicationPerformanceR_639a6000 {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceR_639a6000($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(): UserExperienceAnalyticsAppHealthApplicationPerformanceB_73937166 {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceB_73937166($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(): UserExperienceAnalyticsAppHealthApplicationPerformanceB_b0ce4c31 {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceB_b0ce4c31($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(): UserExperienceAnalyticsAppHealthApplicationPerformanceB_899202bd {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceB_899202bd($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthDeviceModelPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthDeviceModelPerformance(): UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_4dcbff66 {
        return new UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_4dcbff66($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthDevicePerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthDevicePerformance(): UserExperienceAnalyticsAppHealthDevicePerformanceRequestBuilder {
        return new UserExperienceAnalyticsAppHealthDevicePerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthDevicePerformanceDetails property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthDevicePerformanceDetails(): UserExperienceAnalyticsAppHealthDevicePerformanceDetail_4ca850b6 {
        return new UserExperienceAnalyticsAppHealthDevicePerformanceDetail_4ca850b6($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthOSVersionPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthOSVersionPerformance(): UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_fdb3de6d {
        return new UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_fdb3de6d($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthOverview property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthOverview(): UserExperienceAnalyticsAppHealthOverviewRequestBuilder {
        return new UserExperienceAnalyticsAppHealthOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBaselines property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsBaselines(): UserExperienceAnalyticsBaselinesRequestBuilder {
        return new UserExperienceAnalyticsBaselinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsCategories property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsCategories(): UserExperienceAnalyticsCategoriesRequestBuilder {
        return new UserExperienceAnalyticsCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDevicePerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDevicePerformance(): UserExperienceAnalyticsDevicePerformanceRequestBuilder {
        return new UserExperienceAnalyticsDevicePerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceScores property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceScores(): UserExperienceAnalyticsDeviceScoresRequestBuilder {
        return new UserExperienceAnalyticsDeviceScoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceStartupHistory property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceStartupHistory(): UserExperienceAnalyticsDeviceStartupHistoryRequestBuilder {
        return new UserExperienceAnalyticsDeviceStartupHistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceStartupProcesses property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceStartupProcesses(): UserExperienceAnalyticsDeviceStartupProcessesRequestBuilder {
        return new UserExperienceAnalyticsDeviceStartupProcessesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceStartupProcessPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceStartupProcessPerformance(): UserExperienceAnalyticsDeviceStartupProcessPerformanceR_4c8ce676 {
        return new UserExperienceAnalyticsDeviceStartupProcessPerformanceR_4c8ce676($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsMetricHistory property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsMetricHistory(): UserExperienceAnalyticsMetricHistoryRequestBuilder {
        return new UserExperienceAnalyticsMetricHistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsModelScores property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsModelScores(): UserExperienceAnalyticsModelScoresRequestBuilder {
        return new UserExperienceAnalyticsModelScoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsOverview property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsOverview(): UserExperienceAnalyticsOverviewRequestBuilder {
        return new UserExperienceAnalyticsOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsScoreHistory property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsScoreHistory(): UserExperienceAnalyticsScoreHistoryRequestBuilder {
        return new UserExperienceAnalyticsScoreHistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the userExperienceAnalyticsSummarizeWorkFromAnywhereDevices method.
    */
    public function userExperienceAnalyticsSummarizeWorkFromAnywhereDevices(): UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_2417dbae {
        return new UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_2417dbae($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(): UserExperienceAnalyticsWorkFromAnywhereHardwareReadines_08ab2d74 {
        return new UserExperienceAnalyticsWorkFromAnywhereHardwareReadines_08ab2d74($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereMetrics property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsWorkFromAnywhereMetrics(): UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder {
        return new UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereModelPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsWorkFromAnywhereModelPerformance(): UserExperienceAnalyticsWorkFromAnywhereModelPerformance_95ddf1fd {
        return new UserExperienceAnalyticsWorkFromAnywhereModelPerformance_95ddf1fd($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the virtualEndpoint property of the microsoft.graph.deviceManagement entity.
    */
    public function virtualEndpoint(): VirtualEndpointRequestBuilder {
        return new VirtualEndpointRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsAutopilotDeviceIdentities property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsAutopilotDeviceIdentities(): WindowsAutopilotDeviceIdentitiesRequestBuilder {
        return new WindowsAutopilotDeviceIdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionAppLearningSummaries property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsInformationProtectionAppLearningSummaries(): WindowsInformationProtectionAppLearningSummariesRequestBuilder {
        return new WindowsInformationProtectionAppLearningSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionNetworkLearningSummaries property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsInformationProtectionNetworkLearningSummaries(): WindowsInformationProtectionNetworkLearningSummariesReq_49622581 {
        return new WindowsInformationProtectionNetworkLearningSummariesReq_49622581($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsMalwareInformation property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsMalwareInformation(): WindowsMalwareInformationRequestBuilder {
        return new WindowsMalwareInformationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeviceManagementRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get deviceManagement
     * @param DeviceManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagement|null>
     * @throws Exception
    */
    public function get(?DeviceManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagement::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getEffectivePermissions method.
     * @param string $scope Usage: scope='{scope}'
     * @return GetEffectivePermissionsWithScopeRequestBuilder
    */
    public function getEffectivePermissionsWithScope(string $scope): GetEffectivePermissionsWithScopeRequestBuilder {
        return new GetEffectivePermissionsWithScopeRequestBuilder($this->pathParameters, $this->requestAdapter, $scope);
    }

    /**
     * Update deviceManagement
     * @param DeviceManagement $body The request body
     * @param DeviceManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagement|null>
     * @throws Exception
    */
    public function patch(DeviceManagement $body, ?DeviceManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagement::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get deviceManagement
     * @param DeviceManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Update deviceManagement
     * @param DeviceManagement $body The request body
     * @param DeviceManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagement $body, ?DeviceManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to call the verifyWindowsEnrollmentAutoDiscovery method.
     * @param string $domainName Usage: domainName='{domainName}'
     * @return VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder
    */
    public function verifyWindowsEnrollmentAutoDiscoveryWithDomainName(string $domainName): VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder {
        return new VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder($this->pathParameters, $this->requestAdapter, $domainName);
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DeviceManagementRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementRequestBuilder {
        return new DeviceManagementRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
