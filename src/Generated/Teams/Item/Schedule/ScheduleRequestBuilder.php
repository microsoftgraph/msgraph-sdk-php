<?php

namespace Microsoft\Graph\Generated\Teams\Item\Schedule;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Schedule;
use Microsoft\Graph\Generated\Teams\Item\Schedule\MicrosoftGraphShare\ShareRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\OfferShiftRequests\Item\OfferShiftRequestItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\OfferShiftRequests\OfferShiftRequestsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\OpenShiftChangeRequests\Item\OpenShiftChangeRequestItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\OpenShiftChangeRequests\OpenShiftChangeRequestsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\OpenShifts\Item\OpenShiftItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\OpenShifts\OpenShiftsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\SchedulingGroups\Item\SchedulingGroupItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\SchedulingGroups\SchedulingGroupsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\Shifts\Item\ShiftItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\Shifts\ShiftsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\SwapShiftsChangeRequests\Item\SwapShiftsChangeRequestItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\SwapShiftsChangeRequests\SwapShiftsChangeRequestsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\TimeOffReasons\Item\TimeOffReasonItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\TimeOffReasons\TimeOffReasonsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\TimeOffRequests\Item\TimeOffRequestItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\TimeOffRequests\TimeOffRequestsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\TimesOff\Item\TimeOffItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\TimesOff\TimesOffRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the schedule property of the microsoft.graph.team entity.
*/
class ScheduleRequestBuilder 
{
    /**
     * Provides operations to call the share method.
    */
    public function microsoftGraphShare(): ShareRequestBuilder {
        return new ShareRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the offerShiftRequests property of the microsoft.graph.schedule entity.
    */
    public function offerShiftRequests(): OfferShiftRequestsRequestBuilder {
        return new OfferShiftRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the openShiftChangeRequests property of the microsoft.graph.schedule entity.
    */
    public function openShiftChangeRequests(): OpenShiftChangeRequestsRequestBuilder {
        return new OpenShiftChangeRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the openShifts property of the microsoft.graph.schedule entity.
    */
    public function openShifts(): OpenShiftsRequestBuilder {
        return new OpenShiftsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the schedulingGroups property of the microsoft.graph.schedule entity.
    */
    public function schedulingGroups(): SchedulingGroupsRequestBuilder {
        return new SchedulingGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the shifts property of the microsoft.graph.schedule entity.
    */
    public function shifts(): ShiftsRequestBuilder {
        return new ShiftsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the swapShiftsChangeRequests property of the microsoft.graph.schedule entity.
    */
    public function swapShiftsChangeRequests(): SwapShiftsChangeRequestsRequestBuilder {
        return new SwapShiftsChangeRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the timeOffReasons property of the microsoft.graph.schedule entity.
    */
    public function timeOffReasons(): TimeOffReasonsRequestBuilder {
        return new TimeOffReasonsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the timeOffRequests property of the microsoft.graph.schedule entity.
    */
    public function timeOffRequests(): TimeOffRequestsRequestBuilder {
        return new TimeOffRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the timesOff property of the microsoft.graph.schedule entity.
    */
    public function timesOff(): TimesOffRequestBuilder {
        return new TimesOffRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ScheduleRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/teams/{team%2Did}/schedule{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property schedule for teams
     * @param ScheduleRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ScheduleRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve the properties and relationships of a schedule object. The schedule creation process conforms to the One API guideline for resource based long running operations (RELO).When clients use the PUT method, if the schedule is provisioned, the operation updates the schedule; otherwise, the operation starts the schedule provisioning process in the background. During schedule provisioning, clients can use the GET method to get the schedule and look at the `provisionStatus` property for the current state of the provisioning. If the provisioning failed, clients can get additional information from the `provisionStatusCode` property. Clients can also inspect the configuration of the schedule.
     * @param ScheduleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/schedule-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ScheduleRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Schedule::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the offerShiftRequests property of the microsoft.graph.schedule entity.
     * @param string $id Unique identifier of the item
     * @return OfferShiftRequestItemRequestBuilder
    */
    public function offerShiftRequestsById(string $id): OfferShiftRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['offerShiftRequest%2Did'] = $id;
        return new OfferShiftRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the openShiftChangeRequests property of the microsoft.graph.schedule entity.
     * @param string $id Unique identifier of the item
     * @return OpenShiftChangeRequestItemRequestBuilder
    */
    public function openShiftChangeRequestsById(string $id): OpenShiftChangeRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['openShiftChangeRequest%2Did'] = $id;
        return new OpenShiftChangeRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the openShifts property of the microsoft.graph.schedule entity.
     * @param string $id Unique identifier of the item
     * @return OpenShiftItemRequestBuilder
    */
    public function openShiftsById(string $id): OpenShiftItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['openShift%2Did'] = $id;
        return new OpenShiftItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property schedule in teams
     * @param ScheduleRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function put(Schedule $body, ?ScheduleRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Schedule::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the schedulingGroups property of the microsoft.graph.schedule entity.
     * @param string $id Unique identifier of the item
     * @return SchedulingGroupItemRequestBuilder
    */
    public function schedulingGroupsById(string $id): SchedulingGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['schedulingGroup%2Did'] = $id;
        return new SchedulingGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the shifts property of the microsoft.graph.schedule entity.
     * @param string $id Unique identifier of the item
     * @return ShiftItemRequestBuilder
    */
    public function shiftsById(string $id): ShiftItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['shift%2Did'] = $id;
        return new ShiftItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the swapShiftsChangeRequests property of the microsoft.graph.schedule entity.
     * @param string $id Unique identifier of the item
     * @return SwapShiftsChangeRequestItemRequestBuilder
    */
    public function swapShiftsChangeRequestsById(string $id): SwapShiftsChangeRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['swapShiftsChangeRequest%2Did'] = $id;
        return new SwapShiftsChangeRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the timeOffReasons property of the microsoft.graph.schedule entity.
     * @param string $id Unique identifier of the item
     * @return TimeOffReasonItemRequestBuilder
    */
    public function timeOffReasonsById(string $id): TimeOffReasonItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['timeOffReason%2Did'] = $id;
        return new TimeOffReasonItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the timeOffRequests property of the microsoft.graph.schedule entity.
     * @param string $id Unique identifier of the item
     * @return TimeOffRequestItemRequestBuilder
    */
    public function timeOffRequestsById(string $id): TimeOffRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['timeOffRequest%2Did'] = $id;
        return new TimeOffRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the timesOff property of the microsoft.graph.schedule entity.
     * @param string $id Unique identifier of the item
     * @return TimeOffItemRequestBuilder
    */
    public function timesOffById(string $id): TimeOffItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['timeOff%2Did'] = $id;
        return new TimeOffItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property schedule for teams
     * @param ScheduleRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ScheduleRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of a schedule object. The schedule creation process conforms to the One API guideline for resource based long running operations (RELO).When clients use the PUT method, if the schedule is provisioned, the operation updates the schedule; otherwise, the operation starts the schedule provisioning process in the background. During schedule provisioning, clients can use the GET method to get the schedule and look at the `provisionStatus` property for the current state of the provisioning. If the provisioning failed, clients can get additional information from the `provisionStatusCode` property. Clients can also inspect the configuration of the schedule.
     * @param ScheduleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ScheduleRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * Update the navigation property schedule in teams
     * @param ScheduleRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(Schedule $body, ?ScheduleRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
