<?php

namespace Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\Conditions\ConditionsRequestBuilder;
use Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\OnAttributeCollection\OnAttributeCollectionRequestBuilder;
use Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart\OnAuthenticationMethodLoadStartRequestBuilder;
use Microsoft\Graph\Generated\Models\ExternalUsersSelfServiceSignUpEventsFlow;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Casts the previous resource to externalUsersSelfServiceSignUpEventsFlow.
*/
class GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The conditions property
    */
    public function conditions(): ConditionsRequestBuilder {
        return new ConditionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The onAttributeCollection property
    */
    public function onAttributeCollection(): OnAttributeCollectionRequestBuilder {
        return new OnAttributeCollectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The onAuthenticationMethodLoadStart property
    */
    public function onAuthenticationMethodLoadStart(): OnAuthenticationMethodLoadStartRequestBuilder {
        return new OnAuthenticationMethodLoadStartRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/authenticationEventsFlows/{authenticationEventsFlow%2Did}/graph.externalUsersSelfServiceSignUpEventsFlow{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the item of type microsoft.graph.authenticationEventsFlow as microsoft.graph.externalUsersSelfServiceSignUpEventsFlow
     * @param GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalUsersSelfServiceSignUpEventsFlow|null>
     * @throws Exception
    */
    public function get(?GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalUsersSelfServiceSignUpEventsFlow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the item of type microsoft.graph.authenticationEventsFlow as microsoft.graph.externalUsersSelfServiceSignUpEventsFlow
     * @param GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder
    */
    public function withUrl(string $rawUrl): GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder {
        return new GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
