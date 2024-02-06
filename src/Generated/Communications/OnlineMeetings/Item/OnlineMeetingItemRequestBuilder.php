<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetings\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\AttendanceReports\AttendanceReportsRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\AttendeeReport\AttendeeReportRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\GetVirtualAppointmentJoinWebUrl\GetVirtualAppointmentJoinWebUrlRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\Recordings\RecordingsRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\SendVirtualAppointmentReminderSms\SendVirtualAppointmentReminderSmsRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\SendVirtualAppointmentSms\SendVirtualAppointmentSmsRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\Transcripts\TranscriptsRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OnlineMeeting;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the onlineMeetings property of the microsoft.graph.cloudCommunications entity.
*/
class OnlineMeetingItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the attendanceReports property of the microsoft.graph.onlineMeetingBase entity.
    */
    public function attendanceReports(): AttendanceReportsRequestBuilder {
        return new AttendanceReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the cloudCommunications entity.
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
     * Provides operations to manage the recordings property of the microsoft.graph.onlineMeeting entity.
    */
    public function recordings(): RecordingsRequestBuilder {
        return new RecordingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendVirtualAppointmentReminderSms method.
    */
    public function sendVirtualAppointmentReminderSms(): SendVirtualAppointmentReminderSmsRequestBuilder {
        return new SendVirtualAppointmentReminderSmsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendVirtualAppointmentSms method.
    */
    public function sendVirtualAppointmentSms(): SendVirtualAppointmentSmsRequestBuilder {
        return new SendVirtualAppointmentSmsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/onlineMeetings/{onlineMeeting%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property onlineMeetings for communications
     * @param OnlineMeetingItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
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
     * Get onlineMeetings from communications
     * @param OnlineMeetingItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnlineMeeting|null>
     * @throws Exception
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
     * Update the navigation property onlineMeetings in communications
     * @param OnlineMeeting $body The request body
     * @param OnlineMeetingItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnlineMeeting|null>
     * @throws Exception
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
     * Delete navigation property onlineMeetings for communications
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
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Get onlineMeetings from communications
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
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Update the navigation property onlineMeetings in communications
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
        $requestInfo->tryAddHeader('Accept', "application/json");
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
