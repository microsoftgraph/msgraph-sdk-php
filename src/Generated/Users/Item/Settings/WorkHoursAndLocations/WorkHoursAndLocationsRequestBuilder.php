<?php

namespace Microsoft\Graph\Generated\Users\Item\Settings\WorkHoursAndLocations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkHoursAndLocationsSetting;
use Microsoft\Graph\Generated\Users\Item\Settings\WorkHoursAndLocations\Occurrences\OccurrencesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Settings\WorkHoursAndLocations\OccurrencesViewWithStartDateTimeWithEndDateTime\OccurrencesViewWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Settings\WorkHoursAndLocations\Recurrences\RecurrencesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the workHoursAndLocations property of the microsoft.graph.userSettings entity.
*/
class WorkHoursAndLocationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the occurrences property of the microsoft.graph.workHoursAndLocationsSetting entity.
    */
    public function occurrences(): OccurrencesRequestBuilder {
        return new OccurrencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the recurrences property of the microsoft.graph.workHoursAndLocationsSetting entity.
    */
    public function recurrences(): RecurrencesRequestBuilder {
        return new RecurrencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WorkHoursAndLocationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/settings/workHoursAndLocations{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The user's settings for work hours and location preferences for scheduling and availability management.
     * @param WorkHoursAndLocationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkHoursAndLocationsSetting|null>
     * @throws Exception
    */
    public function get(?WorkHoursAndLocationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkHoursAndLocationsSetting::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the occurrencesView method.
     * @param string $endDateTime Usage: endDateTime='{endDateTime}'
     * @param string $startDateTime Usage: startDateTime='{startDateTime}'
     * @return OccurrencesViewWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function occurrencesViewWithStartDateTimeWithEndDateTime(string $endDateTime, string $startDateTime): OccurrencesViewWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new OccurrencesViewWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Update the navigation property workHoursAndLocations in users
     * @param WorkHoursAndLocationsSetting $body The request body
     * @param WorkHoursAndLocationsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkHoursAndLocationsSetting|null>
     * @throws Exception
    */
    public function patch(WorkHoursAndLocationsSetting $body, ?WorkHoursAndLocationsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkHoursAndLocationsSetting::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The user's settings for work hours and location preferences for scheduling and availability management.
     * @param WorkHoursAndLocationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorkHoursAndLocationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property workHoursAndLocations in users
     * @param WorkHoursAndLocationsSetting $body The request body
     * @param WorkHoursAndLocationsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WorkHoursAndLocationsSetting $body, ?WorkHoursAndLocationsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WorkHoursAndLocationsRequestBuilder
    */
    public function withUrl(string $rawUrl): WorkHoursAndLocationsRequestBuilder {
        return new WorkHoursAndLocationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
