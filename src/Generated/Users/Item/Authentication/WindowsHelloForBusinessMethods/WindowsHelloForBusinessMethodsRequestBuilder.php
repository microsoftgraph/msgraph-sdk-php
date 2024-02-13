<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WindowsHelloForBusinessAuthenticationMethodCollectionResponse;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsHelloForBusinessMethods property of the microsoft.graph.authentication entity.
*/
class WindowsHelloForBusinessMethodsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsHelloForBusinessMethods property of the microsoft.graph.authentication entity.
     * @param string $windowsHelloForBusinessAuthenticationMethodId The unique identifier of windowsHelloForBusinessAuthenticationMethod
     * @return WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder
    */
    public function byWindowsHelloForBusinessAuthenticationMethodId(string $windowsHelloForBusinessAuthenticationMethodId): WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsHelloForBusinessAuthenticationMethod%2Did'] = $windowsHelloForBusinessAuthenticationMethodId;
        return new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WindowsHelloForBusinessMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/windowsHelloForBusinessMethods{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the windowsHelloForBusinessAuthenticationMethod objects and their properties.
     * @param WindowsHelloForBusinessMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsHelloForBusinessAuthenticationMethodCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowshelloforbusinessauthenticationmethod-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?WindowsHelloForBusinessMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsHelloForBusinessAuthenticationMethodCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the windowsHelloForBusinessAuthenticationMethod objects and their properties.
     * @param WindowsHelloForBusinessMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsHelloForBusinessMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WindowsHelloForBusinessMethodsRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsHelloForBusinessMethodsRequestBuilder {
        return new WindowsHelloForBusinessMethodsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
