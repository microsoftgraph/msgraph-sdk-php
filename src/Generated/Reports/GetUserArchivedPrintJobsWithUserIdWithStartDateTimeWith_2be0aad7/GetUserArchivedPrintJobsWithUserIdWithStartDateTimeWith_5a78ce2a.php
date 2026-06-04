<?php

namespace Microsoft\Graph\Generated\Reports\GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_2be0aad7;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getUserArchivedPrintJobs method. Original name: getUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder
*/
class GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5a78ce2a extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5a78ce2a and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
     * @param string|null $userId Usage: userId='{userId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null, ?string $userId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/getUserArchivedPrintJobs(userId=\'{userId}\',startDateTime={startDateTime},endDateTime={endDateTime}){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['endDateTime'] = $endDateTime;
            $urlTplParams['startDateTime'] = $startDateTime;
            $urlTplParams['userId'] = $userId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of archived print jobs for a particular user.
     * @param GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_67b8ec2a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_e856dc03|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reports-getuserarchivedprintjobs?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_67b8ec2a $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_e856dc03::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of archived print jobs for a particular user.
     * @param GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_67b8ec2a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_67b8ec2a $requestConfiguration = null): RequestInformation {
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
     * @return GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5a78ce2a
    */
    public function withUrl(string $rawUrl): GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5a78ce2a {
        return new GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5a78ce2a($rawUrl, $this->requestAdapter);
    }

}
