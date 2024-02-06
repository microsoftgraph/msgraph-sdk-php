<?php

namespace Microsoft\Graph\Generated\IdentityProviders;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityProviders\AvailableProviderTypes\AvailableProviderTypesRequestBuilder;
use Microsoft\Graph\Generated\IdentityProviders\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityProviders\Item\IdentityProviderItemRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityProvider;
use Microsoft\Graph\Generated\Models\IdentityProviderCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of identityProvider entities.
*/
class IdentityProvidersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the availableProviderTypes method.
    */
    public function availableProviderTypes(): AvailableProviderTypesRequestBuilder {
        return new AvailableProviderTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of identityProvider entities.
     * @param string $identityProviderId The unique identifier of identityProvider
     * @return IdentityProviderItemRequestBuilder
    */
    public function byIdentityProviderId(string $identityProviderId): IdentityProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProvider%2Did'] = $identityProviderId;
        return new IdentityProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IdentityProvidersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityProviders{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve all identityProviders in the directory.
     * @param IdentityProvidersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityProviderCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityprovider-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?IdentityProvidersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityProviderCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new identityProvider by specifying display name, identityProvider type, client ID, and client secret.
     * @param IdentityProvider $body The request body
     * @param IdentityProvidersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityProvider|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityprovider-post-identityproviders?view=graph-rest-1.0 Find more info here
    */
    public function post(IdentityProvider $body, ?IdentityProvidersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityProvider::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve all identityProviders in the directory.
     * @param IdentityProvidersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IdentityProvidersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new identityProvider by specifying display name, identityProvider type, client ID, and client secret.
     * @param IdentityProvider $body The request body
     * @param IdentityProvidersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(IdentityProvider $body, ?IdentityProvidersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IdentityProvidersRequestBuilder
    */
    public function withUrl(string $rawUrl): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
