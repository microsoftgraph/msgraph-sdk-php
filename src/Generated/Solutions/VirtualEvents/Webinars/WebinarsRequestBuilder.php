<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\VirtualEventWebinar;
use Microsoft\Graph\Generated\Models\VirtualEventWebinarCollectionResponse;
use Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\GetByUserIdAndRoleWithUserIdWithRole\GetByUserIdAndRoleWithUserIdWithRoleRequestBuilder;
use Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\GetByUserRoleWithRole\GetByUserRoleWithRoleRequestBuilder;
use Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\VirtualEventWebinarItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the webinars property of the microsoft.graph.virtualEventsRoot entity.
*/
class WebinarsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the webinars property of the microsoft.graph.virtualEventsRoot entity.
     * @param string $virtualEventWebinarId The unique identifier of virtualEventWebinar
     * @return VirtualEventWebinarItemRequestBuilder
    */
    public function byVirtualEventWebinarId(string $virtualEventWebinarId): VirtualEventWebinarItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['virtualEventWebinar%2Did'] = $virtualEventWebinarId;
        return new VirtualEventWebinarItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WebinarsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/virtualEvents/webinars{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get webinars from solutions
     * @param WebinarsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEventWebinarCollectionResponse|null>
     * @throws Exception
    */
    public function get(?WebinarsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEventWebinarCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getByUserIdAndRole method.
     * @param string $role Usage: role='{role}'
     * @param string $userId Usage: userId='{userId}'
     * @return GetByUserIdAndRoleWithUserIdWithRoleRequestBuilder
    */
    public function getByUserIdAndRoleWithUserIdWithRole(string $role, string $userId): GetByUserIdAndRoleWithUserIdWithRoleRequestBuilder {
        return new GetByUserIdAndRoleWithUserIdWithRoleRequestBuilder($this->pathParameters, $this->requestAdapter, $role, $userId);
    }

    /**
     * Provides operations to call the getByUserRole method.
     * @param string $role Usage: role='{role}'
     * @return GetByUserRoleWithRoleRequestBuilder
    */
    public function getByUserRoleWithRole(string $role): GetByUserRoleWithRoleRequestBuilder {
        return new GetByUserRoleWithRoleRequestBuilder($this->pathParameters, $this->requestAdapter, $role);
    }

    /**
     * Create new navigation property to webinars for solutions
     * @param VirtualEventWebinar $body The request body
     * @param WebinarsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEventWebinar|null>
     * @throws Exception
    */
    public function post(VirtualEventWebinar $body, ?WebinarsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEventWebinar::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get webinars from solutions
     * @param WebinarsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WebinarsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to webinars for solutions
     * @param VirtualEventWebinar $body The request body
     * @param WebinarsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VirtualEventWebinar $body, ?WebinarsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WebinarsRequestBuilder
    */
    public function withUrl(string $rawUrl): WebinarsRequestBuilder {
        return new WebinarsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
