<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\TemporaryAccessPassMethods;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TemporaryAccessPassAuthenticationMethod;
use Microsoft\Graph\Generated\Models\TemporaryAccessPassAuthenticationMethodCollectionResponse;
use Microsoft\Graph\Generated\Users\Item\Authentication\TemporaryAccessPassMethods\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\TemporaryAccessPassMethods\Item\TemporaryAccessPassAuthenticationMethodItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the temporaryAccessPassMethods property of the microsoft.graph.authentication entity.
*/
class TemporaryAccessPassMethodsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the temporaryAccessPassMethods property of the microsoft.graph.authentication entity.
     * @param string $temporaryAccessPassAuthenticationMethodId The unique identifier of temporaryAccessPassAuthenticationMethod
     * @return TemporaryAccessPassAuthenticationMethodItemRequestBuilder
    */
    public function byTemporaryAccessPassAuthenticationMethodId(string $temporaryAccessPassAuthenticationMethodId): TemporaryAccessPassAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['temporaryAccessPassAuthenticationMethod%2Did'] = $temporaryAccessPassAuthenticationMethodId;
        return new TemporaryAccessPassAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TemporaryAccessPassMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/temporaryAccessPassMethods{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of a user's temporaryAccessPassAuthenticationMethod objects and their properties. This API will only return a single object in the collection as a user can have only one Temporary Access Pass method.
     * @param TemporaryAccessPassMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TemporaryAccessPassAuthenticationMethodCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authentication-list-temporaryaccesspassmethods?view=graph-rest-1.0 Find more info here
    */
    public function get(?TemporaryAccessPassMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TemporaryAccessPassAuthenticationMethodCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new temporaryAccessPassAuthenticationMethod object on a user. A user can only have one Temporary Access Pass that's usable within its specified lifetime. If the user requires a new Temporary Access Pass while the current Temporary Access Pass is valid, the admin can create a new Temporary Access Pass for the user, the previous Temporary Access Pass will be deleted, and a new Temporary Access Pass will be created.
     * @param TemporaryAccessPassAuthenticationMethod $body The request body
     * @param TemporaryAccessPassMethodsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TemporaryAccessPassAuthenticationMethod|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authentication-post-temporaryaccesspassmethods?view=graph-rest-1.0 Find more info here
    */
    public function post(TemporaryAccessPassAuthenticationMethod $body, ?TemporaryAccessPassMethodsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TemporaryAccessPassAuthenticationMethod::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of a user's temporaryAccessPassAuthenticationMethod objects and their properties. This API will only return a single object in the collection as a user can have only one Temporary Access Pass method.
     * @param TemporaryAccessPassMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TemporaryAccessPassMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new temporaryAccessPassAuthenticationMethod object on a user. A user can only have one Temporary Access Pass that's usable within its specified lifetime. If the user requires a new Temporary Access Pass while the current Temporary Access Pass is valid, the admin can create a new Temporary Access Pass for the user, the previous Temporary Access Pass will be deleted, and a new Temporary Access Pass will be created.
     * @param TemporaryAccessPassAuthenticationMethod $body The request body
     * @param TemporaryAccessPassMethodsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TemporaryAccessPassAuthenticationMethod $body, ?TemporaryAccessPassMethodsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TemporaryAccessPassMethodsRequestBuilder
    */
    public function withUrl(string $rawUrl): TemporaryAccessPassMethodsRequestBuilder {
        return new TemporaryAccessPassMethodsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
