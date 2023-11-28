<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\MicrosoftAuthenticatorMethods;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\MicrosoftAuthenticatorAuthenticationMethodCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Authentication\MicrosoftAuthenticatorMethods\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\MicrosoftAuthenticatorMethods\Item\MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the microsoftAuthenticatorMethods property of the microsoft.graph.authentication entity.
*/
class MicrosoftAuthenticatorMethodsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the microsoftAuthenticatorMethods property of the microsoft.graph.authentication entity.
     * @param string $microsoftAuthenticatorAuthenticationMethodId The unique identifier of microsoftAuthenticatorAuthenticationMethod
     * @return MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder
    */
    public function byMicrosoftAuthenticatorAuthenticationMethodId(string $microsoftAuthenticatorAuthenticationMethodId): MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['microsoftAuthenticatorAuthenticationMethod%2Did'] = $microsoftAuthenticatorAuthenticationMethodId;
        return new MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MicrosoftAuthenticatorMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/microsoftAuthenticatorMethods{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the microsoftAuthenticatorAuthenticationMethod objects and their properties.
     * @param MicrosoftAuthenticatorMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftAuthenticatorAuthenticationMethodCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/microsoftauthenticatorauthenticationmethod-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?MicrosoftAuthenticatorMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftAuthenticatorAuthenticationMethodCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the microsoftAuthenticatorAuthenticationMethod objects and their properties.
     * @param MicrosoftAuthenticatorMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftAuthenticatorMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftAuthenticatorMethodsRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftAuthenticatorMethodsRequestBuilder {
        return new MicrosoftAuthenticatorMethodsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
