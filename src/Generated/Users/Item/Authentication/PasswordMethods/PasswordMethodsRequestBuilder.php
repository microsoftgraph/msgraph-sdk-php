<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\PasswordMethods;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PasswordAuthenticationMethod;
use Microsoft\Graph\Generated\Models\PasswordAuthenticationMethodCollectionResponse;
use Microsoft\Graph\Generated\Users\Item\Authentication\PasswordMethods\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\PasswordMethods\Item\PasswordAuthenticationMethodItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the passwordMethods property of the microsoft.graph.authentication entity.
*/
class PasswordMethodsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the passwordMethods property of the microsoft.graph.authentication entity.
     * @param string $passwordAuthenticationMethodId The unique identifier of passwordAuthenticationMethod
     * @return PasswordAuthenticationMethodItemRequestBuilder
    */
    public function byPasswordAuthenticationMethodId(string $passwordAuthenticationMethodId): PasswordAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['passwordAuthenticationMethod%2Did'] = $passwordAuthenticationMethodId;
        return new PasswordAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PasswordMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/passwordMethods{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of the passwords registered to a user, represented by a passwordAuthenticationMethod object. This API returns exactly one object, as a user can have exactly one password. For security, the password itself will never be returned in the object and the password property is always null.
     * @param PasswordMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PasswordAuthenticationMethodCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authentication-list-passwordmethods?view=graph-rest-1.0 Find more info here
    */
    public function get(?PasswordMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PasswordAuthenticationMethodCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to passwordMethods for users
     * @param PasswordAuthenticationMethod $body The request body
     * @param PasswordMethodsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PasswordAuthenticationMethod|null>
     * @throws Exception
    */
    public function post(PasswordAuthenticationMethod $body, ?PasswordMethodsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PasswordAuthenticationMethod::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of the passwords registered to a user, represented by a passwordAuthenticationMethod object. This API returns exactly one object, as a user can have exactly one password. For security, the password itself will never be returned in the object and the password property is always null.
     * @param PasswordMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PasswordMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to passwordMethods for users
     * @param PasswordAuthenticationMethod $body The request body
     * @param PasswordMethodsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PasswordAuthenticationMethod $body, ?PasswordMethodsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PasswordMethodsRequestBuilder
    */
    public function withUrl(string $rawUrl): PasswordMethodsRequestBuilder {
        return new PasswordMethodsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
