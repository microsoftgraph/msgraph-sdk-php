<?php

namespace Microsoft\\Graph\\Generated\Solutions\VirtualEvents\Webinars\Item\Presenters;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\VirtualEventPresenter;
use Microsoft\\Graph\\Generated\Models\VirtualEventPresenterCollectionResponse;
use Microsoft\\Graph\\Generated\Solutions\VirtualEvents\Webinars\Item\Presenters\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Solutions\VirtualEvents\Webinars\Item\Presenters\Item\VirtualEventPresenterItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the presenters property of the microsoft.graph.virtualEvent entity.
*/
class PresentersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the presenters property of the microsoft.graph.virtualEvent entity.
     * @param string $virtualEventPresenterId The unique identifier of virtualEventPresenter
     * @return VirtualEventPresenterItemRequestBuilder
    */
    public function byVirtualEventPresenterId(string $virtualEventPresenterId): VirtualEventPresenterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['virtualEventPresenter%2Did'] = $virtualEventPresenterId;
        return new VirtualEventPresenterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PresentersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/virtualEvents/webinars/{virtualEventWebinar%2Did}/presenters{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The virtual event presenters.
     * @param PresentersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEventPresenterCollectionResponse|null>
     * @throws Exception
    */
    public function get(?PresentersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEventPresenterCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new virtualEventPresenter object on a virtual event. Currently, the following types of virtual events are supported: - virtualEventTownhall- virtualEventWebinar
     * @param VirtualEventPresenter $body The request body
     * @param PresentersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEventPresenter|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualevent-post-presenters?view=graph-rest-1.0 Find more info here
    */
    public function post(VirtualEventPresenter $body, ?PresentersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEventPresenter::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The virtual event presenters.
     * @param PresentersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PresentersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new virtualEventPresenter object on a virtual event. Currently, the following types of virtual events are supported: - virtualEventTownhall- virtualEventWebinar
     * @param VirtualEventPresenter $body The request body
     * @param PresentersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VirtualEventPresenter $body, ?PresentersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PresentersRequestBuilder
    */
    public function withUrl(string $rawUrl): PresentersRequestBuilder {
        return new PresentersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
