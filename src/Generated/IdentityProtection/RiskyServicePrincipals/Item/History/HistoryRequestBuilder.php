<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Item\History;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Item\History\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Item\History\Item\RiskyServicePrincipalHistoryItemItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\RiskyServicePrincipalHistoryItem;
use Microsoft\Graph\Generated\Models\RiskyServicePrincipalHistoryItemCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the history property of the microsoft.graph.riskyServicePrincipal entity.
*/
class HistoryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the history property of the microsoft.graph.riskyServicePrincipal entity.
     * @param string $riskyServicePrincipalHistoryItemId The unique identifier of riskyServicePrincipalHistoryItem
     * @return RiskyServicePrincipalHistoryItemItemRequestBuilder
    */
    public function byRiskyServicePrincipalHistoryItemId(string $riskyServicePrincipalHistoryItemId): RiskyServicePrincipalHistoryItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskyServicePrincipalHistoryItem%2Did'] = $riskyServicePrincipalHistoryItemId;
        return new RiskyServicePrincipalHistoryItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new HistoryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityProtection/riskyServicePrincipals/{riskyServicePrincipal%2Did}/history{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the risk history of a riskyServicePrincipal object. This API is available in the following national cloud deployments.
     * @param HistoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RiskyServicePrincipalHistoryItemCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/riskyserviceprincipal-list-history?view=graph-rest-1.0 Find more info here
    */
    public function get(?HistoryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RiskyServicePrincipalHistoryItemCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to history for identityProtection
     * @param RiskyServicePrincipalHistoryItem $body The request body
     * @param HistoryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RiskyServicePrincipalHistoryItem|null>
     * @throws Exception
    */
    public function post(RiskyServicePrincipalHistoryItem $body, ?HistoryRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RiskyServicePrincipalHistoryItem::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the risk history of a riskyServicePrincipal object. This API is available in the following national cloud deployments.
     * @param HistoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HistoryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to history for identityProtection
     * @param RiskyServicePrincipalHistoryItem $body The request body
     * @param HistoryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RiskyServicePrincipalHistoryItem $body, ?HistoryRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return HistoryRequestBuilder
    */
    public function withUrl(string $rawUrl): HistoryRequestBuilder {
        return new HistoryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
