<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationStrength\AuthenticationMethodModes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationStrength\AuthenticationMethodModes\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationStrength\AuthenticationMethodModes\Item\AuthenticationMethodModeDetailItemRequestBuilder;
use Microsoft\Graph\Generated\Models\AuthenticationMethodModeDetail;
use Microsoft\Graph\Generated\Models\AuthenticationMethodModeDetailCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authenticationMethodModes property of the microsoft.graph.authenticationStrengthRoot entity.
*/
class AuthenticationMethodModesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationMethodModes property of the microsoft.graph.authenticationStrengthRoot entity.
     * @param string $authenticationMethodModeDetailId The unique identifier of authenticationMethodModeDetail
     * @return AuthenticationMethodModeDetailItemRequestBuilder
    */
    public function byAuthenticationMethodModeDetailId(string $authenticationMethodModeDetailId): AuthenticationMethodModeDetailItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationMethodModeDetail%2Did'] = $authenticationMethodModeDetailId;
        return new AuthenticationMethodModeDetailItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AuthenticationMethodModesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/conditionalAccess/authenticationStrength/authenticationMethodModes{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of all supported authentication methods, or all supported authentication method combinations as a list of authenticationMethodModes objects and their properties. This API is available in the following national cloud deployments.
     * @param AuthenticationMethodModesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationMethodModeDetailCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationstrengthroot-list-authenticationmethodmodes?view=graph-rest-1.0 Find more info here
    */
    public function get(?AuthenticationMethodModesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationMethodModeDetailCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to authenticationMethodModes for identity
     * @param AuthenticationMethodModeDetail $body The request body
     * @param AuthenticationMethodModesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationMethodModeDetail|null>
     * @throws Exception
    */
    public function post(AuthenticationMethodModeDetail $body, ?AuthenticationMethodModesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationMethodModeDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of all supported authentication methods, or all supported authentication method combinations as a list of authenticationMethodModes objects and their properties. This API is available in the following national cloud deployments.
     * @param AuthenticationMethodModesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationMethodModesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to authenticationMethodModes for identity
     * @param AuthenticationMethodModeDetail $body The request body
     * @param AuthenticationMethodModesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AuthenticationMethodModeDetail $body, ?AuthenticationMethodModesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AuthenticationMethodModesRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationMethodModesRequestBuilder {
        return new AuthenticationMethodModesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
