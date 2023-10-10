<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\UserProcessingResults;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\UserProcessingResults\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\UserProcessingResults\Item\UserProcessingResultItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\UserProcessingResults\MicrosoftGraphIdentityGovernanceSummaryWithStartDateTimeWithEndDateTime\MicrosoftGraphIdentityGovernanceSummaryWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityGovernance\UserProcessingResultCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userProcessingResults property of the microsoft.graph.identityGovernance.workflow entity.
*/
class UserProcessingResultsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userProcessingResults property of the microsoft.graph.identityGovernance.workflow entity.
     * @param string $userProcessingResultId The unique identifier of userProcessingResult
     * @return UserProcessingResultItemRequestBuilder
    */
    public function byUserProcessingResultId(string $userProcessingResultId): UserProcessingResultItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userProcessingResult%2Did'] = $userProcessingResultId;
        return new UserProcessingResultItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserProcessingResultsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/deletedItems/workflows/{workflow%2Did}/userProcessingResults{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the userProcessingResult resources for a workflow. This API is available in the following national cloud deployments.
     * @param UserProcessingResultsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/identitygovernance-workflow-list-userprocessingresults?view=graph-rest-1.0 Find more info here
    */
    public function get(?UserProcessingResultsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UserProcessingResultCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the summary method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphIdentityGovernanceSummaryWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function microsoftGraphIdentityGovernanceSummaryWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphIdentityGovernanceSummaryWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new MicrosoftGraphIdentityGovernanceSummaryWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Get the userProcessingResult resources for a workflow. This API is available in the following national cloud deployments.
     * @param UserProcessingResultsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserProcessingResultsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return UserProcessingResultsRequestBuilder
    */
    public function withUrl(string $rawUrl): UserProcessingResultsRequestBuilder {
        return new UserProcessingResultsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
