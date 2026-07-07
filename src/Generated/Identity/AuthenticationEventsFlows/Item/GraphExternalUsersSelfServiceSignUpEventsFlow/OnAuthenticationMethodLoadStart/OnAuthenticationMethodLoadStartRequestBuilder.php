<?php

namespace Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart\GraphOnAuthenticationMethodLoadStartExternalUsersSelfSe_495b9e69\GraphOnAuthenticationMethodLoadStartExternalUsersSelfSe_42e72155;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OnAuthenticationMethodLoadStartHandler;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /identity/authenticationEventsFlows/{authenticationEventsFlow-id}/graph.externalUsersSelfServiceSignUpEventsFlow/onAuthenticationMethodLoadStart
*/
class OnAuthenticationMethodLoadStartRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Casts the previous resource to onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp.
    */
    public function graphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp(): GraphOnAuthenticationMethodLoadStartExternalUsersSelfSe_42e72155 {
        return new GraphOnAuthenticationMethodLoadStartExternalUsersSelfSe_42e72155($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new OnAuthenticationMethodLoadStartRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/authenticationEventsFlows/{authenticationEventsFlow%2Did}/graph.externalUsersSelfServiceSignUpEventsFlow/onAuthenticationMethodLoadStart{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Required. The configuration for what to invoke when authentication methods are ready to be presented to the user. Must have at least one identity provider linked.  Supports $filter (eq). See support for filtering on user flows for syntax information.
     * @param OnAuthenticationMethodLoadStartRequestBuilderGetRequest_edad32a6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnAuthenticationMethodLoadStartHandler|null>
     * @throws Exception
    */
    public function get(?OnAuthenticationMethodLoadStartRequestBuilderGetRequest_edad32a6 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnAuthenticationMethodLoadStartHandler::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Required. The configuration for what to invoke when authentication methods are ready to be presented to the user. Must have at least one identity provider linked.  Supports $filter (eq). See support for filtering on user flows for syntax information.
     * @param OnAuthenticationMethodLoadStartRequestBuilderGetRequest_edad32a6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnAuthenticationMethodLoadStartRequestBuilderGetRequest_edad32a6 $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return OnAuthenticationMethodLoadStartRequestBuilder
    */
    public function withUrl(string $rawUrl): OnAuthenticationMethodLoadStartRequestBuilder {
        return new OnAuthenticationMethodLoadStartRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
