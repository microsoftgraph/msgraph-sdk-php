<?php

namespace Microsoft\\Graph\\Generated\Identity\RiskPrevention\FraudProtectionProviders;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Identity\RiskPrevention\FraudProtectionProviders\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Identity\RiskPrevention\FraudProtectionProviders\Item\FraudProtectionProviderItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\FraudProtectionProvider;
use Microsoft\\Graph\\Generated\Models\FraudProtectionProviderCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the fraudProtectionProviders property of the microsoft.graph.riskPreventionContainer entity.
*/
class FraudProtectionProvidersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the fraudProtectionProviders property of the microsoft.graph.riskPreventionContainer entity.
     * @param string $fraudProtectionProviderId The unique identifier of fraudProtectionProvider
     * @return FraudProtectionProviderItemRequestBuilder
    */
    public function byFraudProtectionProviderId(string $fraudProtectionProviderId): FraudProtectionProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fraudProtectionProvider%2Did'] = $fraudProtectionProviderId;
        return new FraudProtectionProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FraudProtectionProvidersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/riskPrevention/fraudProtectionProviders{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the fraudProtectionProvider object and their properties. The following derived types are supported:
     * @param FraudProtectionProvidersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FraudProtectionProviderCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/riskpreventioncontainer-list-fraudprotectionproviders?view=graph-rest-1.0 Find more info here
    */
    public function get(?FraudProtectionProvidersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FraudProtectionProviderCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new fraudProtectionProvider object. You can create one of the following subtypes that are derived from fraudProtectionProvider.
     * @param FraudProtectionProvider $body The request body
     * @param FraudProtectionProvidersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FraudProtectionProvider|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/riskpreventioncontainer-post-fraudprotectionproviders?view=graph-rest-1.0 Find more info here
    */
    public function post(FraudProtectionProvider $body, ?FraudProtectionProvidersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FraudProtectionProvider::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the fraudProtectionProvider object and their properties. The following derived types are supported:
     * @param FraudProtectionProvidersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FraudProtectionProvidersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new fraudProtectionProvider object. You can create one of the following subtypes that are derived from fraudProtectionProvider.
     * @param FraudProtectionProvider $body The request body
     * @param FraudProtectionProvidersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FraudProtectionProvider $body, ?FraudProtectionProvidersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FraudProtectionProvidersRequestBuilder
    */
    public function withUrl(string $rawUrl): FraudProtectionProvidersRequestBuilder {
        return new FraudProtectionProvidersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
