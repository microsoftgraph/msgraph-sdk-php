<?php

namespace Microsoft\Graph\Generated\Groups\Item\Calendar;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\Calendar\AllowedCalendarSharingRolesWithUser\AllowedCalendarSharingRolesWithUserRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\CalendarPermissions\CalendarPermissionsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\CalendarPermissions\Item\CalendarPermissionItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\CalendarView\Item\EventItemRequestBuilder as MicrosoftGraphGeneratedGroupsItemCalendarCalendarViewItemEventItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\Events\EventsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\Events\Item\EventItemRequestBuilder as MicrosoftGraphGeneratedGroupsItemCalendarEventsItemEventItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\GetSchedule\GetScheduleRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\MultiValueExtendedProperties\Item\MultiValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\MultiValueExtendedProperties\MultiValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\SingleValueExtendedProperties\Item\SingleValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\SingleValueExtendedProperties\SingleValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Models\Calendar;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class CalendarRequestBuilder 
{
    /**
     * The calendarPermissions property
    */
    public function calendarPermissions(): CalendarPermissionsRequestBuilder {
        return new CalendarPermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendarView property
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The events property
    */
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getSchedule property
    */
    public function getSchedule(): GetScheduleRequestBuilder {
        return new GetScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The multiValueExtendedProperties property
    */
    public function multiValueExtendedProperties(): MultiValueExtendedPropertiesRequestBuilder {
        return new MultiValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The singleValueExtendedProperties property
    */
    public function singleValueExtendedProperties(): SingleValueExtendedPropertiesRequestBuilder {
        return new SingleValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to call the allowedCalendarSharingRoles method.
     * @param string $user Usage: User='{User}'
     * @return AllowedCalendarSharingRolesWithUserRequestBuilder
    */
    public function allowedCalendarSharingRolesWithUser(string $user): AllowedCalendarSharingRolesWithUserRequestBuilder {
        return new AllowedCalendarSharingRolesWithUserRequestBuilder($this->pathParameters, $this->requestAdapter, $user);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.calendar.calendarPermissions.item collection
     * @param string $id Unique identifier of the item
     * @return CalendarPermissionItemRequestBuilder
    */
    public function calendarPermissionsById(string $id): CalendarPermissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendarPermission%2Did'] = $id;
        return new CalendarPermissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.calendar.calendarView.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedGroupsItemCalendarCalendarViewItemEventItemRequestBuilder
    */
    public function calendarViewById(string $id): MicrosoftGraphGeneratedGroupsItemCalendarCalendarViewItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new MicrosoftGraphGeneratedGroupsItemCalendarCalendarViewItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CalendarRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}/calendar{?%24select}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * The group's calendar. Read-only.
     * @param CalendarRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?CalendarRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property calendar in groups
     * @param Calendar $body 
     * @param CalendarRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Calendar $body, ?CalendarRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.calendar.events.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedGroupsItemCalendarEventsItemEventItemRequestBuilder
    */
    public function eventsById(string $id): MicrosoftGraphGeneratedGroupsItemCalendarEventsItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new MicrosoftGraphGeneratedGroupsItemCalendarEventsItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The group's calendar. Read-only.
     * @param CalendarRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?CalendarRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Calendar::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.calendar.multiValueExtendedProperties.item collection
     * @param string $id Unique identifier of the item
     * @return MultiValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function multiValueExtendedPropertiesById(string $id): MultiValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['multiValueLegacyExtendedProperty%2Did'] = $id;
        return new MultiValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property calendar in groups
     * @param Calendar $body 
     * @param CalendarRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Calendar $body, ?CalendarRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Calendar::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.calendar.singleValueExtendedProperties.item collection
     * @param string $id Unique identifier of the item
     * @return SingleValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function singleValueExtendedPropertiesById(string $id): SingleValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['singleValueLegacyExtendedProperty%2Did'] = $id;
        return new SingleValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
