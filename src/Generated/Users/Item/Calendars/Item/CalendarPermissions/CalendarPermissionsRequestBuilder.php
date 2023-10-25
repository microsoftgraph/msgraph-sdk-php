<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendars\Item\CalendarPermissions;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\CalendarPermission;
use Microsoft\Graph\Generated\Models\CalendarPermissionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\CalendarPermissions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\CalendarPermissions\Item\CalendarPermissionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the calendarPermissions property of the microsoft.graph.calendar entity.
*/
class CalendarPermissionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendarPermissions property of the microsoft.graph.calendar entity.
     * @param string $calendarPermissionId The unique identifier of calendarPermission
     * @return CalendarPermissionItemRequestBuilder
    */
    public function byCalendarPermissionId(string $calendarPermissionId): CalendarPermissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendarPermission%2Did'] = $calendarPermissionId;
        return new CalendarPermissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CalendarPermissionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/calendars/{calendar%2Did}/calendarPermissions{?%24top,%24skip,%24filter,%24count,%24orderby,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a collection of calendarPermission resources that describe the identity and roles of users with whom the specified calendar has been shared or delegated. Here, the calendar can be a user calendar or group calendar. This API is available in the following national cloud deployments.
     * @param CalendarPermissionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/calendar-list-calendarpermissions?view=graph-rest-1.0 Find more info here
    */
    public function get(?CalendarPermissionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CalendarPermissionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create a calendarPermission resource to specify the identity and role of the user with whom the specified calendar is being shared or delegated. This API is available in the following national cloud deployments.
     * @param CalendarPermission $body The request body
     * @param CalendarPermissionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/calendar-post-calendarpermissions?view=graph-rest-1.0 Find more info here
    */
    public function post(CalendarPermission $body, ?CalendarPermissionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CalendarPermission::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get a collection of calendarPermission resources that describe the identity and roles of users with whom the specified calendar has been shared or delegated. Here, the calendar can be a user calendar or group calendar. This API is available in the following national cloud deployments.
     * @param CalendarPermissionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CalendarPermissionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a calendarPermission resource to specify the identity and role of the user with whom the specified calendar is being shared or delegated. This API is available in the following national cloud deployments.
     * @param CalendarPermission $body The request body
     * @param CalendarPermissionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CalendarPermission $body, ?CalendarPermissionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CalendarPermissionsRequestBuilder
    */
    public function withUrl(string $rawUrl): CalendarPermissionsRequestBuilder {
        return new CalendarPermissionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
