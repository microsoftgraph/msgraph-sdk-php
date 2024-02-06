<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\UnifiedGroupSources;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\UnifiedGroupSource;
use Microsoft\Graph\Generated\Models\Security\UnifiedGroupSourceCollectionResponse;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\UnifiedGroupSources\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\UnifiedGroupSources\Item\UnifiedGroupSourceItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the unifiedGroupSources property of the microsoft.graph.security.ediscoveryCustodian entity.
*/
class UnifiedGroupSourcesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the unifiedGroupSources property of the microsoft.graph.security.ediscoveryCustodian entity.
     * @param string $unifiedGroupSourceId The unique identifier of unifiedGroupSource
     * @return UnifiedGroupSourceItemRequestBuilder
    */
    public function byUnifiedGroupSourceId(string $unifiedGroupSourceId): UnifiedGroupSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedGroupSource%2Did'] = $unifiedGroupSourceId;
        return new UnifiedGroupSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UnifiedGroupSourcesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/cases/ediscoveryCases/{ediscoveryCase%2Did}/custodians/{ediscoveryCustodian%2Did}/unifiedGroupSources{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the unifiedGroupSource objects associated with an ediscoveryCustodian.
     * @param UnifiedGroupSourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedGroupSourceCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-ediscoverycustodian-list-unifiedgroupsources?view=graph-rest-1.0 Find more info here
    */
    public function get(?UnifiedGroupSourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedGroupSourceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new unifiedGroupSource object associated with an eDiscovery custodian.
     * @param UnifiedGroupSource $body The request body
     * @param UnifiedGroupSourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedGroupSource|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-ediscoverycustodian-post-unifiedgroupsources?view=graph-rest-1.0 Find more info here
    */
    public function post(UnifiedGroupSource $body, ?UnifiedGroupSourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedGroupSource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the unifiedGroupSource objects associated with an ediscoveryCustodian.
     * @param UnifiedGroupSourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UnifiedGroupSourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new unifiedGroupSource object associated with an eDiscovery custodian.
     * @param UnifiedGroupSource $body The request body
     * @param UnifiedGroupSourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnifiedGroupSource $body, ?UnifiedGroupSourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UnifiedGroupSourcesRequestBuilder
    */
    public function withUrl(string $rawUrl): UnifiedGroupSourcesRequestBuilder {
        return new UnifiedGroupSourcesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
