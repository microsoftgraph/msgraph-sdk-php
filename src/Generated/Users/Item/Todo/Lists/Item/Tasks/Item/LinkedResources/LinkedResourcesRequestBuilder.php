<?php

namespace Microsoft\Graph\Generated\Users\Item\Todo\Lists\Item\Tasks\Item\LinkedResources;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\LinkedResource;
use Microsoft\Graph\Generated\Models\LinkedResourceCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Todo\Lists\Item\Tasks\Item\LinkedResources\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Todo\Lists\Item\Tasks\Item\LinkedResources\Item\LinkedResourceItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the linkedResources property of the microsoft.graph.todoTask entity.
*/
class LinkedResourcesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the linkedResources property of the microsoft.graph.todoTask entity.
     * @param string $linkedResourceId The unique identifier of linkedResource
     * @return LinkedResourceItemRequestBuilder
    */
    public function byLinkedResourceId(string $linkedResourceId): LinkedResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['linkedResource%2Did'] = $linkedResourceId;
        return new LinkedResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LinkedResourcesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/todo/lists/{todoTaskList%2Did}/tasks/{todoTask%2Did}/linkedResources{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get information of one or more items in a partner application, based on which a specified task was created. The information is represented in a linkedResource object for each item. It includes an external ID for the item in the partner application, and if applicable, a deep link to that item in the application.
     * @param LinkedResourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LinkedResourceCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/todotask-list-linkedresources?view=graph-rest-1.0 Find more info here
    */
    public function get(?LinkedResourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LinkedResourceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a linkedResource object to associate a specified task with an item in a partner application. For example, you can associate a task with an email item in Outlook that spurred the task, and you can create a linkedResource object to track its association. You can also create a linkedResource object while creating a task.
     * @param LinkedResource $body The request body
     * @param LinkedResourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LinkedResource|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/todotask-post-linkedresources?view=graph-rest-1.0 Find more info here
    */
    public function post(LinkedResource $body, ?LinkedResourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LinkedResource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get information of one or more items in a partner application, based on which a specified task was created. The information is represented in a linkedResource object for each item. It includes an external ID for the item in the partner application, and if applicable, a deep link to that item in the application.
     * @param LinkedResourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LinkedResourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a linkedResource object to associate a specified task with an item in a partner application. For example, you can associate a task with an email item in Outlook that spurred the task, and you can create a linkedResource object to track its association. You can also create a linkedResource object while creating a task.
     * @param LinkedResource $body The request body
     * @param LinkedResourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(LinkedResource $body, ?LinkedResourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/users/{user%2Did}/todo/lists/{todoTaskList%2Did}/tasks/{todoTask%2Did}/linkedResources';
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
     * @return LinkedResourcesRequestBuilder
    */
    public function withUrl(string $rawUrl): LinkedResourcesRequestBuilder {
        return new LinkedResourcesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
