<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\Item\Tasks\Item\TaskProcessingResults;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\Item\Tasks\Item\TaskProcessingResults\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\Item\Tasks\Item\TaskProcessingResults\Item\TaskProcessingResultItemRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityGovernance\TaskProcessingResultCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the taskProcessingResults property of the microsoft.graph.identityGovernance.task entity.
*/
class TaskProcessingResultsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the taskProcessingResults property of the microsoft.graph.identityGovernance.task entity.
     * @param string $taskProcessingResultId The unique identifier of taskProcessingResult
     * @return TaskProcessingResultItemRequestBuilder
    */
    public function byTaskProcessingResultId(string $taskProcessingResultId): TaskProcessingResultItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['taskProcessingResult%2Did'] = $taskProcessingResultId;
        return new TaskProcessingResultItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TaskProcessingResultsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/workflowTemplates/{workflowTemplate%2Did}/tasks/{task%2Did}/taskProcessingResults{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The result of processing the task.
     * @param TaskProcessingResultsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TaskProcessingResultCollectionResponse|null>
     * @throws Exception
    */
    public function get(?TaskProcessingResultsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TaskProcessingResultCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The result of processing the task.
     * @param TaskProcessingResultsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TaskProcessingResultsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TaskProcessingResultsRequestBuilder
    */
    public function withUrl(string $rawUrl): TaskProcessingResultsRequestBuilder {
        return new TaskProcessingResultsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
