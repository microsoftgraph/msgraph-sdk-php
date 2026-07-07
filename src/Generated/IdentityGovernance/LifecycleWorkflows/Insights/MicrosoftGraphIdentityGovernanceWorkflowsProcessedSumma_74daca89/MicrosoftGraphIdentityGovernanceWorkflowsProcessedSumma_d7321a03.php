<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Insights\MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_74daca89;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\IdentityGovernance\WorkflowsInsightsSummary;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the workflowsProcessedSummary method. Original name: microsoftGraphIdentityGovernanceWorkflowsProcessedSummaryWithStartDateTimeWithEndDateTimeRequestBuilder
*/
class MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_d7321a03 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_d7321a03 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/insights/microsoft.graph.identityGovernance.workflowsProcessedSummary(startDateTime={startDateTime},endDateTime={endDateTime})');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['endDateTime'] = $endDateTime;
            $urlTplParams['startDateTime'] = $startDateTime;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provide a summary from the insights resource of workflow objects processed within a tenant for a specified period. Because the list returned by List workflows doesn't indicate which workflows were processed, this summary gives you a quick overview based on counts.
     * @param MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_c6500b06|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkflowsInsightsSummary|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitygovernance-insights-workflowsprocessedsummary?view=graph-rest-1.0 Find more info here
    */
    public function get(?MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_c6500b06 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkflowsInsightsSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provide a summary from the insights resource of workflow objects processed within a tenant for a specified period. Because the list returned by List workflows doesn't indicate which workflows were processed, this summary gives you a quick overview based on counts.
     * @param MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_c6500b06|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_c6500b06 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_d7321a03
    */
    public function withUrl(string $rawUrl): MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_d7321a03 {
        return new MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_d7321a03($rawUrl, $this->requestAdapter);
    }

}
