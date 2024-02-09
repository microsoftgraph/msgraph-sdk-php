<?php

namespace Microsoft\Graph\Generated\Users\Item\Todo\Lists\Item\Tasks\Item\ChecklistItems;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ChecklistItem;
use Microsoft\Graph\Generated\Models\ChecklistItemCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Todo\Lists\Item\Tasks\Item\ChecklistItems\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Todo\Lists\Item\Tasks\Item\ChecklistItems\Item\ChecklistItemItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the checklistItems property of the microsoft.graph.todoTask entity.
*/
class ChecklistItemsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the checklistItems property of the microsoft.graph.todoTask entity.
     * @param string $checklistItemId The unique identifier of checklistItem
     * @return ChecklistItemItemRequestBuilder
    */
    public function byChecklistItemId(string $checklistItemId): ChecklistItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['checklistItem%2Did'] = $checklistItemId;
        return new ChecklistItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ChecklistItemsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/todo/lists/{todoTaskList%2Did}/tasks/{todoTask%2Did}/checklistItems{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the checklistItem resources associated to a todoTask from the checklistItems navigation property.
     * @param ChecklistItemsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ChecklistItemCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/todotask-list-checklistitems?view=graph-rest-1.0 Find more info here
    */
    public function get(?ChecklistItemsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ChecklistItemCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new checklistItem object.
     * @param ChecklistItem $body The request body
     * @param ChecklistItemsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ChecklistItem|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/todotask-post-checklistitems?view=graph-rest-1.0 Find more info here
    */
    public function post(ChecklistItem $body, ?ChecklistItemsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ChecklistItem::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the checklistItem resources associated to a todoTask from the checklistItems navigation property.
     * @param ChecklistItemsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ChecklistItemsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new checklistItem object.
     * @param ChecklistItem $body The request body
     * @param ChecklistItemsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ChecklistItem $body, ?ChecklistItemsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/users/{user%2Did}/todo/lists/{todoTaskList%2Did}/tasks/{todoTask%2Did}/checklistItems';
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
     * @return ChecklistItemsRequestBuilder
    */
    public function withUrl(string $rawUrl): ChecklistItemsRequestBuilder {
        return new ChecklistItemsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
