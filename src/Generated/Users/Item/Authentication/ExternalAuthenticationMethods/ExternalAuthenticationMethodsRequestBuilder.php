<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\ExternalAuthenticationMethods;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ExternalAuthenticationMethod;
use Microsoft\Graph\Generated\Models\ExternalAuthenticationMethodCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Authentication\ExternalAuthenticationMethods\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\ExternalAuthenticationMethods\Item\ExternalAuthenticationMethodItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the externalAuthenticationMethods property of the microsoft.graph.authentication entity.
*/
class ExternalAuthenticationMethodsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the externalAuthenticationMethods property of the microsoft.graph.authentication entity.
     * @param string $externalAuthenticationMethodId The unique identifier of externalAuthenticationMethod
     * @return ExternalAuthenticationMethodItemRequestBuilder
    */
    public function byExternalAuthenticationMethodId(string $externalAuthenticationMethodId): ExternalAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['externalAuthenticationMethod%2Did'] = $externalAuthenticationMethodId;
        return new ExternalAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ExternalAuthenticationMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/externalAuthenticationMethods{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Represents the external authentication methods registered to a user for authentication using an external identity provider.
     * @param ExternalAuthenticationMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalAuthenticationMethodCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ExternalAuthenticationMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalAuthenticationMethodCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new externalAuthenticationMethod object. This API doesn't support self-service operations.
     * @param ExternalAuthenticationMethod $body The request body
     * @param ExternalAuthenticationMethodsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalAuthenticationMethod|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authentication-post-externalauthenticationmethods?view=graph-rest-1.0 Find more info here
    */
    public function post(ExternalAuthenticationMethod $body, ?ExternalAuthenticationMethodsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalAuthenticationMethod::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Represents the external authentication methods registered to a user for authentication using an external identity provider.
     * @param ExternalAuthenticationMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExternalAuthenticationMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new externalAuthenticationMethod object. This API doesn't support self-service operations.
     * @param ExternalAuthenticationMethod $body The request body
     * @param ExternalAuthenticationMethodsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ExternalAuthenticationMethod $body, ?ExternalAuthenticationMethodsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExternalAuthenticationMethodsRequestBuilder
    */
    public function withUrl(string $rawUrl): ExternalAuthenticationMethodsRequestBuilder {
        return new ExternalAuthenticationMethodsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
