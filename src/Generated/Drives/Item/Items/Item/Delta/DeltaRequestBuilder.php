<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Delta;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the delta method.
*/
class DeltaRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeltaRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/delta(){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Track changes in a driveItem and its children over time. Your app begins by calling delta without any parameters.The service starts enumerating the drive's hierarchy, returning pages of items and either an @odata.nextLink or an @odata.deltaLink, as described below.Your app should continue calling with the @odata.nextLink until you no longer see an @odata.nextLink returned, or you see a response with an empty set of changes. After you have finished receiving all the changes, you may apply them to your local state.To check for changes in the future, call delta again with the @odata.deltaLink from the previous response. Deleted items are returned with the deleted facet.Items with this property set should be removed from your local state.
     * @param DeltaRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeltaGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/driveitem-delta?view=graph-rest-1.0 Find more info here
    */
    public function get(?DeltaRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeltaGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Track changes in a driveItem and its children over time. Your app begins by calling delta without any parameters.The service starts enumerating the drive's hierarchy, returning pages of items and either an @odata.nextLink or an @odata.deltaLink, as described below.Your app should continue calling with the @odata.nextLink until you no longer see an @odata.nextLink returned, or you see a response with an empty set of changes. After you have finished receiving all the changes, you may apply them to your local state.To check for changes in the future, call delta again with the @odata.deltaLink from the previous response. Deleted items are returned with the deleted facet.Items with this property set should be removed from your local state.
     * @param DeltaRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeltaRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeltaRequestBuilder
    */
    public function withUrl(string $rawUrl): DeltaRequestBuilder {
        return new DeltaRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
