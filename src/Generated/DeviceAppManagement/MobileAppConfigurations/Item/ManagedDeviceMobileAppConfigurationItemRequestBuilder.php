<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\Assignments\Item\ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\DeviceStatuses\DeviceStatusesRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\DeviceStatuses\Item\ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\DeviceStatusSummary\DeviceStatusSummaryRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\UserStatuses\Item\ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\UserStatuses\UserStatusesRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\UserStatusSummary\UserStatusSummaryRequestBuilder;
use Microsoft\Graph\Generated\Models\ManagedDeviceMobileAppConfiguration;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ManagedDeviceMobileAppConfigurationItemRequestBuilder 
{
    /**
     * The assign property
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The assignments property
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceStatuses property
    */
    public function deviceStatuses(): DeviceStatusesRequestBuilder {
        return new DeviceStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceStatusSummary property
    */
    public function deviceStatusSummary(): DeviceStatusSummaryRequestBuilder {
        return new DeviceStatusSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The userStatuses property
    */
    public function userStatuses(): UserStatusesRequestBuilder {
        return new UserStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The userStatusSummary property
    */
    public function userStatusSummary(): UserStatusSummaryRequestBuilder {
        return new UserStatusSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.deviceAppManagement.mobileAppConfigurations.item.assignments.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfigurationAssignment%2Did'] = $id;
        return new ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement/mobileAppConfigurations/{managedDeviceMobileAppConfiguration%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property mobileAppConfigurations for deviceAppManagement
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ManagedDeviceMobileAppConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The Managed Device Mobile Application Configurations.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ManagedDeviceMobileAppConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property mobileAppConfigurations in deviceAppManagement
     * @param ManagedDeviceMobileAppConfiguration $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ManagedDeviceMobileAppConfiguration $body, ?ManagedDeviceMobileAppConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Delete navigation property mobileAppConfigurations for deviceAppManagement
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ManagedDeviceMobileAppConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
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
     * Gets an item from the Microsoft\Graph\Generated.deviceAppManagement.mobileAppConfigurations.item.deviceStatuses.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder
    */
    public function deviceStatusesById(string $id): ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfigurationDeviceStatus%2Did'] = $id;
        return new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The Managed Device Mobile Application Configurations.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ManagedDeviceMobileAppConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(ManagedDeviceMobileAppConfiguration::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property mobileAppConfigurations in deviceAppManagement
     * @param ManagedDeviceMobileAppConfiguration $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ManagedDeviceMobileAppConfiguration $body, ?ManagedDeviceMobileAppConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph\Generated.deviceAppManagement.mobileAppConfigurations.item.userStatuses.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilder
    */
    public function userStatusesById(string $id): ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfigurationUserStatus%2Did'] = $id;
        return new ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
