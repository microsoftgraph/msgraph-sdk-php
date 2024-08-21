<?php

namespace Microsoft\Graph\Generated\Users\Item\OnlineMeetings\GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTime;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getAllTranscripts method.
*/
class GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/onlineMeetings/getAllTranscripts(meetingOrganizerUserId=\'@meetingOrganizerUserId\',startDateTime=@startDateTime,endDateTime=@endDateTime){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top,endDateTime*,meetingOrganizerUserId*,startDateTime*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getAllTranscripts
     * @param GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeGetResponse|null>
     * @throws Exception
    */
    public function get(?GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function getAllTranscripts
     * @param GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function withUrl(string $rawUrl): GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
