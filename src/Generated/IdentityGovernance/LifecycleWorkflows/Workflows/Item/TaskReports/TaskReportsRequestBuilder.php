<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\TaskReports;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\TaskReports\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\TaskReports\Item\TaskReportItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\TaskReports\MicrosoftGraphIdentityGovernanceSummaryWithStartDateTimeWithEndDateTime\MicrosoftGraphIdentityGovernanceSummaryWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityGovernance\TaskReportCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the taskReports property of the microsoft.graph.identityGovernance.workflow entity.
*/
class TaskReportsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the taskReports property of the microsoft.graph.identityGovernance.workflow entity.
     * @param string $taskReportId The unique identifier of taskReport
     * @return TaskReportItemRequestBuilder
    */
    public function byTaskReportId(string $taskReportId): TaskReportItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['taskReport%2Did'] = $taskReportId;
        return new TaskReportItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TaskReportsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/workflows/{workflow%2Did}/taskReports{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the taskReport objects and their properties.
     * @param TaskReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TaskReportCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitygovernance-workflow-list-taskreports?view=graph-rest-1.0 Find more info here
    */
    public function get(?TaskReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TaskReportCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * Get a list of the taskReport objects and their properties.
     * @param TaskReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TaskReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TaskReportsRequestBuilder
    */
    public function withUrl(string $rawUrl): TaskReportsRequestBuilder {
        return new TaskReportsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
