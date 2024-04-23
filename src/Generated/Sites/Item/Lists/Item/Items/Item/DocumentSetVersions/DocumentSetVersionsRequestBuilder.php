<?php

namespace Microsoft\Graph\Generated\Sites\Item\Lists\Item\Items\Item\DocumentSetVersions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DocumentSetVersion;
use Microsoft\Graph\Generated\Models\DocumentSetVersionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\Items\Item\DocumentSetVersions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\Items\Item\DocumentSetVersions\Item\DocumentSetVersionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the documentSetVersions property of the microsoft.graph.listItem entity.
*/
class DocumentSetVersionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the documentSetVersions property of the microsoft.graph.listItem entity.
     * @param string $documentSetVersionId The unique identifier of documentSetVersion
     * @return DocumentSetVersionItemRequestBuilder
    */
    public function byDocumentSetVersionId(string $documentSetVersionId): DocumentSetVersionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['documentSetVersion%2Did'] = $documentSetVersionId;
        return new DocumentSetVersionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DocumentSetVersionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/lists/{list%2Did}/items/{listItem%2Did}/documentSetVersions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Version information for a document set version created by a user.
     * @param DocumentSetVersionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DocumentSetVersionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DocumentSetVersionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DocumentSetVersionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to documentSetVersions for sites
     * @param DocumentSetVersion $body The request body
     * @param DocumentSetVersionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DocumentSetVersion|null>
     * @throws Exception
    */
    public function post(DocumentSetVersion $body, ?DocumentSetVersionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DocumentSetVersion::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Version information for a document set version created by a user.
     * @param DocumentSetVersionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DocumentSetVersionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to documentSetVersions for sites
     * @param DocumentSetVersion $body The request body
     * @param DocumentSetVersionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DocumentSetVersion $body, ?DocumentSetVersionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DocumentSetVersionsRequestBuilder
    */
    public function withUrl(string $rawUrl): DocumentSetVersionsRequestBuilder {
        return new DocumentSetVersionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
