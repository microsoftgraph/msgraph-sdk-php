<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\DeviceAppManagement\AndroidManagedAppProtections\AndroidManagedAppProtectionsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\AndroidManagedAppProtections\Item\AndroidManagedAppProtectionItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\DefaultManagedAppProtections\DefaultManagedAppProtectionsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\DefaultManagedAppProtections\Item\DefaultManagedAppProtectionItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\IosManagedAppProtections\IosManagedAppProtectionsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\IosManagedAppProtections\Item\IosManagedAppProtectionItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppPolicies\Item\ManagedAppPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppPolicies\ManagedAppPoliciesRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppRegistrations\Item\ManagedAppRegistrationItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppRegistrations\ManagedAppRegistrationsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppStatuses\Item\ManagedAppStatusItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppStatuses\ManagedAppStatusesRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\ManagedEBooks\Item\ManagedEBookItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\ManagedEBooks\ManagedEBooksRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\Item\MdmWindowsInformationProtectionPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\MdmWindowsInformationProtectionPoliciesRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppCategories\Item\MobileAppCategoryItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppCategories\MobileAppCategoriesRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\ManagedDeviceMobileAppConfigurationItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\MobileAppConfigurationsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\MobileAppItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\MobileAppsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\SyncMicrosoftStoreForBusinessApps\SyncMicrosoftStoreForBusinessAppsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\TargetedManagedAppConfigurationItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\TargetedManagedAppConfigurationsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\VppTokens\Item\VppTokenItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\VppTokens\VppTokensRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies\Item\WindowsInformationProtectionPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies\WindowsInformationProtectionPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceAppManagement;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceAppManagementRequestBuilder 
{
    /**
     * Provides operations to manage the androidManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
    */
    public function androidManagedAppProtections(): AndroidManagedAppProtectionsRequestBuilder {
        return new AndroidManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the defaultManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
    */
    public function defaultManagedAppProtections(): DefaultManagedAppProtectionsRequestBuilder {
        return new DefaultManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the iosManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
    */
    public function iosManagedAppProtections(): IosManagedAppProtectionsRequestBuilder {
        return new IosManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedAppPolicies property of the microsoft.graph.deviceAppManagement entity.
    */
    public function managedAppPolicies(): ManagedAppPoliciesRequestBuilder {
        return new ManagedAppPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedAppRegistrations property of the microsoft.graph.deviceAppManagement entity.
    */
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder {
        return new ManagedAppRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedAppStatuses property of the microsoft.graph.deviceAppManagement entity.
    */
    public function managedAppStatuses(): ManagedAppStatusesRequestBuilder {
        return new ManagedAppStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedEBooks property of the microsoft.graph.deviceAppManagement entity.
    */
    public function managedEBooks(): ManagedEBooksRequestBuilder {
        return new ManagedEBooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mdmWindowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
    */
    public function mdmWindowsInformationProtectionPolicies(): MdmWindowsInformationProtectionPoliciesRequestBuilder {
        return new MdmWindowsInformationProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileAppCategories property of the microsoft.graph.deviceAppManagement entity.
    */
    public function mobileAppCategories(): MobileAppCategoriesRequestBuilder {
        return new MobileAppCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileAppConfigurations property of the microsoft.graph.deviceAppManagement entity.
    */
    public function mobileAppConfigurations(): MobileAppConfigurationsRequestBuilder {
        return new MobileAppConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileApps property of the microsoft.graph.deviceAppManagement entity.
    */
    public function mobileApps(): MobileAppsRequestBuilder {
        return new MobileAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to call the syncMicrosoftStoreForBusinessApps method.
    */
    public function syncMicrosoftStoreForBusinessApps(): SyncMicrosoftStoreForBusinessAppsRequestBuilder {
        return new SyncMicrosoftStoreForBusinessAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the targetedManagedAppConfigurations property of the microsoft.graph.deviceAppManagement entity.
    */
    public function targetedManagedAppConfigurations(): TargetedManagedAppConfigurationsRequestBuilder {
        return new TargetedManagedAppConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the vppTokens property of the microsoft.graph.deviceAppManagement entity.
    */
    public function vppTokens(): VppTokensRequestBuilder {
        return new VppTokensRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
    */
    public function windowsInformationProtectionPolicies(): WindowsInformationProtectionPoliciesRequestBuilder {
        return new WindowsInformationProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the androidManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return AndroidManagedAppProtectionItemRequestBuilder
    */
    public function androidManagedAppProtectionsById(string $id): AndroidManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['androidManagedAppProtection%2Did'] = $id;
        return new AndroidManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceAppManagementRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get deviceAppManagement
     * @param DeviceAppManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?DeviceAppManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
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
     * Update deviceAppManagement
     * @param DeviceAppManagement $body 
     * @param DeviceAppManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DeviceAppManagement $body, ?DeviceAppManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
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
     * Provides operations to manage the defaultManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return DefaultManagedAppProtectionItemRequestBuilder
    */
    public function defaultManagedAppProtectionsById(string $id): DefaultManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['defaultManagedAppProtection%2Did'] = $id;
        return new DefaultManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get deviceAppManagement
     * @param DeviceAppManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DeviceAppManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceAppManagement::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the iosManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return IosManagedAppProtectionItemRequestBuilder
    */
    public function iosManagedAppProtectionsById(string $id): IosManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['iosManagedAppProtection%2Did'] = $id;
        return new IosManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedAppPolicies property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return ManagedAppPolicyItemRequestBuilder
    */
    public function managedAppPoliciesById(string $id): ManagedAppPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppPolicy%2Did'] = $id;
        return new ManagedAppPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedAppRegistrations property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return ManagedAppRegistrationItemRequestBuilder
    */
    public function managedAppRegistrationsById(string $id): ManagedAppRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppRegistration%2Did'] = $id;
        return new ManagedAppRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedAppStatuses property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return ManagedAppStatusItemRequestBuilder
    */
    public function managedAppStatusesById(string $id): ManagedAppStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppStatus%2Did'] = $id;
        return new ManagedAppStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedEBooks property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return ManagedEBookItemRequestBuilder
    */
    public function managedEBooksById(string $id): ManagedEBookItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedEBook%2Did'] = $id;
        return new ManagedEBookItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mdmWindowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return MdmWindowsInformationProtectionPolicyItemRequestBuilder
    */
    public function mdmWindowsInformationProtectionPoliciesById(string $id): MdmWindowsInformationProtectionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mdmWindowsInformationProtectionPolicy%2Did'] = $id;
        return new MdmWindowsInformationProtectionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mobileAppCategories property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return MobileAppCategoryItemRequestBuilder
    */
    public function mobileAppCategoriesById(string $id): MobileAppCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppCategory%2Did'] = $id;
        return new MobileAppCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mobileAppConfigurations property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationItemRequestBuilder
    */
    public function mobileAppConfigurationsById(string $id): ManagedDeviceMobileAppConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfiguration%2Did'] = $id;
        return new ManagedDeviceMobileAppConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mobileApps property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return MobileAppItemRequestBuilder
    */
    public function mobileAppsById(string $id): MobileAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileApp%2Did'] = $id;
        return new MobileAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update deviceAppManagement
     * @param DeviceAppManagement $body 
     * @param DeviceAppManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DeviceAppManagement $body, ?DeviceAppManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceAppManagement::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the targetedManagedAppConfigurations property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return TargetedManagedAppConfigurationItemRequestBuilder
    */
    public function targetedManagedAppConfigurationsById(string $id): TargetedManagedAppConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['targetedManagedAppConfiguration%2Did'] = $id;
        return new TargetedManagedAppConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the vppTokens property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return VppTokenItemRequestBuilder
    */
    public function vppTokensById(string $id): VppTokenItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['vppToken%2Did'] = $id;
        return new VppTokenItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the windowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionPolicyItemRequestBuilder
    */
    public function windowsInformationProtectionPoliciesById(string $id): WindowsInformationProtectionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionPolicy%2Did'] = $id;
        return new WindowsInformationProtectionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
