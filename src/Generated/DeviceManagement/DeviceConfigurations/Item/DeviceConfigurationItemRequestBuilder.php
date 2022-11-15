<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\Assignments\Item\DeviceConfigurationAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\DeviceSettingStateSummaries\DeviceSettingStateSummariesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\DeviceSettingStateSummaries\Item\SettingStateDeviceSummaryItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\DeviceStatuses\DeviceStatusesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\DeviceStatuses\Item\DeviceConfigurationDeviceStatusItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\DeviceStatusOverview\DeviceStatusOverviewRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\GetOmaSettingPlainTextValueWithSecretReferenceValueId\GetOmaSettingPlainTextValueWithSecretReferenceValueIdRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\UserStatuses\Item\DeviceConfigurationUserStatusItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\UserStatuses\UserStatusesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\UserStatusOverview\UserStatusOverviewRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceConfiguration;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceConfigurationItemRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.deviceConfiguration entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceSettingStateSummaries property of the microsoft.graph.deviceConfiguration entity.
    */
    public function deviceSettingStateSummaries(): DeviceSettingStateSummariesRequestBuilder {
        return new DeviceSettingStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStatuses property of the microsoft.graph.deviceConfiguration entity.
    */
    public function deviceStatuses(): DeviceStatusesRequestBuilder {
        return new DeviceStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStatusOverview property of the microsoft.graph.deviceConfiguration entity.
    */
    public function deviceStatusOverview(): DeviceStatusOverviewRequestBuilder {
        return new DeviceStatusOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the userStatuses property of the microsoft.graph.deviceConfiguration entity.
    */
    public function userStatuses(): UserStatusesRequestBuilder {
        return new UserStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userStatusOverview property of the microsoft.graph.deviceConfiguration entity.
    */
    public function userStatusOverview(): UserStatusOverviewRequestBuilder {
        return new UserStatusOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.deviceConfiguration entity.
     * @param string $id Unique identifier of the item
     * @return DeviceConfigurationAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): DeviceConfigurationAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceConfigurationAssignment%2Did'] = $id;
        return new DeviceConfigurationAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/deviceConfigurations/{deviceConfiguration%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property deviceConfigurations for deviceManagement
     * @param DeviceConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?DeviceConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The device configurations.
     * @param DeviceConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?DeviceConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property deviceConfigurations in deviceManagement
     * @param DeviceConfiguration $body 
     * @param DeviceConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DeviceConfiguration $body, ?DeviceConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Delete navigation property deviceConfigurations for deviceManagement
     * @param DeviceConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?DeviceConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the deviceSettingStateSummaries property of the microsoft.graph.deviceConfiguration entity.
     * @param string $id Unique identifier of the item
     * @return SettingStateDeviceSummaryItemRequestBuilder
    */
    public function deviceSettingStateSummariesById(string $id): SettingStateDeviceSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['settingStateDeviceSummary%2Did'] = $id;
        return new SettingStateDeviceSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the deviceStatuses property of the microsoft.graph.deviceConfiguration entity.
     * @param string $id Unique identifier of the item
     * @return DeviceConfigurationDeviceStatusItemRequestBuilder
    */
    public function deviceStatusesById(string $id): DeviceConfigurationDeviceStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceConfigurationDeviceStatus%2Did'] = $id;
        return new DeviceConfigurationDeviceStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The device configurations.
     * @param DeviceConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DeviceConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfiguration::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getOmaSettingPlainTextValue method.
     * @param string $secretReferenceValueId Usage: secretReferenceValueId='{secretReferenceValueId}'
     * @return GetOmaSettingPlainTextValueWithSecretReferenceValueIdRequestBuilder
    */
    public function getOmaSettingPlainTextValueWithSecretReferenceValueId(string $secretReferenceValueId): GetOmaSettingPlainTextValueWithSecretReferenceValueIdRequestBuilder {
        return new GetOmaSettingPlainTextValueWithSecretReferenceValueIdRequestBuilder($this->pathParameters, $this->requestAdapter, $secretReferenceValueId);
    }

    /**
     * Update the navigation property deviceConfigurations in deviceManagement
     * @param DeviceConfiguration $body 
     * @param DeviceConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DeviceConfiguration $body, ?DeviceConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfiguration::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the userStatuses property of the microsoft.graph.deviceConfiguration entity.
     * @param string $id Unique identifier of the item
     * @return DeviceConfigurationUserStatusItemRequestBuilder
    */
    public function userStatusesById(string $id): DeviceConfigurationUserStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceConfigurationUserStatus%2Did'] = $id;
        return new DeviceConfigurationUserStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
