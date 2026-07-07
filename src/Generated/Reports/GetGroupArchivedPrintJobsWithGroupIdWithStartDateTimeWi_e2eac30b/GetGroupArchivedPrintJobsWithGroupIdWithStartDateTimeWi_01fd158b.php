<?php

namespace Microsoft\Graph\Generated\Reports\GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_e2eac30b;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getGroupArchivedPrintJobs method. Original name: getGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder
*/
class GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_01fd158b extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_01fd158b and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param string|null $groupId Usage: groupId='{groupId}'
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $endDateTime = null, ?string $groupId = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/getGroupArchivedPrintJobs(groupId=\'{groupId}\',startDateTime={startDateTime},endDateTime={endDateTime}){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['endDateTime'] = $endDateTime;
            $urlTplParams['groupId'] = $groupId;
            $urlTplParams['startDateTime'] = $startDateTime;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of archived print jobs for a particular group.
     * @param GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_48d73979|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_437aa2c1|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reports-getgrouparchivedprintjobs?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_48d73979 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_437aa2c1::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of archived print jobs for a particular group.
     * @param GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_48d73979|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_48d73979 $requestConfiguration = null): RequestInformation {
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
     * @return GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_01fd158b
    */
    public function withUrl(string $rawUrl): GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_01fd158b {
        return new GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_01fd158b($rawUrl, $this->requestAdapter);
    }

}
