<?php

namespace Microsoft\\Graph\\Generated\Identity\RiskPrevention\WebApplicationFirewallProviders;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Identity\RiskPrevention\WebApplicationFirewallProviders\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Identity\RiskPrevention\WebApplicationFirewallProviders\Item\WebApplicationFirewallProviderItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\WebApplicationFirewallProvider;
use Microsoft\\Graph\\Generated\Models\WebApplicationFirewallProviderCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the webApplicationFirewallProviders property of the microsoft.graph.riskPreventionContainer entity.
*/
class WebApplicationFirewallProvidersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the webApplicationFirewallProviders property of the microsoft.graph.riskPreventionContainer entity.
     * @param string $webApplicationFirewallProviderId The unique identifier of webApplicationFirewallProvider
     * @return WebApplicationFirewallProviderItemRequestBuilder
    */
    public function byWebApplicationFirewallProviderId(string $webApplicationFirewallProviderId): WebApplicationFirewallProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['webApplicationFirewallProvider%2Did'] = $webApplicationFirewallProviderId;
        return new WebApplicationFirewallProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WebApplicationFirewallProvidersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/riskPrevention/webApplicationFirewallProviders{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get webApplicationFirewallProviders from identity
     * @param WebApplicationFirewallProvidersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WebApplicationFirewallProviderCollectionResponse|null>
     * @throws Exception
    */
    public function get(?WebApplicationFirewallProvidersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WebApplicationFirewallProviderCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to webApplicationFirewallProviders for identity
     * @param WebApplicationFirewallProvider $body The request body
     * @param WebApplicationFirewallProvidersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WebApplicationFirewallProvider|null>
     * @throws Exception
    */
    public function post(WebApplicationFirewallProvider $body, ?WebApplicationFirewallProvidersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WebApplicationFirewallProvider::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get webApplicationFirewallProviders from identity
     * @param WebApplicationFirewallProvidersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WebApplicationFirewallProvidersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to webApplicationFirewallProviders for identity
     * @param WebApplicationFirewallProvider $body The request body
     * @param WebApplicationFirewallProvidersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WebApplicationFirewallProvider $body, ?WebApplicationFirewallProvidersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WebApplicationFirewallProvidersRequestBuilder
    */
    public function withUrl(string $rawUrl): WebApplicationFirewallProvidersRequestBuilder {
        return new WebApplicationFirewallProvidersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
