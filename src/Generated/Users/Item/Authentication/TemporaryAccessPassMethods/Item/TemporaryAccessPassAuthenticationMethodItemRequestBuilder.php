<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\TemporaryAccessPassMethods\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TemporaryAccessPassAuthenticationMethod;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the temporaryAccessPassMethods property of the microsoft.graph.authentication entity.
*/
class TemporaryAccessPassAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new TemporaryAccessPassAuthenticationMethodItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/temporaryAccessPassMethods/{temporaryAccessPassAuthenticationMethod%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a users's temporaryAccessPassAuthenticationMethod object. This API is available in the following national cloud deployments.
     * @param TemporaryAccessPassAuthenticationMethodItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/temporaryaccesspassauthenticationmethod-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?TemporaryAccessPassAuthenticationMethodItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve a user's single temporaryAccessPassAuthenticationMethod object. This API is available in the following national cloud deployments.
     * @param TemporaryAccessPassAuthenticationMethodItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TemporaryAccessPassAuthenticationMethod|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/temporaryaccesspassauthenticationmethod-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?TemporaryAccessPassAuthenticationMethodItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TemporaryAccessPassAuthenticationMethod::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a users's temporaryAccessPassAuthenticationMethod object. This API is available in the following national cloud deployments.
     * @param TemporaryAccessPassAuthenticationMethodItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?TemporaryAccessPassAuthenticationMethodItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Retrieve a user's single temporaryAccessPassAuthenticationMethod object. This API is available in the following national cloud deployments.
     * @param TemporaryAccessPassAuthenticationMethodItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TemporaryAccessPassAuthenticationMethodItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TemporaryAccessPassAuthenticationMethodItemRequestBuilder
    */
    public function withUrl(string $rawUrl): TemporaryAccessPassAuthenticationMethodItemRequestBuilder {
        return new TemporaryAccessPassAuthenticationMethodItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
