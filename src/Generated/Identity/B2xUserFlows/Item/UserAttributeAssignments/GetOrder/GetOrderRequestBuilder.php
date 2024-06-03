<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\GetOrder;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AssignmentOrder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getOrder method.
*/
class GetOrderRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetOrderRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/b2xUserFlows/{b2xIdentityUserFlow%2Did}/userAttributeAssignments/getOrder()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the order of identityUserFlowAttributeAssignments being collected within a user flow.
     * @param GetOrderRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AssignmentOrder|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityuserflowattributeassignment-getorder?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetOrderRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AssignmentOrder::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the order of identityUserFlowAttributeAssignments being collected within a user flow.
     * @param GetOrderRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetOrderRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetOrderRequestBuilder
    */
    public function withUrl(string $rawUrl): GetOrderRequestBuilder {
        return new GetOrderRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
