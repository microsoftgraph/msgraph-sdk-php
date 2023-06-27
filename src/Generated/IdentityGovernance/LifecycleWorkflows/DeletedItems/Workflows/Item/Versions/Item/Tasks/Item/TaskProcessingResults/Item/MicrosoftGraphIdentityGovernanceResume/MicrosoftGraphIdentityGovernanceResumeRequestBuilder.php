<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\Versions\Item\Tasks\Item\TaskProcessingResults\Item\MicrosoftGraphIdentityGovernanceResume;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the resume method.
*/
class MicrosoftGraphIdentityGovernanceResumeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphIdentityGovernanceResumeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/deletedItems/workflows/{workflow%2Did}/versions/{workflowVersion%2DversionNumber}/tasks/{task%2Did}/taskProcessingResults/{taskProcessingResult%2Did}/microsoft.graph.identityGovernance.resume');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Resume a task processing result that's `inProgress`. In the default case an Azure Logic Apps system-assigned managed identity calls this API. For more information, see: Lifecycle Workflows extensibility approach.
     * @param ResumePostRequestBody $body The request body
     * @param MicrosoftGraphIdentityGovernanceResumeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/identitygovernance-taskprocessingresult-resume?view=graph-rest-1.0 Find more info here
    */
    public function post(ResumePostRequestBody $body, ?MicrosoftGraphIdentityGovernanceResumeRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Resume a task processing result that's `inProgress`. In the default case an Azure Logic Apps system-assigned managed identity calls this API. For more information, see: Lifecycle Workflows extensibility approach.
     * @param ResumePostRequestBody $body The request body
     * @param MicrosoftGraphIdentityGovernanceResumeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ResumePostRequestBody $body, ?MicrosoftGraphIdentityGovernanceResumeRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
