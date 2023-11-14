<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\Item\DefaultPages;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\Item\DefaultPages\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\Item\DefaultPages\Item\UserFlowLanguagePageItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserFlowLanguagePage;
use Microsoft\Graph\Generated\Models\UserFlowLanguagePageCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the defaultPages property of the microsoft.graph.userFlowLanguageConfiguration entity.
*/
class DefaultPagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the defaultPages property of the microsoft.graph.userFlowLanguageConfiguration entity.
     * @param string $userFlowLanguagePageId The unique identifier of userFlowLanguagePage
     * @return UserFlowLanguagePageItemRequestBuilder
    */
    public function byUserFlowLanguagePageId(string $userFlowLanguagePageId): UserFlowLanguagePageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userFlowLanguagePage%2Did'] = $userFlowLanguagePageId;
        return new UserFlowLanguagePageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DefaultPagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/b2xUserFlows/{b2xIdentityUserFlow%2Did}/languages/{userFlowLanguageConfiguration%2Did}/defaultPages{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Collection of pages with the default content to display in a user flow for a specified language. This collection doesn't allow any kind of modification.
     * @param DefaultPagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserFlowLanguagePageCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DefaultPagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserFlowLanguagePageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to defaultPages for identity
     * @param UserFlowLanguagePage $body The request body
     * @param DefaultPagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserFlowLanguagePage|null>
     * @throws Exception
    */
    public function post(UserFlowLanguagePage $body, ?DefaultPagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserFlowLanguagePage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Collection of pages with the default content to display in a user flow for a specified language. This collection doesn't allow any kind of modification.
     * @param DefaultPagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DefaultPagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to defaultPages for identity
     * @param UserFlowLanguagePage $body The request body
     * @param DefaultPagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserFlowLanguagePage $body, ?DefaultPagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DefaultPagesRequestBuilder
    */
    public function withUrl(string $rawUrl): DefaultPagesRequestBuilder {
        return new DefaultPagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
