<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\WorkflowItemRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityGovernance\Workflow;
use Microsoft\Graph\Generated\Models\IdentityGovernance\WorkflowCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the workflows property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
*/
class WorkflowsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the workflows property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
     * @param string $workflowId The unique identifier of workflow
     * @return WorkflowItemRequestBuilder
    */
    public function byWorkflowId(string $workflowId): WorkflowItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workflow%2Did'] = $workflowId;
        return new WorkflowItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WorkflowsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/workflows{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of workflow resources that are associated with lifecycle workflows.
     * @param WorkflowsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkflowCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitygovernance-lifecycleworkflowscontainer-list-workflows?view=graph-rest-1.0 Find more info here
    */
    public function get(?WorkflowsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkflowCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new workflow object. You can create up to 50 workflows in a tenant.
     * @param Workflow $body The request body
     * @param WorkflowsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Workflow|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitygovernance-lifecycleworkflowscontainer-post-workflows?view=graph-rest-1.0 Find more info here
    */
    public function post(Workflow $body, ?WorkflowsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Workflow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of workflow resources that are associated with lifecycle workflows.
     * @param WorkflowsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorkflowsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new workflow object. You can create up to 50 workflows in a tenant.
     * @param Workflow $body The request body
     * @param WorkflowsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Workflow $body, ?WorkflowsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WorkflowsRequestBuilder
    */
    public function withUrl(string $rawUrl): WorkflowsRequestBuilder {
        return new WorkflowsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
