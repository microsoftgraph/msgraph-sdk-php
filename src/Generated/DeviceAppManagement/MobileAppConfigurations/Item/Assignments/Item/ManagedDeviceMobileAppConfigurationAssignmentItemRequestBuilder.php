<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\Assignments\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ManagedDeviceMobileAppConfigurationAssignment;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignments property of the microsoft.graph.managedDeviceMobileAppConfiguration entity.
*/
class ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/mobileAppConfigurations/{managedDeviceMobileAppConfiguration%2Did}/assignments/{managedDeviceMobileAppConfigurationAssignment%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a managedDeviceMobileAppConfigurationAssignment.
     * @param ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-apps-manageddevicemobileappconfigurationassignment-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the managedDeviceMobileAppConfigurationAssignment object.
     * @param ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceMobileAppConfigurationAssignment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-apps-manageddevicemobileappconfigurationassignment-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceMobileAppConfigurationAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a managedDeviceMobileAppConfigurationAssignment object.
     * @param ManagedDeviceMobileAppConfigurationAssignment $body The request body
     * @param ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceMobileAppConfigurationAssignment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-apps-manageddevicemobileappconfigurationassignment-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(ManagedDeviceMobileAppConfigurationAssignment $body, ?ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceMobileAppConfigurationAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a managedDeviceMobileAppConfigurationAssignment.
     * @param ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Read properties and relationships of the managedDeviceMobileAppConfigurationAssignment object.
     * @param ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a managedDeviceMobileAppConfigurationAssignment object.
     * @param ManagedDeviceMobileAppConfigurationAssignment $body The request body
     * @param ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ManagedDeviceMobileAppConfigurationAssignment $body, ?ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilder {
        return new ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
