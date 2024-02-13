<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\Vulnerabilities\Item\Articles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\ArticleCollectionResponse;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\Vulnerabilities\Item\Articles\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\Vulnerabilities\Item\Articles\Item\ArticleItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the articles property of the microsoft.graph.security.vulnerability entity.
*/
class ArticlesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the articles property of the microsoft.graph.security.vulnerability entity.
     * @param string $articleId The unique identifier of article
     * @return ArticleItemRequestBuilder
    */
    public function byArticleId(string $articleId): ArticleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['article%2Did'] = $articleId;
        return new ArticleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ArticlesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/threatIntelligence/vulnerabilities/{vulnerability%2Did}/articles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Articles related to this vulnerability.
     * @param ArticlesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ArticleCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ArticlesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ArticleCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Articles related to this vulnerability.
     * @param ArticlesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ArticlesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ArticlesRequestBuilder
    */
    public function withUrl(string $rawUrl): ArticlesRequestBuilder {
        return new ArticlesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
