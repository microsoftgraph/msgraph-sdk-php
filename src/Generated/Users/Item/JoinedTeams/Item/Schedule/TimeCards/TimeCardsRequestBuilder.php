<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Schedule\TimeCards;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TimeCard;
use Microsoft\Graph\Generated\Models\TimeCardCollectionResponse;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Schedule\TimeCards\ClockIn\ClockInRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Schedule\TimeCards\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Schedule\TimeCards\Item\TimeCardItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the timeCards property of the microsoft.graph.schedule entity.
*/
class TimeCardsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the clockIn method.
    */
    public function clockIn(): ClockInRequestBuilder {
        return new ClockInRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the timeCards property of the microsoft.graph.schedule entity.
     * @param string $timeCardId The unique identifier of timeCard
     * @return TimeCardItemRequestBuilder
    */
    public function byTimeCardId(string $timeCardId): TimeCardItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['timeCard%2Did'] = $timeCardId;
        return new TimeCardItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TimeCardsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/joinedTeams/{team%2Did}/schedule/timeCards{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The time cards in the schedule.
     * @param TimeCardsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TimeCardCollectionResponse|null>
     * @throws Exception
    */
    public function get(?TimeCardsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TimeCardCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to timeCards for users
     * @param TimeCard $body The request body
     * @param TimeCardsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TimeCard|null>
     * @throws Exception
    */
    public function post(TimeCard $body, ?TimeCardsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TimeCard::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The time cards in the schedule.
     * @param TimeCardsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TimeCardsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to timeCards for users
     * @param TimeCard $body The request body
     * @param TimeCardsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TimeCard $body, ?TimeCardsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TimeCardsRequestBuilder
    */
    public function withUrl(string $rawUrl): TimeCardsRequestBuilder {
        return new TimeCardsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
