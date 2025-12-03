<?php

namespace Microsoft\Graph\Generated\Places\Item\GraphRoomList\Workspaces\Item\CheckIns;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\CheckInClaim;
use Microsoft\Graph\Generated\Models\CheckInClaimCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Places\Item\GraphRoomList\Workspaces\Item\CheckIns\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Places\Item\GraphRoomList\Workspaces\Item\CheckIns\Item\CheckInClaimCalendarEventItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the checkIns property of the microsoft.graph.place entity.
*/
class CheckInsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the checkIns property of the microsoft.graph.place entity.
     * @param string $checkInClaimCalendarEventId The unique identifier of checkInClaim
     * @return CheckInClaimCalendarEventItemRequestBuilder
    */
    public function byCheckInClaimCalendarEventId(string $checkInClaimCalendarEventId): CheckInClaimCalendarEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['checkInClaim%2DcalendarEventId'] = $checkInClaimCalendarEventId;
        return new CheckInClaimCalendarEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CheckInsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/places/{place%2Did}/graph.roomList/workspaces/{workspace%2Did}/checkIns{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get checkIns from places
     * @param CheckInsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CheckInClaimCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CheckInsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CheckInClaimCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to checkIns for places
     * @param CheckInClaim $body The request body
     * @param CheckInsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CheckInClaim|null>
     * @throws Exception
    */
    public function post(CheckInClaim $body, ?CheckInsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CheckInClaim::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get checkIns from places
     * @param CheckInsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CheckInsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to checkIns for places
     * @param CheckInClaim $body The request body
     * @param CheckInsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CheckInClaim $body, ?CheckInsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CheckInsRequestBuilder
    */
    public function withUrl(string $rawUrl): CheckInsRequestBuilder {
        return new CheckInsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
