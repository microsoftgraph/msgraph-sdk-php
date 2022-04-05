<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\OfferShiftRequests\Item\OfferShiftRequestItemRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\OfferShiftRequests\OfferShiftRequestsRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\OpenShiftChangeRequests\Item\OpenShiftChangeRequestItemRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\OpenShiftChangeRequests\OpenShiftChangeRequestsRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\OpenShifts\Item\OpenShiftItemRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\OpenShifts\OpenShiftsRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\SchedulingGroups\Item\SchedulingGroupItemRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\SchedulingGroups\SchedulingGroupsRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\Share\ShareRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\Shifts\Item\ShiftItemRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\Shifts\ShiftsRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\SwapShiftsChangeRequests\Item\SwapShiftsChangeRequestItemRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\SwapShiftsChangeRequests\SwapShiftsChangeRequestsRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\TimeOffReasons\Item\TimeOffReasonItemRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\TimeOffReasons\TimeOffReasonsRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\TimeOffRequests\Item\TimeOffRequestItemRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\TimeOffRequests\TimeOffRequestsRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\TimesOff\Item\TimeOffItemRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\TimesOff\TimesOffRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Schedule;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ScheduleRequestBuilder 
{
    /**
     * The offerShiftRequests property
    */
    public function offerShiftRequests(): OfferShiftRequestsRequestBuilder {
        return new OfferShiftRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The openShiftChangeRequests property
    */
    public function openShiftChangeRequests(): OpenShiftChangeRequestsRequestBuilder {
        return new OpenShiftChangeRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The openShifts property
    */
    public function openShifts(): OpenShiftsRequestBuilder {
        return new OpenShiftsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The schedulingGroups property
    */
    public function schedulingGroups(): SchedulingGroupsRequestBuilder {
        return new SchedulingGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The share property
    */
    public function share(): ShareRequestBuilder {
        return new ShareRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The shifts property
    */
    public function shifts(): ShiftsRequestBuilder {
        return new ShiftsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The swapShiftsChangeRequests property
    */
    public function swapShiftsChangeRequests(): SwapShiftsChangeRequestsRequestBuilder {
        return new SwapShiftsChangeRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The timeOffReasons property
    */
    public function timeOffReasons(): TimeOffReasonsRequestBuilder {
        return new TimeOffReasonsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The timeOffRequests property
    */
    public function timeOffRequests(): TimeOffRequestsRequestBuilder {
        return new TimeOffRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The timesOff property
    */
    public function timesOff(): TimesOffRequestBuilder {
        return new TimesOffRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ScheduleRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/joinedTeams/{team_id}/schedule{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property schedule for me
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * The schedule of shifts for this team.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property schedule in me
     * @param Schedule $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Schedule $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property schedule for me
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The schedule of shifts for this team.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Schedule::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.me.joinedTeams.item.schedule.offerShiftRequests.item collection
     * @param string $id Unique identifier of the item
     * @return OfferShiftRequestItemRequestBuilder
    */
    public function offerShiftRequestsById(string $id): OfferShiftRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['offerShiftRequest_id'] = $id;
        return new OfferShiftRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.me.joinedTeams.item.schedule.openShiftChangeRequests.item collection
     * @param string $id Unique identifier of the item
     * @return OpenShiftChangeRequestItemRequestBuilder
    */
    public function openShiftChangeRequestsById(string $id): OpenShiftChangeRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['openShiftChangeRequest_id'] = $id;
        return new OpenShiftChangeRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.me.joinedTeams.item.schedule.openShifts.item collection
     * @param string $id Unique identifier of the item
     * @return OpenShiftItemRequestBuilder
    */
    public function openShiftsById(string $id): OpenShiftItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['openShift_id'] = $id;
        return new OpenShiftItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property schedule in me
     * @param Schedule $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Schedule $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.me.joinedTeams.item.schedule.schedulingGroups.item collection
     * @param string $id Unique identifier of the item
     * @return SchedulingGroupItemRequestBuilder
    */
    public function schedulingGroupsById(string $id): SchedulingGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['schedulingGroup_id'] = $id;
        return new SchedulingGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.me.joinedTeams.item.schedule.shifts.item collection
     * @param string $id Unique identifier of the item
     * @return ShiftItemRequestBuilder
    */
    public function shiftsById(string $id): ShiftItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['shift_id'] = $id;
        return new ShiftItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.me.joinedTeams.item.schedule.swapShiftsChangeRequests.item collection
     * @param string $id Unique identifier of the item
     * @return SwapShiftsChangeRequestItemRequestBuilder
    */
    public function swapShiftsChangeRequestsById(string $id): SwapShiftsChangeRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['swapShiftsChangeRequest_id'] = $id;
        return new SwapShiftsChangeRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.me.joinedTeams.item.schedule.timeOffReasons.item collection
     * @param string $id Unique identifier of the item
     * @return TimeOffReasonItemRequestBuilder
    */
    public function timeOffReasonsById(string $id): TimeOffReasonItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['timeOffReason_id'] = $id;
        return new TimeOffReasonItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.me.joinedTeams.item.schedule.timeOffRequests.item collection
     * @param string $id Unique identifier of the item
     * @return TimeOffRequestItemRequestBuilder
    */
    public function timeOffRequestsById(string $id): TimeOffRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['timeOffRequest_id'] = $id;
        return new TimeOffRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.me.joinedTeams.item.schedule.timesOff.item collection
     * @param string $id Unique identifier of the item
     * @return TimeOffItemRequestBuilder
    */
    public function timesOffById(string $id): TimeOffItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['timeOff_id'] = $id;
        return new TimeOffItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
