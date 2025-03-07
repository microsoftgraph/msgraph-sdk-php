<?php

namespace Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\OnAttributeCollection\GraphOnAttributeCollectionExternalUsersSelfServiceSignUp;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\OnAttributeCollection\GraphOnAttributeCollectionExternalUsersSelfServiceSignUp\Attributes\AttributesRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OnAttributeCollectionExternalUsersSelfServiceSignUp;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Casts the previous resource to onAttributeCollectionExternalUsersSelfServiceSignUp.
*/
class GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the attributes property of the microsoft.graph.onAttributeCollectionExternalUsersSelfServiceSignUp entity.
    */
    public function attributes(): AttributesRequestBuilder {
        return new AttributesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/authenticationEventsFlows/{authenticationEventsFlow%2Did}/graph.externalUsersSelfServiceSignUpEventsFlow/onAttributeCollection/graph.onAttributeCollectionExternalUsersSelfServiceSignUp');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the item of type microsoft.graph.onAttributeCollectionHandler as microsoft.graph.onAttributeCollectionExternalUsersSelfServiceSignUp
     * @param GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnAttributeCollectionExternalUsersSelfServiceSignUp|null>
     * @throws Exception
    */
    public function get(?GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnAttributeCollectionExternalUsersSelfServiceSignUp::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the item of type microsoft.graph.onAttributeCollectionHandler as microsoft.graph.onAttributeCollectionExternalUsersSelfServiceSignUp
     * @param GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilder
    */
    public function withUrl(string $rawUrl): GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilder {
        return new GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
