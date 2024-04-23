<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\GetVirtualAppointmentJoinWebUrl;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getVirtualAppointmentJoinWebUrl method.
*/
class GetVirtualAppointmentJoinWebUrlRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetVirtualAppointmentJoinWebUrlRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/onlineMeetings/{onlineMeeting%2Did}/getVirtualAppointmentJoinWebUrl()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a join web URL for a Microsoft Virtual Appointment. This web URL includes enhanced business-to-customer experiences such as mobile browser join and virtual lobby rooms. With Teams Premium, you can configure a custom lobby room experience for attendees by adding your company logo and access the Virtual Appointments usage report for organizational analytics.
     * @param GetVirtualAppointmentJoinWebUrlRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetVirtualAppointmentJoinWebUrlGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualappointment-getvirtualappointmentjoinweburl?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetVirtualAppointmentJoinWebUrlRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetVirtualAppointmentJoinWebUrlGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a join web URL for a Microsoft Virtual Appointment. This web URL includes enhanced business-to-customer experiences such as mobile browser join and virtual lobby rooms. With Teams Premium, you can configure a custom lobby room experience for attendees by adding your company logo and access the Virtual Appointments usage report for organizational analytics.
     * @param GetVirtualAppointmentJoinWebUrlRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetVirtualAppointmentJoinWebUrlRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetVirtualAppointmentJoinWebUrlRequestBuilder
    */
    public function withUrl(string $rawUrl): GetVirtualAppointmentJoinWebUrlRequestBuilder {
        return new GetVirtualAppointmentJoinWebUrlRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
