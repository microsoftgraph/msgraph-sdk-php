<?php

namespace Microsoft\\Graph\\Generated\Users\Item\Authentication\PlatformCredentialMethods;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\PlatformCredentialAuthenticationMethodCollectionResponse;
use Microsoft\\Graph\\Generated\Users\Item\Authentication\PlatformCredentialMethods\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Users\Item\Authentication\PlatformCredentialMethods\Item\PlatformCredentialAuthenticationMethodItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the platformCredentialMethods property of the microsoft.graph.authentication entity.
*/
class PlatformCredentialMethodsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the platformCredentialMethods property of the microsoft.graph.authentication entity.
     * @param string $platformCredentialAuthenticationMethodId The unique identifier of platformCredentialAuthenticationMethod
     * @return PlatformCredentialAuthenticationMethodItemRequestBuilder
    */
    public function byPlatformCredentialAuthenticationMethodId(string $platformCredentialAuthenticationMethodId): PlatformCredentialAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['platformCredentialAuthenticationMethod%2Did'] = $platformCredentialAuthenticationMethodId;
        return new PlatformCredentialAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PlatformCredentialMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/platformCredentialMethods{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Represents a platform credential instance registered to a user on Mac OS.
     * @param PlatformCredentialMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PlatformCredentialAuthenticationMethodCollectionResponse|null>
     * @throws Exception
    */
    public function get(?PlatformCredentialMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PlatformCredentialAuthenticationMethodCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Represents a platform credential instance registered to a user on Mac OS.
     * @param PlatformCredentialMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PlatformCredentialMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PlatformCredentialMethodsRequestBuilder
    */
    public function withUrl(string $rawUrl): PlatformCredentialMethodsRequestBuilder {
        return new PlatformCredentialMethodsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
