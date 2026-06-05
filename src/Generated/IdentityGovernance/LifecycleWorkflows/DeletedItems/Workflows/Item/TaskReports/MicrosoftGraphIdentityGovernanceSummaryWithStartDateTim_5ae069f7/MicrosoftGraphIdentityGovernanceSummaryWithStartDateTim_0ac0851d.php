<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\TaskReports\MicrosoftGraphIdentityGovernanceSummaryWithStartDateTim_5ae069f7;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\IdentityGovernance\TaskReportSummary;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the summary method. Original name: microsoftGraphIdentityGovernanceSummaryWithStartDateTimeWithEndDateTimeRequestBuilder
*/
class MicrosoftGraphIdentityGovernanceSummaryWithStartDateTim_0ac0851d extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphIdentityGovernanceSummaryWithStartDateTim_0ac0851d and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/deletedItems/workflows/{workflow%2Did}/taskReports/microsoft.graph.identityGovernance.summary(startDateTime={startDateTime},endDateTime={endDateTime})');
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
     * Invoke function summary
     * @param MicrosoftGraphIdentityGovernanceSummaryWithStartDateTim_900e8853|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TaskReportSummary|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphIdentityGovernanceSummaryWithStartDateTim_900e8853 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TaskReportSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function summary
     * @param MicrosoftGraphIdentityGovernanceSummaryWithStartDateTim_900e8853|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphIdentityGovernanceSummaryWithStartDateTim_900e8853 $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphIdentityGovernanceSummaryWithStartDateTim_0ac0851d
    */
    public function withUrl(string $rawUrl): MicrosoftGraphIdentityGovernanceSummaryWithStartDateTim_0ac0851d {
        return new MicrosoftGraphIdentityGovernanceSummaryWithStartDateTim_0ac0851d($rawUrl, $this->requestAdapter);
    }

}
