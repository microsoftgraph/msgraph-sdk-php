<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies\Item\WindowsInformationProtectionPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WindowsInformationProtectionPolicy;
use Microsoft\Graph\Generated\Models\WindowsInformationProtectionPolicyCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
*/
class WindowsInformationProtectionPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
     * @param string $windowsInformationProtectionPolicyId The unique identifier of windowsInformationProtectionPolicy
     * @return WindowsInformationProtectionPolicyItemRequestBuilder
    */
    public function byWindowsInformationProtectionPolicyId(string $windowsInformationProtectionPolicyId): WindowsInformationProtectionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionPolicy%2Did'] = $windowsInformationProtectionPolicyId;
        return new WindowsInformationProtectionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WindowsInformationProtectionPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/windowsInformationProtectionPolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the windowsInformationProtectionPolicy objects.
     * @param WindowsInformationProtectionPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsInformationProtectionPolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-windowsinformationprotectionpolicy-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?WindowsInformationProtectionPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsInformationProtectionPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new windowsInformationProtectionPolicy object.
     * @param WindowsInformationProtectionPolicy $body The request body
     * @param WindowsInformationProtectionPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsInformationProtectionPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-windowsinformationprotectionpolicy-create?view=graph-rest-1.0 Find more info here
    */
    public function post(WindowsInformationProtectionPolicy $body, ?WindowsInformationProtectionPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsInformationProtectionPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the windowsInformationProtectionPolicy objects.
     * @param WindowsInformationProtectionPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsInformationProtectionPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new windowsInformationProtectionPolicy object.
     * @param WindowsInformationProtectionPolicy $body The request body
     * @param WindowsInformationProtectionPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WindowsInformationProtectionPolicy $body, ?WindowsInformationProtectionPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return WindowsInformationProtectionPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsInformationProtectionPoliciesRequestBuilder {
        return new WindowsInformationProtectionPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
