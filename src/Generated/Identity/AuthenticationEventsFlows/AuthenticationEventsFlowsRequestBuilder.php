<?php

namespace Microsoft\\Graph\\Generated\Identity\AuthenticationEventsFlows;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Identity\AuthenticationEventsFlows\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Identity\AuthenticationEventsFlows\GraphExternalUsersSelfServiceSignUpEventsFlow\GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder;
use Microsoft\\Graph\\Generated\Identity\AuthenticationEventsFlows\Item\AuthenticationEventsFlowItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\AuthenticationEventsFlow;
use Microsoft\\Graph\\Generated\Models\AuthenticationEventsFlowCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authenticationEventsFlows property of the microsoft.graph.identityContainer entity.
*/
class AuthenticationEventsFlowsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to externalUsersSelfServiceSignUpEventsFlow.
    */
    public function graphExternalUsersSelfServiceSignUpEventsFlow(): GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder {
        return new GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationEventsFlows property of the microsoft.graph.identityContainer entity.
     * @param string $authenticationEventsFlowId The unique identifier of authenticationEventsFlow
     * @return AuthenticationEventsFlowItemRequestBuilder
    */
    public function byAuthenticationEventsFlowId(string $authenticationEventsFlowId): AuthenticationEventsFlowItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationEventsFlow%2Did'] = $authenticationEventsFlowId;
        return new AuthenticationEventsFlowItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AuthenticationEventsFlowsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/authenticationEventsFlows{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a collection of authentication events policies that are derived from authenticationEventsFlow. The following derived subtypes are supported: - externalUsersSelfServiceSignupEventsFlow
     * @param AuthenticationEventsFlowsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationEventsFlowCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitycontainer-list-authenticationeventsflows?view=graph-rest-1.0 Find more info here
    */
    public function get(?AuthenticationEventsFlowsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationEventsFlowCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new authenticationEventsFlow object that is of the type specified in the request body. The following derived subtypes are supported:- externalUsersSelfServiceSignupEventsFlow object type.
     * @param AuthenticationEventsFlow $body The request body
     * @param AuthenticationEventsFlowsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationEventsFlow|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitycontainer-post-authenticationeventsflows?view=graph-rest-1.0 Find more info here
    */
    public function post(AuthenticationEventsFlow $body, ?AuthenticationEventsFlowsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationEventsFlow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a collection of authentication events policies that are derived from authenticationEventsFlow. The following derived subtypes are supported: - externalUsersSelfServiceSignupEventsFlow
     * @param AuthenticationEventsFlowsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationEventsFlowsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new authenticationEventsFlow object that is of the type specified in the request body. The following derived subtypes are supported:- externalUsersSelfServiceSignupEventsFlow object type.
     * @param AuthenticationEventsFlow $body The request body
     * @param AuthenticationEventsFlowsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AuthenticationEventsFlow $body, ?AuthenticationEventsFlowsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AuthenticationEventsFlowsRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationEventsFlowsRequestBuilder {
        return new AuthenticationEventsFlowsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
