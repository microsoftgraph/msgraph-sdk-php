<?php

namespace Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\GraphExternalUsersSelfServiceSignUpEventsFlow;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\GraphExternalUsersSelfServiceSignUpEventsFlow\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Models\ExternalUsersSelfServiceSignUpEventsFlowCollectionResponse;
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
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/authenticationEventsFlows/graph.externalUsersSelfServiceSignUpEventsFlow{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the items of type microsoft.graph.externalUsersSelfServiceSignUpEventsFlow in the microsoft.graph.authenticationEventsFlow collection
     * @param GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalUsersSelfServiceSignUpEventsFlowCollectionResponse|null>
     * @throws Exception
    */
    public function get(?GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalUsersSelfServiceSignUpEventsFlowCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the items of type microsoft.graph.externalUsersSelfServiceSignUpEventsFlow in the microsoft.graph.authenticationEventsFlow collection
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
