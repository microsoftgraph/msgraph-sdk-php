<?php

namespace Microsoft\Graph\Generated\Identity\RiskPrevention\WebApplicationFirewallVerifications;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\RiskPrevention\WebApplicationFirewallVerifications\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Identity\RiskPrevention\WebApplicationFirewallVerifications\Item\WebApplicationFirewallVerificationModelItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WebApplicationFirewallVerificationModel;
use Microsoft\Graph\Generated\Models\WebApplicationFirewallVerificationModelCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the webApplicationFirewallVerifications property of the microsoft.graph.riskPreventionContainer entity.
*/
class WebApplicationFirewallVerificationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the webApplicationFirewallVerifications property of the microsoft.graph.riskPreventionContainer entity.
     * @param string $webApplicationFirewallVerificationModelId The unique identifier of webApplicationFirewallVerificationModel
     * @return WebApplicationFirewallVerificationModelItemRequestBuilder
    */
    public function byWebApplicationFirewallVerificationModelId(string $webApplicationFirewallVerificationModelId): WebApplicationFirewallVerificationModelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['webApplicationFirewallVerificationModel%2Did'] = $webApplicationFirewallVerificationModelId;
        return new WebApplicationFirewallVerificationModelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WebApplicationFirewallVerificationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/riskPrevention/webApplicationFirewallVerifications{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the webApplicationFirewallVerificationModel objects and their properties.
     * @param WebApplicationFirewallVerificationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WebApplicationFirewallVerificationModelCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/riskpreventioncontainer-list-webapplicationfirewallverifications?view=graph-rest-1.0 Find more info here
    */
    public function get(?WebApplicationFirewallVerificationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WebApplicationFirewallVerificationModelCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to webApplicationFirewallVerifications for identity
     * @param WebApplicationFirewallVerificationModel $body The request body
     * @param WebApplicationFirewallVerificationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WebApplicationFirewallVerificationModel|null>
     * @throws Exception
    */
    public function post(WebApplicationFirewallVerificationModel $body, ?WebApplicationFirewallVerificationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WebApplicationFirewallVerificationModel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the webApplicationFirewallVerificationModel objects and their properties.
     * @param WebApplicationFirewallVerificationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WebApplicationFirewallVerificationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to webApplicationFirewallVerifications for identity
     * @param WebApplicationFirewallVerificationModel $body The request body
     * @param WebApplicationFirewallVerificationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WebApplicationFirewallVerificationModel $body, ?WebApplicationFirewallVerificationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WebApplicationFirewallVerificationsRequestBuilder
    */
    public function withUrl(string $rawUrl): WebApplicationFirewallVerificationsRequestBuilder {
        return new WebApplicationFirewallVerificationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
