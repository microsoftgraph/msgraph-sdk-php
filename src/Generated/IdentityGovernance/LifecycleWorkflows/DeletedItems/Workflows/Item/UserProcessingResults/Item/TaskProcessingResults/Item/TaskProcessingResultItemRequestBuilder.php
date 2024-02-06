<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\UserProcessingResults\Item\TaskProcessingResults\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\UserProcessingResults\Item\TaskProcessingResults\Item\MicrosoftGraphIdentityGovernanceResume\MicrosoftGraphIdentityGovernanceResumeRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\UserProcessingResults\Item\TaskProcessingResults\Item\Subject\SubjectRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\UserProcessingResults\Item\TaskProcessingResults\Item\Task\TaskRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityGovernance\TaskProcessingResult;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the taskProcessingResults property of the microsoft.graph.identityGovernance.userProcessingResult entity.
*/
class TaskProcessingResultItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the resume method.
    */
    public function microsoftGraphIdentityGovernanceResume(): MicrosoftGraphIdentityGovernanceResumeRequestBuilder {
        return new MicrosoftGraphIdentityGovernanceResumeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the subject property of the microsoft.graph.identityGovernance.taskProcessingResult entity.
    */
    public function subject(): SubjectRequestBuilder {
        return new SubjectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the task property of the microsoft.graph.identityGovernance.taskProcessingResult entity.
    */
    public function task(): TaskRequestBuilder {
        return new TaskRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TaskProcessingResultItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/deletedItems/workflows/{workflow%2Did}/userProcessingResults/{userProcessingResult%2Did}/taskProcessingResults/{taskProcessingResult%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The associated individual task execution.
     * @param TaskProcessingResultItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TaskProcessingResult|null>
     * @throws Exception
    */
    public function get(?TaskProcessingResultItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TaskProcessingResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The associated individual task execution.
     * @param TaskProcessingResultItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TaskProcessingResultItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TaskProcessingResultItemRequestBuilder
    */
    public function withUrl(string $rawUrl): TaskProcessingResultItemRequestBuilder {
        return new TaskProcessingResultItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
