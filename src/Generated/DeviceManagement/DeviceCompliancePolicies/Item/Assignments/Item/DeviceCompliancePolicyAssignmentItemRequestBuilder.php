<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\Assignments\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DeviceCompliancePolicyAssignment;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignments property of the microsoft.graph.deviceCompliancePolicy entity.
*/
class DeviceCompliancePolicyAssignmentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceCompliancePolicyAssignmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceCompliancePolicies/{deviceCompliancePolicy%2Did}/assignments/{deviceCompliancePolicyAssignment%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a deviceCompliancePolicyAssignment.
     * @param DeviceCompliancePolicyAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancepolicyassignment-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DeviceCompliancePolicyAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the deviceCompliancePolicyAssignment object.
     * @param DeviceCompliancePolicyAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceCompliancePolicyAssignment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancepolicyassignment-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DeviceCompliancePolicyAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceCompliancePolicyAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a deviceCompliancePolicyAssignment object.
     * @param DeviceCompliancePolicyAssignment $body The request body
     * @param DeviceCompliancePolicyAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceCompliancePolicyAssignment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancepolicyassignment-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(DeviceCompliancePolicyAssignment $body, ?DeviceCompliancePolicyAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceCompliancePolicyAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a deviceCompliancePolicyAssignment.
     * @param DeviceCompliancePolicyAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceCompliancePolicyAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read properties and relationships of the deviceCompliancePolicyAssignment object.
     * @param DeviceCompliancePolicyAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceCompliancePolicyAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a deviceCompliancePolicyAssignment object.
     * @param DeviceCompliancePolicyAssignment $body The request body
     * @param DeviceCompliancePolicyAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceCompliancePolicyAssignment $body, ?DeviceCompliancePolicyAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceCompliancePolicyAssignmentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceCompliancePolicyAssignmentItemRequestBuilder {
        return new DeviceCompliancePolicyAssignmentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
