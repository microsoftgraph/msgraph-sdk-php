<?php

namespace Microsoft\Graph\Generated\Users\Item\Onenote\Notebooks;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\Notebook;
use Microsoft\Graph\Generated\Models\NotebookCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Onenote\Notebooks\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Notebooks\GetNotebookFromWebUrl\GetNotebookFromWebUrlRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Notebooks\GetRecentNotebooksWithIncludePersonalNotebooks\GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Notebooks\Item\NotebookItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the notebooks property of the microsoft.graph.onenote entity.
*/
class NotebooksRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getNotebookFromWebUrl method.
    */
    public function getNotebookFromWebUrl(): GetNotebookFromWebUrlRequestBuilder {
        return new GetNotebookFromWebUrlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the notebooks property of the microsoft.graph.onenote entity.
     * @param string $notebookId The unique identifier of notebook
     * @return NotebookItemRequestBuilder
    */
    public function byNotebookId(string $notebookId): NotebookItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['notebook%2Did'] = $notebookId;
        return new NotebookItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new NotebooksRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/onenote/notebooks{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
     * @param NotebooksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NotebookCollectionResponse|null>
     * @throws Exception
    */
    public function get(?NotebooksRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NotebookCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getRecentNotebooks method.
     * @param bool $includePersonalNotebooks Usage: includePersonalNotebooks={includePersonalNotebooks}
     * @return GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilder
    */
    public function getRecentNotebooksWithIncludePersonalNotebooks(bool $includePersonalNotebooks): GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilder {
        return new GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilder($this->pathParameters, $this->requestAdapter, $includePersonalNotebooks);
    }

    /**
     * Create new navigation property to notebooks for users
     * @param Notebook $body The request body
     * @param NotebooksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Notebook|null>
     * @throws Exception
    */
    public function post(Notebook $body, ?NotebooksRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Notebook::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
     * @param NotebooksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?NotebooksRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to notebooks for users
     * @param Notebook $body The request body
     * @param NotebooksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Notebook $body, ?NotebooksRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return NotebooksRequestBuilder
    */
    public function withUrl(string $rawUrl): NotebooksRequestBuilder {
        return new NotebooksRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
