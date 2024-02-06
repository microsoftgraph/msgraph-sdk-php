<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilitySchedules;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilitySchedules\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilitySchedules\FilterByCurrentUserWithOn\FilterByCurrentUserWithOnRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilitySchedules\Item\PrivilegedAccessGroupEligibilityScheduleItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PrivilegedAccessGroupEligibilitySchedule;
use Microsoft\Graph\Generated\Models\PrivilegedAccessGroupEligibilityScheduleCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the eligibilitySchedules property of the microsoft.graph.privilegedAccessGroup entity.
*/
class EligibilitySchedulesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the eligibilitySchedules property of the microsoft.graph.privilegedAccessGroup entity.
     * @param string $privilegedAccessGroupEligibilityScheduleId The unique identifier of privilegedAccessGroupEligibilitySchedule
     * @return PrivilegedAccessGroupEligibilityScheduleItemRequestBuilder
    */
    public function byPrivilegedAccessGroupEligibilityScheduleId(string $privilegedAccessGroupEligibilityScheduleId): PrivilegedAccessGroupEligibilityScheduleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedAccessGroupEligibilitySchedule%2Did'] = $privilegedAccessGroupEligibilityScheduleId;
        return new PrivilegedAccessGroupEligibilityScheduleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EligibilitySchedulesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/privilegedAccess/group/eligibilitySchedules{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to call the filterByCurrentUser method.
     * @param string $on Usage: on='{on}'
     * @return FilterByCurrentUserWithOnRequestBuilder
    */
    public function filterByCurrentUserWithOn(string $on): FilterByCurrentUserWithOnRequestBuilder {
        return new FilterByCurrentUserWithOnRequestBuilder($this->pathParameters, $this->requestAdapter, $on);
    }

    /**
     * Get a list of the privilegedAccessGroupEligibilitySchedule objects and their properties.
     * @param EligibilitySchedulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupEligibilityScheduleCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/privilegedaccessgroup-list-eligibilityschedules?view=graph-rest-1.0 Find more info here
    */
    public function get(?EligibilitySchedulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupEligibilityScheduleCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to eligibilitySchedules for identityGovernance
     * @param PrivilegedAccessGroupEligibilitySchedule $body The request body
     * @param EligibilitySchedulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupEligibilitySchedule|null>
     * @throws Exception
    */
    public function post(PrivilegedAccessGroupEligibilitySchedule $body, ?EligibilitySchedulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupEligibilitySchedule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the privilegedAccessGroupEligibilitySchedule objects and their properties.
     * @param EligibilitySchedulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EligibilitySchedulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to eligibilitySchedules for identityGovernance
     * @param PrivilegedAccessGroupEligibilitySchedule $body The request body
     * @param EligibilitySchedulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PrivilegedAccessGroupEligibilitySchedule $body, ?EligibilitySchedulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EligibilitySchedulesRequestBuilder
    */
    public function withUrl(string $rawUrl): EligibilitySchedulesRequestBuilder {
        return new EligibilitySchedulesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
