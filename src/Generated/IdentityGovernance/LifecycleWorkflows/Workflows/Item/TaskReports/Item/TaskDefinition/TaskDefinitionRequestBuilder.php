<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\TaskReports\Item\TaskDefinition;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\IdentityGovernance\TaskDefinition;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the taskDefinition property of the microsoft.graph.identityGovernance.taskReport entity.
*/
class TaskDefinitionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new TaskDefinitionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/workflows/{workflow%2Did}/taskReports/{taskReport%2Did}/taskDefinition{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The taskDefinition associated with the related lifecycle workflow task.Supports $filter(eq, ne) and $expand.
     * @param TaskDefinitionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TaskDefinition|null>
     * @throws Exception
    */
    public function get(?TaskDefinitionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TaskDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The taskDefinition associated with the related lifecycle workflow task.Supports $filter(eq, ne) and $expand.
     * @param TaskDefinitionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TaskDefinitionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TaskDefinitionRequestBuilder
    */
    public function withUrl(string $rawUrl): TaskDefinitionRequestBuilder {
        return new TaskDefinitionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
