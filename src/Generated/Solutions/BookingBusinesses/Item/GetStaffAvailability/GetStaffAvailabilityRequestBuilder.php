<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\GetStaffAvailability;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getStaffAvailability method.
*/
class GetStaffAvailabilityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetStaffAvailabilityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/bookingBusinesses/{bookingBusiness%2Did}/getStaffAvailability');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the availability information of staff members of a Microsoft Bookings calendar. This API is supported in the following national cloud deployments.
     * @param GetStaffAvailabilityPostRequestBody $body The request body
     * @param GetStaffAvailabilityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/bookingbusiness-getstaffavailability?view=graph-rest-1.0 Find more info here
    */
    public function post(GetStaffAvailabilityPostRequestBody $body, ?GetStaffAvailabilityRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [GetStaffAvailabilityPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get the availability information of staff members of a Microsoft Bookings calendar. This API is supported in the following national cloud deployments.
     * @param GetStaffAvailabilityPostRequestBody $body The request body
     * @param GetStaffAvailabilityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GetStaffAvailabilityPostRequestBody $body, ?GetStaffAvailabilityRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetStaffAvailabilityRequestBuilder
    */
    public function withUrl(string $rawUrl): GetStaffAvailabilityRequestBuilder {
        return new GetStaffAvailabilityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
