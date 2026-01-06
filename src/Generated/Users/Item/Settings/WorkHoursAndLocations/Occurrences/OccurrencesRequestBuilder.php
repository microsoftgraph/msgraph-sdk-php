<?php

namespace Microsoft\Graph\Generated\Users\Item\Settings\WorkHoursAndLocations\Occurrences;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkPlanOccurrence;
use Microsoft\Graph\Generated\Models\WorkPlanOccurrenceCollectionResponse;
use Microsoft\Graph\Generated\Users\Item\Settings\WorkHoursAndLocations\Occurrences\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Settings\WorkHoursAndLocations\Occurrences\Item\WorkPlanOccurrenceItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Settings\WorkHoursAndLocations\Occurrences\SetCurrentLocation\SetCurrentLocationRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the occurrences property of the microsoft.graph.workHoursAndLocationsSetting entity.
*/
class OccurrencesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setCurrentLocation method.
    */
    public function setCurrentLocation(): SetCurrentLocationRequestBuilder {
        return new SetCurrentLocationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the occurrences property of the microsoft.graph.workHoursAndLocationsSetting entity.
     * @param string $workPlanOccurrenceId The unique identifier of workPlanOccurrence
     * @return WorkPlanOccurrenceItemRequestBuilder
    */
    public function byWorkPlanOccurrenceId(string $workPlanOccurrenceId): WorkPlanOccurrenceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workPlanOccurrence%2Did'] = $workPlanOccurrenceId;
        return new WorkPlanOccurrenceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OccurrencesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/settings/workHoursAndLocations/occurrences{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Collection of work plan occurrences.
     * @param OccurrencesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkPlanOccurrenceCollectionResponse|null>
     * @throws Exception
    */
    public function get(?OccurrencesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkPlanOccurrenceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to occurrences for users
     * @param WorkPlanOccurrence $body The request body
     * @param OccurrencesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkPlanOccurrence|null>
     * @throws Exception
    */
    public function post(WorkPlanOccurrence $body, ?OccurrencesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkPlanOccurrence::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Collection of work plan occurrences.
     * @param OccurrencesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OccurrencesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to occurrences for users
     * @param WorkPlanOccurrence $body The request body
     * @param OccurrencesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WorkPlanOccurrence $body, ?OccurrencesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return OccurrencesRequestBuilder
    */
    public function withUrl(string $rawUrl): OccurrencesRequestBuilder {
        return new OccurrencesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
