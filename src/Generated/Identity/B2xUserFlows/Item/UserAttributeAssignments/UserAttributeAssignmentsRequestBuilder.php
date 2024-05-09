<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\GetOrder\GetOrderRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\Item\IdentityUserFlowAttributeAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\SetOrder\SetOrderRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityUserFlowAttributeAssignment;
use Microsoft\Graph\Generated\Models\IdentityUserFlowAttributeAssignmentCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userAttributeAssignments property of the microsoft.graph.b2xIdentityUserFlow entity.
*/
class UserAttributeAssignmentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOrder method.
    */
    public function getOrder(): GetOrderRequestBuilder {
        return new GetOrderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setOrder method.
    */
    public function setOrder(): SetOrderRequestBuilder {
        return new SetOrderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userAttributeAssignments property of the microsoft.graph.b2xIdentityUserFlow entity.
     * @param string $identityUserFlowAttributeAssignmentId The unique identifier of identityUserFlowAttributeAssignment
     * @return IdentityUserFlowAttributeAssignmentItemRequestBuilder
    */
    public function byIdentityUserFlowAttributeAssignmentId(string $identityUserFlowAttributeAssignmentId): IdentityUserFlowAttributeAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityUserFlowAttributeAssignment%2Did'] = $identityUserFlowAttributeAssignmentId;
        return new IdentityUserFlowAttributeAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserAttributeAssignmentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/b2xUserFlows/{b2xIdentityUserFlow%2Did}/userAttributeAssignments{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the identityUserFlowAttributeAssignment resources from the userAttributeAssignments navigation property in a b2xIdentityUserFlow.
     * @param UserAttributeAssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityUserFlowAttributeAssignmentCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/b2xidentityuserflow-list-userattributeassignments?view=graph-rest-1.0 Find more info here
    */
    public function get(?UserAttributeAssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityUserFlowAttributeAssignmentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new identityUserFlowAttributeAssignment object in a b2xIdentityUserFlow.
     * @param IdentityUserFlowAttributeAssignment $body The request body
     * @param UserAttributeAssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityUserFlowAttributeAssignment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/b2xidentityuserflow-post-userattributeassignments?view=graph-rest-1.0 Find more info here
    */
    public function post(IdentityUserFlowAttributeAssignment $body, ?UserAttributeAssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityUserFlowAttributeAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the identityUserFlowAttributeAssignment resources from the userAttributeAssignments navigation property in a b2xIdentityUserFlow.
     * @param UserAttributeAssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserAttributeAssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new identityUserFlowAttributeAssignment object in a b2xIdentityUserFlow.
     * @param IdentityUserFlowAttributeAssignment $body The request body
     * @param UserAttributeAssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(IdentityUserFlowAttributeAssignment $body, ?UserAttributeAssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserAttributeAssignmentsRequestBuilder
    */
    public function withUrl(string $rawUrl): UserAttributeAssignmentsRequestBuilder {
        return new UserAttributeAssignmentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
