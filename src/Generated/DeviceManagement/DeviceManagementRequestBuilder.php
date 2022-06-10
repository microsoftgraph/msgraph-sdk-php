<?php

namespace Microsoft\Graph\DeviceManagement;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\DeviceManagement\ApplePushNotificationCertificate\ApplePushNotificationCertificateRequestBuilder;
use Microsoft\Graph\DeviceManagement\ComplianceManagementPartners\ComplianceManagementPartnersRequestBuilder;
use Microsoft\Graph\DeviceManagement\ComplianceManagementPartners\Item\ComplianceManagementPartnerItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\ConditionalAccessSettings\ConditionalAccessSettingsRequestBuilder;
use Microsoft\Graph\DeviceManagement\DetectedApps\DetectedAppsRequestBuilder;
use Microsoft\Graph\DeviceManagement\DetectedApps\Item\DetectedAppItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceCategories\DeviceCategoriesRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceCategories\Item\DeviceCategoryItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceCompliancePolicies\DeviceCompliancePoliciesRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceCompliancePolicies\Item\DeviceCompliancePolicyItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceCompliancePolicyDeviceStateSummary\DeviceCompliancePolicyDeviceStateSummaryRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceCompliancePolicySettingStateSummaries\DeviceCompliancePolicySettingStateSummariesRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceCompliancePolicySettingStateSummaries\Item\DeviceCompliancePolicySettingStateSummaryItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceConfigurationDeviceStateSummaries\DeviceConfigurationDeviceStateSummariesRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceConfigurations\DeviceConfigurationsRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceConfigurations\Item\DeviceConfigurationItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceEnrollmentConfigurations\DeviceEnrollmentConfigurationsRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceEnrollmentConfigurations\Item\DeviceEnrollmentConfigurationItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceManagementPartners\DeviceManagementPartnersRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceManagementPartners\Item\DeviceManagementPartnerItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\ExchangeConnectors\ExchangeConnectorsRequestBuilder;
use Microsoft\Graph\DeviceManagement\ExchangeConnectors\Item\DeviceManagementExchangeConnectorItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\GetEffectivePermissionsWithScope\GetEffectivePermissionsWithScopeRequestBuilder;
use Microsoft\Graph\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder;
use Microsoft\Graph\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\Item\ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\IosUpdateStatuses\IosUpdateStatusesRequestBuilder;
use Microsoft\Graph\DeviceManagement\IosUpdateStatuses\Item\IosUpdateDeviceStatusItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\ManagedDeviceOverview\ManagedDeviceOverviewRequestBuilder;
use Microsoft\Graph\DeviceManagement\ManagedDevices\Item\ManagedDeviceItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\ManagedDevices\ManagedDevicesRequestBuilder;
use Microsoft\Graph\DeviceManagement\MobileThreatDefenseConnectors\Item\MobileThreatDefenseConnectorItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\MobileThreatDefenseConnectors\MobileThreatDefenseConnectorsRequestBuilder;
use Microsoft\Graph\DeviceManagement\NotificationMessageTemplates\Item\NotificationMessageTemplateItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\NotificationMessageTemplates\NotificationMessageTemplatesRequestBuilder;
use Microsoft\Graph\DeviceManagement\RemoteAssistancePartners\Item\RemoteAssistancePartnerItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\RemoteAssistancePartners\RemoteAssistancePartnersRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\ReportsRequestBuilder;
use Microsoft\Graph\DeviceManagement\ResourceOperations\Item\ResourceOperationItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\ResourceOperations\ResourceOperationsRequestBuilder;
use Microsoft\Graph\DeviceManagement\RoleAssignments\Item\DeviceAndAppManagementRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\RoleAssignments\RoleAssignmentsRequestBuilder;
use Microsoft\Graph\DeviceManagement\RoleDefinitions\Item\RoleDefinitionItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\RoleDefinitions\RoleDefinitionsRequestBuilder;
use Microsoft\Graph\DeviceManagement\SoftwareUpdateStatusSummary\SoftwareUpdateStatusSummaryRequestBuilder;
use Microsoft\Graph\DeviceManagement\TelecomExpenseManagementPartners\Item\TelecomExpenseManagementPartnerItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\TelecomExpenseManagementPartners\TelecomExpenseManagementPartnersRequestBuilder;
use Microsoft\Graph\DeviceManagement\TermsAndConditions\Item\TermsAndConditionsItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\TermsAndConditions\TermsAndConditionsRequestBuilder;
use Microsoft\Graph\DeviceManagement\TroubleshootingEvents\Item\DeviceManagementTroubleshootingEventItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\TroubleshootingEvents\TroubleshootingEventsRequestBuilder;
use Microsoft\Graph\DeviceManagement\VerifyWindowsEnrollmentAutoDiscoveryWithDomainName\VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder;
use Microsoft\Graph\DeviceManagement\WindowsAutopilotDeviceIdentities\Item\WindowsAutopilotDeviceIdentityItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\WindowsAutopilotDeviceIdentities\WindowsAutopilotDeviceIdentitiesRequestBuilder;
use Microsoft\Graph\DeviceManagement\WindowsInformationProtectionAppLearningSummaries\Item\WindowsInformationProtectionAppLearningSummaryItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\WindowsInformationProtectionAppLearningSummaries\WindowsInformationProtectionAppLearningSummariesRequestBuilder;
use Microsoft\Graph\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\Item\WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\WindowsInformationProtectionNetworkLearningSummariesRequestBuilder;
use Microsoft\Graph\Models\DeviceManagement;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceManagementRequestBuilder 
{
    /**
     * The applePushNotificationCertificate property
    */
    public function applePushNotificationCertificate(): ApplePushNotificationCertificateRequestBuilder {
        return new ApplePushNotificationCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The complianceManagementPartners property
    */
    public function complianceManagementPartners(): ComplianceManagementPartnersRequestBuilder {
        return new ComplianceManagementPartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The conditionalAccessSettings property
    */
    public function conditionalAccessSettings(): ConditionalAccessSettingsRequestBuilder {
        return new ConditionalAccessSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The detectedApps property
    */
    public function detectedApps(): DetectedAppsRequestBuilder {
        return new DetectedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceCategories property
    */
    public function deviceCategories(): DeviceCategoriesRequestBuilder {
        return new DeviceCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceCompliancePolicies property
    */
    public function deviceCompliancePolicies(): DeviceCompliancePoliciesRequestBuilder {
        return new DeviceCompliancePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceCompliancePolicyDeviceStateSummary property
    */
    public function deviceCompliancePolicyDeviceStateSummary(): DeviceCompliancePolicyDeviceStateSummaryRequestBuilder {
        return new DeviceCompliancePolicyDeviceStateSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceCompliancePolicySettingStateSummaries property
    */
    public function deviceCompliancePolicySettingStateSummaries(): DeviceCompliancePolicySettingStateSummariesRequestBuilder {
        return new DeviceCompliancePolicySettingStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceConfigurationDeviceStateSummaries property
    */
    public function deviceConfigurationDeviceStateSummaries(): DeviceConfigurationDeviceStateSummariesRequestBuilder {
        return new DeviceConfigurationDeviceStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceConfigurations property
    */
    public function deviceConfigurations(): DeviceConfigurationsRequestBuilder {
        return new DeviceConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceEnrollmentConfigurations property
    */
    public function deviceEnrollmentConfigurations(): DeviceEnrollmentConfigurationsRequestBuilder {
        return new DeviceEnrollmentConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceManagementPartners property
    */
    public function deviceManagementPartners(): DeviceManagementPartnersRequestBuilder {
        return new DeviceManagementPartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The exchangeConnectors property
    */
    public function exchangeConnectors(): ExchangeConnectorsRequestBuilder {
        return new ExchangeConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The importedWindowsAutopilotDeviceIdentities property
    */
    public function importedWindowsAutopilotDeviceIdentities(): ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder {
        return new ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The iosUpdateStatuses property
    */
    public function iosUpdateStatuses(): IosUpdateStatusesRequestBuilder {
        return new IosUpdateStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedDeviceOverview property
    */
    public function managedDeviceOverview(): ManagedDeviceOverviewRequestBuilder {
        return new ManagedDeviceOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedDevices property
    */
    public function managedDevices(): ManagedDevicesRequestBuilder {
        return new ManagedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mobileThreatDefenseConnectors property
    */
    public function mobileThreatDefenseConnectors(): MobileThreatDefenseConnectorsRequestBuilder {
        return new MobileThreatDefenseConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The notificationMessageTemplates property
    */
    public function notificationMessageTemplates(): NotificationMessageTemplatesRequestBuilder {
        return new NotificationMessageTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The remoteAssistancePartners property
    */
    public function remoteAssistancePartners(): RemoteAssistancePartnersRequestBuilder {
        return new RemoteAssistancePartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reports property
    */
    public function reports(): ReportsRequestBuilder {
        return new ReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The resourceOperations property
    */
    public function resourceOperations(): ResourceOperationsRequestBuilder {
        return new ResourceOperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleAssignments property
    */
    public function roleAssignments(): RoleAssignmentsRequestBuilder {
        return new RoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleDefinitions property
    */
    public function roleDefinitions(): RoleDefinitionsRequestBuilder {
        return new RoleDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The softwareUpdateStatusSummary property
    */
    public function softwareUpdateStatusSummary(): SoftwareUpdateStatusSummaryRequestBuilder {
        return new SoftwareUpdateStatusSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The telecomExpenseManagementPartners property
    */
    public function telecomExpenseManagementPartners(): TelecomExpenseManagementPartnersRequestBuilder {
        return new TelecomExpenseManagementPartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The termsAndConditions property
    */
    public function termsAndConditions(): TermsAndConditionsRequestBuilder {
        return new TermsAndConditionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The troubleshootingEvents property
    */
    public function troubleshootingEvents(): TroubleshootingEventsRequestBuilder {
        return new TroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The windowsAutopilotDeviceIdentities property
    */
    public function windowsAutopilotDeviceIdentities(): WindowsAutopilotDeviceIdentitiesRequestBuilder {
        return new WindowsAutopilotDeviceIdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsInformationProtectionAppLearningSummaries property
    */
    public function windowsInformationProtectionAppLearningSummaries(): WindowsInformationProtectionAppLearningSummariesRequestBuilder {
        return new WindowsInformationProtectionAppLearningSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsInformationProtectionNetworkLearningSummaries property
    */
    public function windowsInformationProtectionNetworkLearningSummaries(): WindowsInformationProtectionNetworkLearningSummariesRequestBuilder {
        return new WindowsInformationProtectionNetworkLearningSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.complianceManagementPartners.item collection
     * @param string $id Unique identifier of the item
     * @return ComplianceManagementPartnerItemRequestBuilder
    */
    public function complianceManagementPartnersById(string $id): ComplianceManagementPartnerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['complianceManagementPartner%2Did'] = $id;
        return new ComplianceManagementPartnerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceManagementRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get deviceManagement
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?DeviceManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update deviceManagement
     * @param DeviceManagement $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DeviceManagement $body, ?DeviceManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.detectedApps.item collection
     * @param string $id Unique identifier of the item
     * @return DetectedAppItemRequestBuilder
    */
    public function detectedAppsById(string $id): DetectedAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['detectedApp%2Did'] = $id;
        return new DetectedAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.deviceCategories.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceCategoryItemRequestBuilder
    */
    public function deviceCategoriesById(string $id): DeviceCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCategory%2Did'] = $id;
        return new DeviceCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.deviceCompliancePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceCompliancePolicyItemRequestBuilder
    */
    public function deviceCompliancePoliciesById(string $id): DeviceCompliancePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicy%2Did'] = $id;
        return new DeviceCompliancePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.deviceCompliancePolicySettingStateSummaries.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceCompliancePolicySettingStateSummaryItemRequestBuilder
    */
    public function deviceCompliancePolicySettingStateSummariesById(string $id): DeviceCompliancePolicySettingStateSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicySettingStateSummary%2Did'] = $id;
        return new DeviceCompliancePolicySettingStateSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.deviceConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceConfigurationItemRequestBuilder
    */
    public function deviceConfigurationsById(string $id): DeviceConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceConfiguration%2Did'] = $id;
        return new DeviceConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.deviceEnrollmentConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceEnrollmentConfigurationItemRequestBuilder
    */
    public function deviceEnrollmentConfigurationsById(string $id): DeviceEnrollmentConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceEnrollmentConfiguration%2Did'] = $id;
        return new DeviceEnrollmentConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.deviceManagementPartners.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementPartnerItemRequestBuilder
    */
    public function deviceManagementPartnersById(string $id): DeviceManagementPartnerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementPartner%2Did'] = $id;
        return new DeviceManagementPartnerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.exchangeConnectors.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementExchangeConnectorItemRequestBuilder
    */
    public function exchangeConnectorsById(string $id): DeviceManagementExchangeConnectorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementExchangeConnector%2Did'] = $id;
        return new DeviceManagementExchangeConnectorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get deviceManagement
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DeviceManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(DeviceManagement::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
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
     * Gets an item from the Microsoft\Graph.deviceManagement.importedWindowsAutopilotDeviceIdentities.item collection
     * @param string $id Unique identifier of the item
     * @return ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder
    */
    public function importedWindowsAutopilotDeviceIdentitiesById(string $id): ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['importedWindowsAutopilotDeviceIdentity%2Did'] = $id;
        return new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.iosUpdateStatuses.item collection
     * @param string $id Unique identifier of the item
     * @return IosUpdateDeviceStatusItemRequestBuilder
    */
    public function iosUpdateStatusesById(string $id): IosUpdateDeviceStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['iosUpdateDeviceStatus%2Did'] = $id;
        return new IosUpdateDeviceStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.managedDevices.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceItemRequestBuilder
    */
    public function managedDevicesById(string $id): ManagedDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDevice%2Did'] = $id;
        return new ManagedDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.mobileThreatDefenseConnectors.item collection
     * @param string $id Unique identifier of the item
     * @return MobileThreatDefenseConnectorItemRequestBuilder
    */
    public function mobileThreatDefenseConnectorsById(string $id): MobileThreatDefenseConnectorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileThreatDefenseConnector%2Did'] = $id;
        return new MobileThreatDefenseConnectorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.notificationMessageTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return NotificationMessageTemplateItemRequestBuilder
    */
    public function notificationMessageTemplatesById(string $id): NotificationMessageTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['notificationMessageTemplate%2Did'] = $id;
        return new NotificationMessageTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update deviceManagement
     * @param DeviceManagement $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DeviceManagement $body, ?DeviceManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.remoteAssistancePartners.item collection
     * @param string $id Unique identifier of the item
     * @return RemoteAssistancePartnerItemRequestBuilder
    */
    public function remoteAssistancePartnersById(string $id): RemoteAssistancePartnerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['remoteAssistancePartner%2Did'] = $id;
        return new RemoteAssistancePartnerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.resourceOperations.item collection
     * @param string $id Unique identifier of the item
     * @return ResourceOperationItemRequestBuilder
    */
    public function resourceOperationsById(string $id): ResourceOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceOperation%2Did'] = $id;
        return new ResourceOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.roleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceAndAppManagementRoleAssignmentItemRequestBuilder
    */
    public function roleAssignmentsById(string $id): DeviceAndAppManagementRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceAndAppManagementRoleAssignment%2Did'] = $id;
        return new DeviceAndAppManagementRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.roleDefinitions.item collection
     * @param string $id Unique identifier of the item
     * @return RoleDefinitionItemRequestBuilder
    */
    public function roleDefinitionsById(string $id): RoleDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['roleDefinition%2Did'] = $id;
        return new RoleDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.telecomExpenseManagementPartners.item collection
     * @param string $id Unique identifier of the item
     * @return TelecomExpenseManagementPartnerItemRequestBuilder
    */
    public function telecomExpenseManagementPartnersById(string $id): TelecomExpenseManagementPartnerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['telecomExpenseManagementPartner%2Did'] = $id;
        return new TelecomExpenseManagementPartnerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.termsAndConditions.item collection
     * @param string $id Unique identifier of the item
     * @return TermsAndConditionsItemRequestBuilder
    */
    public function termsAndConditionsById(string $id): TermsAndConditionsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['termsAndConditions%2Did'] = $id;
        return new TermsAndConditionsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.troubleshootingEvents.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementTroubleshootingEventItemRequestBuilder
    */
    public function troubleshootingEventsById(string $id): DeviceManagementTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementTroubleshootingEvent%2Did'] = $id;
        return new DeviceManagementTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * Gets an item from the Microsoft\Graph.deviceManagement.windowsAutopilotDeviceIdentities.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsAutopilotDeviceIdentityItemRequestBuilder
    */
    public function windowsAutopilotDeviceIdentitiesById(string $id): WindowsAutopilotDeviceIdentityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsAutopilotDeviceIdentity%2Did'] = $id;
        return new WindowsAutopilotDeviceIdentityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.windowsInformationProtectionAppLearningSummaries.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionAppLearningSummaryItemRequestBuilder
    */
    public function windowsInformationProtectionAppLearningSummariesById(string $id): WindowsInformationProtectionAppLearningSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionAppLearningSummary%2Did'] = $id;
        return new WindowsInformationProtectionAppLearningSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.windowsInformationProtectionNetworkLearningSummaries.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilder
    */
    public function windowsInformationProtectionNetworkLearningSummariesById(string $id): WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionNetworkLearningSummary%2Did'] = $id;
        return new WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
