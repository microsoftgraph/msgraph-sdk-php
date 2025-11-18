<?php

namespace Microsoft\\Graph\\Generated\Identity\RiskPrevention\WebApplicationFirewallVerifications\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Identity\RiskPrevention\WebApplicationFirewallVerifications\Item\Provider\ProviderRequestBuilder;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\WebApplicationFirewallVerificationModel;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the webApplicationFirewallVerifications property of the microsoft.graph.riskPreventionContainer entity.
*/
class WebApplicationFirewallVerificationModelItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the provider property of the microsoft.graph.webApplicationFirewallVerificationModel entity.
    */
    public function provider(): ProviderRequestBuilder {
        return new ProviderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WebApplicationFirewallVerificationModelItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/riskPrevention/webApplicationFirewallVerifications/{webApplicationFirewallVerificationModel%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a webApplicationFirewallVerificationModel object.
     * @param WebApplicationFirewallVerificationModelItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/riskpreventioncontainer-delete-webapplicationfirewallverifications?view=graph-rest-1.0 Find more info here
    */
    public function delete(?WebApplicationFirewallVerificationModelItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of webApplicationFirewallVerificationModel object.
     * @param WebApplicationFirewallVerificationModelItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WebApplicationFirewallVerificationModel|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/webapplicationfirewallverificationmodel-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?WebApplicationFirewallVerificationModelItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WebApplicationFirewallVerificationModel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property webApplicationFirewallVerifications in identity
     * @param WebApplicationFirewallVerificationModel $body The request body
     * @param WebApplicationFirewallVerificationModelItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WebApplicationFirewallVerificationModel|null>
     * @throws Exception
    */
    public function patch(WebApplicationFirewallVerificationModel $body, ?WebApplicationFirewallVerificationModelItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WebApplicationFirewallVerificationModel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a webApplicationFirewallVerificationModel object.
     * @param WebApplicationFirewallVerificationModelItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WebApplicationFirewallVerificationModelItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of webApplicationFirewallVerificationModel object.
     * @param WebApplicationFirewallVerificationModelItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WebApplicationFirewallVerificationModelItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property webApplicationFirewallVerifications in identity
     * @param WebApplicationFirewallVerificationModel $body The request body
     * @param WebApplicationFirewallVerificationModelItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WebApplicationFirewallVerificationModel $body, ?WebApplicationFirewallVerificationModelItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return WebApplicationFirewallVerificationModelItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WebApplicationFirewallVerificationModelItemRequestBuilder {
        return new WebApplicationFirewallVerificationModelItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
