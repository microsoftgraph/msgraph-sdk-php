<?php

namespace Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart\GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart\GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Casts the previous resource to onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp.
*/
class GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the identityProviders property of the microsoft.graph.onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp entity.
    */
    public function identityProviders(): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/authenticationEventsFlows/{authenticationEventsFlow%2Did}/graph.externalUsersSelfServiceSignUpEventsFlow/onAuthenticationMethodLoadStart/graph.onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the items of type microsoft.graph.onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp in the microsoft.graph.onAuthenticationMethodLoadStartHandler collection
     * @param GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function get(?GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get the items of type microsoft.graph.onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp in the microsoft.graph.onAuthenticationMethodLoadStartHandler collection
     * @param GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilder
    */
    public function withUrl(string $rawUrl): GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilder {
        return new GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
