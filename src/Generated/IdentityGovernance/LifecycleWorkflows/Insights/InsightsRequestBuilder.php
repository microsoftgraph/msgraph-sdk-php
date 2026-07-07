<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Insights;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Insights\MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_bce5e128\MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_b89e9587;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Insights\MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_c71652b8\MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_b156cb98;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Insights\MicrosoftGraphIdentityGovernanceWorkflowsProcessedByCat_c8c368d9\MicrosoftGraphIdentityGovernanceWorkflowsProcessedByCat_d9a937e0;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Insights\MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_74daca89\MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_d7321a03;
use Microsoft\Graph\Generated\Models\IdentityGovernance\Insights;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the insights property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
*/
class InsightsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new InsightsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/insights{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property insights for identityGovernance
     * @param InsightsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?InsightsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The insight container holding workflow insight summaries for a tenant.
     * @param InsightsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Insights|null>
     * @throws Exception
    */
    public function get(?InsightsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Insights::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the topTasksProcessedSummary method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_b89e9587
    */
    public function microsoftGraphIdentityGovernanceTopTasksProcessedSummaryWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_b89e9587 {
        return new MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_b89e9587($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the topWorkflowsProcessedSummary method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_b156cb98
    */
    public function microsoftGraphIdentityGovernanceTopWorkflowsProcessedSummaryWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_b156cb98 {
        return new MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_b156cb98($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the workflowsProcessedByCategory method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphIdentityGovernanceWorkflowsProcessedByCat_d9a937e0
    */
    public function microsoftGraphIdentityGovernanceWorkflowsProcessedByCategoryWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphIdentityGovernanceWorkflowsProcessedByCat_d9a937e0 {
        return new MicrosoftGraphIdentityGovernanceWorkflowsProcessedByCat_d9a937e0($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the workflowsProcessedSummary method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_d7321a03
    */
    public function microsoftGraphIdentityGovernanceWorkflowsProcessedSummaryWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_d7321a03 {
        return new MicrosoftGraphIdentityGovernanceWorkflowsProcessedSumma_d7321a03($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Update the navigation property insights in identityGovernance
     * @param Insights $body The request body
     * @param InsightsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Insights|null>
     * @throws Exception
    */
    public function patch(Insights $body, ?InsightsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Insights::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property insights for identityGovernance
     * @param InsightsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?InsightsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * The insight container holding workflow insight summaries for a tenant.
     * @param InsightsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InsightsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property insights in identityGovernance
     * @param Insights $body The request body
     * @param InsightsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Insights $body, ?InsightsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return InsightsRequestBuilder
    */
    public function withUrl(string $rawUrl): InsightsRequestBuilder {
        return new InsightsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
