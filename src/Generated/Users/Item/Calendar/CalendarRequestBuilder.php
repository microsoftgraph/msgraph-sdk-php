<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendar;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\Calendar;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Calendar\AllowedCalendarSharingRolesWithUser\AllowedCalendarSharingRolesWithUserRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendar\CalendarPermissions\CalendarPermissionsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendar\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendar\Events\EventsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendar\GetSchedule\GetScheduleRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the calendar property of the microsoft.graph.user entity.
*/
class CalendarRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the calendarPermissions property of the microsoft.graph.calendar entity.
    */
    public function calendarPermissions(): CalendarPermissionsRequestBuilder {
        return new CalendarPermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.calendar entity.
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the events property of the microsoft.graph.calendar entity.
    */
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getSchedule method.
    */
    public function getSchedule(): GetScheduleRequestBuilder {
        return new GetScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the allowedCalendarSharingRoles method.
     * @param string $user Usage: User='{User}'
     * @return AllowedCalendarSharingRolesWithUserRequestBuilder
    */
    public function allowedCalendarSharingRolesWithUser(string $user): AllowedCalendarSharingRolesWithUserRequestBuilder {
        return new AllowedCalendarSharingRolesWithUserRequestBuilder($this->pathParameters, $this->requestAdapter, $user);
    }

    /**
     * Instantiates a new CalendarRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/calendar{?%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a calendar other than the default calendar.
     * @param CalendarRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/calendar-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?CalendarRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the properties and relationships of a calendar object. The calendar can be one for a user,or the default calendar of a Microsoft 365 group. There are two scenarios where an app can get another user's calendar:
     * @param CalendarRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Calendar|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/calendar-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CalendarRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Calendar::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a calendar object. The calendar can be one for a user,or the default calendar of a Microsoft 365 group.
     * @param Calendar $body The request body
     * @param CalendarRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Calendar|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/calendar-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(Calendar $body, ?CalendarRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Calendar::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a calendar other than the default calendar.
     * @param CalendarRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CalendarRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/users/{user%2Did}/calendar';
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
     * Get the properties and relationships of a calendar object. The calendar can be one for a user,or the default calendar of a Microsoft 365 group. There are two scenarios where an app can get another user's calendar:
     * @param CalendarRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CalendarRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a calendar object. The calendar can be one for a user,or the default calendar of a Microsoft 365 group.
     * @param Calendar $body The request body
     * @param CalendarRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Calendar $body, ?CalendarRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/users/{user%2Did}/calendar';
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
     * @return CalendarRequestBuilder
    */
    public function withUrl(string $rawUrl): CalendarRequestBuilder {
        return new CalendarRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
