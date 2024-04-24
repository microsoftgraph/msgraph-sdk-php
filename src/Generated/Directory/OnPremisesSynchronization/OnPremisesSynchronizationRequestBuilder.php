<?php

namespace Microsoft\Graph\Generated\Directory\OnPremisesSynchronization;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\OnPremisesSynchronization\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Directory\OnPremisesSynchronization\Item\OnPremisesDirectorySynchronizationItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OnPremisesDirectorySynchronization;
use Microsoft\Graph\Generated\Models\OnPremisesDirectorySynchronizationCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the onPremisesSynchronization property of the microsoft.graph.directory entity.
*/
class OnPremisesSynchronizationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onPremisesSynchronization property of the microsoft.graph.directory entity.
     * @param string $onPremisesDirectorySynchronizationId The unique identifier of onPremisesDirectorySynchronization
     * @return OnPremisesDirectorySynchronizationItemRequestBuilder
    */
    public function byOnPremisesDirectorySynchronizationId(string $onPremisesDirectorySynchronizationId): OnPremisesDirectorySynchronizationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onPremisesDirectorySynchronization%2Did'] = $onPremisesDirectorySynchronizationId;
        return new OnPremisesDirectorySynchronizationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OnPremisesSynchronizationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/onPremisesSynchronization{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A container for on-premises directory synchronization functionalities that are available for the organization.
     * @param OnPremisesSynchronizationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnPremisesDirectorySynchronizationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?OnPremisesSynchronizationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnPremisesDirectorySynchronizationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to onPremisesSynchronization for directory
     * @param OnPremisesDirectorySynchronization $body The request body
     * @param OnPremisesSynchronizationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnPremisesDirectorySynchronization|null>
     * @throws Exception
    */
    public function post(OnPremisesDirectorySynchronization $body, ?OnPremisesSynchronizationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnPremisesDirectorySynchronization::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A container for on-premises directory synchronization functionalities that are available for the organization.
     * @param OnPremisesSynchronizationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnPremisesSynchronizationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to onPremisesSynchronization for directory
     * @param OnPremisesDirectorySynchronization $body The request body
     * @param OnPremisesSynchronizationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OnPremisesDirectorySynchronization $body, ?OnPremisesSynchronizationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OnPremisesSynchronizationRequestBuilder
    */
    public function withUrl(string $rawUrl): OnPremisesSynchronizationRequestBuilder {
        return new OnPremisesSynchronizationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
