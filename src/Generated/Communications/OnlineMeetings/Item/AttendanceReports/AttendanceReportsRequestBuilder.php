<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\AttendanceReports;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\AttendanceReports\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\AttendanceReports\Item\MeetingAttendanceReportItemRequestBuilder;
use Microsoft\Graph\Generated\Models\MeetingAttendanceReport;
use Microsoft\Graph\Generated\Models\MeetingAttendanceReportCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the attendanceReports property of the microsoft.graph.onlineMeeting entity.
*/
class AttendanceReportsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the attendanceReports property of the microsoft.graph.onlineMeeting entity.
     * @param string $meetingAttendanceReportId The unique identifier of meetingAttendanceReport
     * @return MeetingAttendanceReportItemRequestBuilder
    */
    public function byMeetingAttendanceReportId(string $meetingAttendanceReportId): MeetingAttendanceReportItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['meetingAttendanceReport%2Did'] = $meetingAttendanceReportId;
        return new MeetingAttendanceReportItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AttendanceReportsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/onlineMeetings/{onlineMeeting%2Did}/attendanceReports{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of meetingAttendanceReport objects for an onlineMeeting. Each time an online meeting ends, an attendance report is generated for that session. This API is available in the following national cloud deployments.
     * @param AttendanceReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MeetingAttendanceReportCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/meetingattendancereport-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?AttendanceReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MeetingAttendanceReportCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to attendanceReports for communications
     * @param MeetingAttendanceReport $body The request body
     * @param AttendanceReportsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MeetingAttendanceReport|null>
     * @throws Exception
    */
    public function post(MeetingAttendanceReport $body, ?AttendanceReportsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MeetingAttendanceReport::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of meetingAttendanceReport objects for an onlineMeeting. Each time an online meeting ends, an attendance report is generated for that session. This API is available in the following national cloud deployments.
     * @param AttendanceReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AttendanceReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to attendanceReports for communications
     * @param MeetingAttendanceReport $body The request body
     * @param AttendanceReportsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MeetingAttendanceReport $body, ?AttendanceReportsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AttendanceReportsRequestBuilder
    */
    public function withUrl(string $rawUrl): AttendanceReportsRequestBuilder {
        return new AttendanceReportsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
