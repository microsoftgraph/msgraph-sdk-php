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
use Microsoft\Graph\Generated\DeviceManagement\TelecomExpenseManagementPartners\TelecomExpenseManagementPartnersRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\TermsAndConditions\TermsAndConditionsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\TroubleshootingEvents\TroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformance\UserExperienceAnalyticsAppHealthApplicationPerformanceRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetailsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceIdRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion\UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDeviceModelPerformance\UserExperienceAnalyticsAppHealthDeviceModelPerformanceRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDevicePerformance\UserExperienceAnalyticsAppHealthDevicePerformanceRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDevicePerformanceDetails\UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOSVersionPerformance\UserExperienceAnalyticsAppHealthOSVersionPerformanceRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOverview\UserExperienceAnalyticsAppHealthOverviewRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\UserExperienceAnalyticsBaselinesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsCategories\UserExperienceAnalyticsCategoriesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDevicePerformance\UserExperienceAnalyticsDevicePerformanceRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceScores\UserExperienceAnalyticsDeviceScoresRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupHistory\UserExperienceAnalyticsDeviceStartupHistoryRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcesses\UserExperienceAnalyticsDeviceStartupProcessesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformance\UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsMetricHistory\UserExperienceAnalyticsMetricHistoryRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsModelScores\UserExperienceAnalyticsModelScoresRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsOverview\UserExperienceAnalyticsOverviewRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsScoreHistory\UserExperienceAnalyticsScoreHistoryRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices\UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric\UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics\UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereModelPerformance\UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\VerifyWindowsEnrollmentAutoDiscoveryWithDomainName\VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\VirtualEndpointRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\WindowsAutopilotDeviceIdentitiesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionAppLearningSummaries\WindowsInformationProtectionAppLearningSummariesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\WindowsInformationProtectionNetworkLearningSummariesRequestBuilder;
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
     * Provides operations to manage the telecomExpenseManagementPartners property of the microsoft.graph.deviceManagement entity.
    */
    public function telecomExpenseManagementPartners(): TelecomExpenseManagementPartnersRequestBuilder {
        return new TelecomExpenseManagementPartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
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
    public function userExperienceAnalyticsAppHealthApplicationPerformance(): UserExperienceAnalyticsAppHealthApplicationPerformanceRequestBuilder {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(): UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetailsRequestBuilder {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(): UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceIdRequestBuilder {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(): UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthDeviceModelPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthDeviceModelPerformance(): UserExperienceAnalyticsAppHealthDeviceModelPerformanceRequestBuilder {
        return new UserExperienceAnalyticsAppHealthDeviceModelPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
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
    public function userExperienceAnalyticsAppHealthDevicePerformanceDetails(): UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder {
        return new UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthOSVersionPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthOSVersionPerformance(): UserExperienceAnalyticsAppHealthOSVersionPerformanceRequestBuilder {
        return new UserExperienceAnalyticsAppHealthOSVersionPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
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
    public function userExperienceAnalyticsDeviceStartupProcessPerformance(): UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder {
        return new UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
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
    public function userExperienceAnalyticsSummarizeWorkFromAnywhereDevices(): UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder {
        return new UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(): UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilder {
        return new UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilder($this->pathParameters, $this->requestAdapter);
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
    public function userExperienceAnalyticsWorkFromAnywhereModelPerformance(): UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder {
        return new UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
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
    public function windowsInformationProtectionNetworkLearningSummaries(): WindowsInformationProtectionNetworkLearningSummariesRequestBuilder {
        return new WindowsInformationProtectionNetworkLearningSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read properties and relationships of the deviceManagement object.
     * @param DeviceManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagement|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-enrollment-devicemanagement-get?view=graph-rest-1.0 Find more info here
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
     * Update the properties of a deviceManagement object.
     * @param DeviceManagement $body The request body
     * @param DeviceManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagement|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-auditing-devicemanagement-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(DeviceManagement $body, ?DeviceManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagement::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Read properties and relationships of the deviceManagement object.
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
     * Update the properties of a deviceManagement object.
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
