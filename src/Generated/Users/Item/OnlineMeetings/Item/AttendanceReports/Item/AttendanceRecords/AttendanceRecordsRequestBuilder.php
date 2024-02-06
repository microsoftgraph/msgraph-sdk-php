<?php

namespace Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item\AttendanceReports\Item\AttendanceRecords;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AttendanceRecord;
use Microsoft\Graph\Generated\Models\AttendanceRecordCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item\AttendanceReports\Item\AttendanceRecords\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item\AttendanceReports\Item\AttendanceRecords\Item\AttendanceRecordItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the attendanceRecords property of the microsoft.graph.meetingAttendanceReport entity.
*/
class AttendanceRecordsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the attendanceRecords property of the microsoft.graph.meetingAttendanceReport entity.
     * @param string $attendanceRecordId The unique identifier of attendanceRecord
     * @return AttendanceRecordItemRequestBuilder
    */
    public function byAttendanceRecordId(string $attendanceRecordId): AttendanceRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attendanceRecord%2Did'] = $attendanceRecordId;
        return new AttendanceRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AttendanceRecordsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/onlineMeetings/{onlineMeeting%2Did}/attendanceReports/{meetingAttendanceReport%2Did}/attendanceRecords{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of attendanceRecord objects and their properties.
     * @param AttendanceRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AttendanceRecordCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/attendancerecord-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?AttendanceRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AttendanceRecordCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to attendanceRecords for users
     * @param AttendanceRecord $body The request body
     * @param AttendanceRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AttendanceRecord|null>
     * @throws Exception
    */
    public function post(AttendanceRecord $body, ?AttendanceRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AttendanceRecord::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of attendanceRecord objects and their properties.
     * @param AttendanceRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AttendanceRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to attendanceRecords for users
     * @param AttendanceRecord $body The request body
     * @param AttendanceRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AttendanceRecord $body, ?AttendanceRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AttendanceRecordsRequestBuilder
    */
    public function withUrl(string $rawUrl): AttendanceRecordsRequestBuilder {
        return new AttendanceRecordsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
