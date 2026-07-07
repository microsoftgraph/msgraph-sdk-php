<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\MicrosoftGraphIdentityGovernancePreviewWorkflow;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the previewWorkflow method.
*/
class MicrosoftGraphIdentityGovernancePreviewWorkflowRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphIdentityGovernancePreviewWorkflowRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/deletedItems/workflows/{workflow%2Did}/microsoft.graph.identityGovernance.previewWorkflow');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Run a workflow in preview mode for selected directory objects without affecting production users. This action triggers workflow processing in preview mode, and results can be retrieved by using the List userProcessingResults operation with $filter=workflowExecutionType eq 'previewMode'.
     * @param PreviewWorkflowPostRequestBody $body The request body
     * @param MicrosoftGraphIdentityGovernancePreviewWorkflowRequestB_c17c9f0e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitygovernance-workflow-previewworkflow?view=graph-rest-1.0 Find more info here
    */
    public function post(PreviewWorkflowPostRequestBody $body, ?MicrosoftGraphIdentityGovernancePreviewWorkflowRequestB_c17c9f0e $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Run a workflow in preview mode for selected directory objects without affecting production users. This action triggers workflow processing in preview mode, and results can be retrieved by using the List userProcessingResults operation with $filter=workflowExecutionType eq 'previewMode'.
     * @param PreviewWorkflowPostRequestBody $body The request body
     * @param MicrosoftGraphIdentityGovernancePreviewWorkflowRequestB_c17c9f0e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PreviewWorkflowPostRequestBody $body, ?MicrosoftGraphIdentityGovernancePreviewWorkflowRequestB_c17c9f0e $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphIdentityGovernancePreviewWorkflowRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphIdentityGovernancePreviewWorkflowRequestBuilder {
        return new MicrosoftGraphIdentityGovernancePreviewWorkflowRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
