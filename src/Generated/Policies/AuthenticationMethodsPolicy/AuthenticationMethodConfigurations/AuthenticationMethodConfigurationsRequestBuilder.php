<?php

namespace Microsoft\Graph\Generated\Policies\AuthenticationMethodsPolicy\AuthenticationMethodConfigurations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AuthenticationMethodConfiguration;
use Microsoft\Graph\Generated\Models\AuthenticationMethodConfigurationCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Policies\AuthenticationMethodsPolicy\AuthenticationMethodConfigurations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Policies\AuthenticationMethodsPolicy\AuthenticationMethodConfigurations\Item\AuthenticationMethodConfigurationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authenticationMethodConfigurations property of the microsoft.graph.authenticationMethodsPolicy entity.
*/
class AuthenticationMethodConfigurationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationMethodConfigurations property of the microsoft.graph.authenticationMethodsPolicy entity.
     * @param string $authenticationMethodConfigurationId The unique identifier of authenticationMethodConfiguration
     * @return AuthenticationMethodConfigurationItemRequestBuilder
    */
    public function byAuthenticationMethodConfigurationId(string $authenticationMethodConfigurationId): AuthenticationMethodConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationMethodConfiguration%2Did'] = $authenticationMethodConfigurationId;
        return new AuthenticationMethodConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AuthenticationMethodConfigurationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/authenticationMethodsPolicy/authenticationMethodConfigurations{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Represents the settings for each authentication method. Automatically expanded on GET /policies/authenticationMethodsPolicy.
     * @param AuthenticationMethodConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationMethodConfigurationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AuthenticationMethodConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationMethodConfigurationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to authenticationMethodConfigurations for policies
     * @param AuthenticationMethodConfiguration $body The request body
     * @param AuthenticationMethodConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationMethodConfiguration|null>
     * @throws Exception
    */
    public function post(AuthenticationMethodConfiguration $body, ?AuthenticationMethodConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationMethodConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Represents the settings for each authentication method. Automatically expanded on GET /policies/authenticationMethodsPolicy.
     * @param AuthenticationMethodConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationMethodConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to authenticationMethodConfigurations for policies
     * @param AuthenticationMethodConfiguration $body The request body
     * @param AuthenticationMethodConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AuthenticationMethodConfiguration $body, ?AuthenticationMethodConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AuthenticationMethodConfigurationsRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationMethodConfigurationsRequestBuilder {
        return new AuthenticationMethodConfigurationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
