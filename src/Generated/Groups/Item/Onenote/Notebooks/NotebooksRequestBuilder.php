<?php

namespace Microsoft\Graph\Generated\Groups\Item\Onenote\Notebooks;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\Onenote\Notebooks\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Onenote\Notebooks\GetNotebookFromWebUrl\GetNotebookFromWebUrlRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Onenote\Notebooks\GetRecentNotebooksWithIncludePersonalNotebooks\GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Onenote\Notebooks\Item\NotebookItemRequestBuilder;
use Microsoft\Graph\Generated\Models\Notebook;
use Microsoft\Graph\Generated\Models\NotebookCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
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
     * @param string $notebookId Unique identifier of the item
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
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/onenote/notebooks{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of notebook objects.
     * @param NotebooksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/onenote-list-notebooks?view=graph-rest-1.0 Find more info here
    */
    public function get(?NotebooksRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [NotebookCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
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
     * Create a new OneNote notebook.
     * @param Notebook $body The request body
     * @param NotebooksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/onenote-post-notebooks?view=graph-rest-1.0 Find more info here
    */
    public function post(Notebook $body, ?NotebooksRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Notebook::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve a list of notebook objects.
     * @param NotebooksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?NotebooksRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create a new OneNote notebook.
     * @param Notebook $body The request body
     * @param NotebooksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Notebook $body, ?NotebooksRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
