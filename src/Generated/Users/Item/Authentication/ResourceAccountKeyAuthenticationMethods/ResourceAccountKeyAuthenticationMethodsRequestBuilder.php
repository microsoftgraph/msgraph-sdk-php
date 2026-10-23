<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\ResourceAccountKeyAuthenticationMethods;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ResourceAccountKeyAuthenticationMethodCollectionResponse;
use Microsoft\Graph\Generated\Users\Item\Authentication\ResourceAccountKeyAuthenticationMethods\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\ResourceAccountKeyAuthenticationMethods\Item\ResourceAccountKeyAuthenticationMethodItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the resourceAccountKeyAuthenticationMethods property of the microsoft.graph.authentication entity.
*/
class ResourceAccountKeyAuthenticationMethodsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resourceAccountKeyAuthenticationMethods property of the microsoft.graph.authentication entity.
     * @param string $resourceAccountKeyAuthenticationMethodId The unique identifier of resourceAccountKeyAuthenticationMethod
     * @return ResourceAccountKeyAuthenticationMethodItemRequestBuilder
    */
    public function byResourceAccountKeyAuthenticationMethodId(string $resourceAccountKeyAuthenticationMethodId): ResourceAccountKeyAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceAccountKeyAuthenticationMethod%2Did'] = $resourceAccountKeyAuthenticationMethodId;
        return new ResourceAccountKeyAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ResourceAccountKeyAuthenticationMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/resourceAccountKeyAuthenticationMethods{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of the resourceAccountKeyAuthenticationMethod objects and their properties for a resource account.
     * @param ResourceAccountKeyAuthenticationMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ResourceAccountKeyAuthenticationMethodCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authentication-list-resourceaccountkeyauthenticationmethods?view=graph-rest-1.0 Find more info here
    */
    public function get(?ResourceAccountKeyAuthenticationMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ResourceAccountKeyAuthenticationMethodCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of the resourceAccountKeyAuthenticationMethod objects and their properties for a resource account.
     * @param ResourceAccountKeyAuthenticationMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ResourceAccountKeyAuthenticationMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ResourceAccountKeyAuthenticationMethodsRequestBuilder
    */
    public function withUrl(string $rawUrl): ResourceAccountKeyAuthenticationMethodsRequestBuilder {
        return new ResourceAccountKeyAuthenticationMethodsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
