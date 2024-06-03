<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\GetActivitiesByInterval;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getActivitiesByInterval method.
*/
class GetActivitiesByIntervalRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetActivitiesByIntervalRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/containers/{fileStorageContainer%2Did}/drive/items/{driveItem%2Did}/getActivitiesByInterval(){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a collection of itemActivityStats resources for the activities that took place on this resource within the specified time interval. Analytics aggregates might not be available for all action types.
     * @param GetActivitiesByIntervalRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetActivitiesByIntervalGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/itemactivitystat-getactivitybyinterval?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetActivitiesByIntervalRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetActivitiesByIntervalGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a collection of itemActivityStats resources for the activities that took place on this resource within the specified time interval. Analytics aggregates might not be available for all action types.
     * @param GetActivitiesByIntervalRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetActivitiesByIntervalRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetActivitiesByIntervalRequestBuilder
    */
    public function withUrl(string $rawUrl): GetActivitiesByIntervalRequestBuilder {
        return new GetActivitiesByIntervalRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
