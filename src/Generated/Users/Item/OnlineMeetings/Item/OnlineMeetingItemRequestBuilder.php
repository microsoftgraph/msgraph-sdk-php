<?php

namespace Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OnlineMeeting;
use Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item\AttendanceReports\AttendanceReportsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item\AttendeeReport\AttendeeReportRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item\GetVirtualAppointmentJoinWebUrl\GetVirtualAppointmentJoinWebUrlRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item\Transcripts\TranscriptsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the onlineMeetings property of the microsoft.graph.user entity.
*/
class OnlineMeetingItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the attendanceReports property of the microsoft.graph.onlineMeeting entity.
    */
    public function attendanceReports(): AttendanceReportsRequestBuilder {
        return new AttendanceReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the user entity.
    */
    public function attendeeReport(): AttendeeReportRequestBuilder {
        return new AttendeeReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getVirtualAppointmentJoinWebUrl method.
    */
    public function getVirtualAppointmentJoinWebUrl(): GetVirtualAppointmentJoinWebUrlRequestBuilder {
        return new GetVirtualAppointmentJoinWebUrlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transcripts property of the microsoft.graph.onlineMeeting entity.
    */
    public function transcripts(): TranscriptsRequestBuilder {
        return new TranscriptsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new OnlineMeetingItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/onlineMeetings/{onlineMeeting%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an onlineMeeting object. This API is available in the following national cloud deployments.
     * @param OnlineMeetingItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onlinemeeting-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?OnlineMeetingItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve the properties and relationships of an onlineMeeting object. For example, you can: Teams live event attendee report (deprecated) is an online meeting artifact. For details, see Online meeting artifacts and permissions. This API is available in the following national cloud deployments.
     * @param OnlineMeetingItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnlineMeeting|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onlinemeeting-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?OnlineMeetingItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnlineMeeting::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of the specified onlineMeeting object. Please see Request body section for the list of properties that support updating. This API is available in the following national cloud deployments.
     * @param OnlineMeeting $body The request body
     * @param OnlineMeetingItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnlineMeeting|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onlinemeeting-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(OnlineMeeting $body, ?OnlineMeetingItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnlineMeeting::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an onlineMeeting object. This API is available in the following national cloud deployments.
     * @param OnlineMeetingItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?OnlineMeetingItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, application/json");
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of an onlineMeeting object. For example, you can: Teams live event attendee report (deprecated) is an online meeting artifact. For details, see Online meeting artifacts and permissions. This API is available in the following national cloud deployments.
     * @param OnlineMeetingItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnlineMeetingItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of the specified onlineMeeting object. Please see Request body section for the list of properties that support updating. This API is available in the following national cloud deployments.
     * @param OnlineMeeting $body The request body
     * @param OnlineMeetingItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(OnlineMeeting $body, ?OnlineMeetingItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return OnlineMeetingItemRequestBuilder
    */
    public function withUrl(string $rawUrl): OnlineMeetingItemRequestBuilder {
        return new OnlineMeetingItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
