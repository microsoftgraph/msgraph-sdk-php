<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\ApiConnectorConfiguration;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\ApiConnectorConfiguration\PostAttributeCollection\PostAttributeCollectionRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\ApiConnectorConfiguration\PostFederationSignup\PostFederationSignupRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserFlowApiConnectorConfiguration;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /identity/b2xUserFlows/{b2xIdentityUserFlow-id}/apiConnectorConfiguration
*/
class ApiConnectorConfigurationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the postAttributeCollection property of the microsoft.graph.userFlowApiConnectorConfiguration entity.
    */
    public function postAttributeCollection(): PostAttributeCollectionRequestBuilder {
        return new PostAttributeCollectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the postFederationSignup property of the microsoft.graph.userFlowApiConnectorConfiguration entity.
    */
    public function postFederationSignup(): PostFederationSignupRequestBuilder {
        return new PostFederationSignupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ApiConnectorConfigurationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/b2xUserFlows/{b2xIdentityUserFlow%2Did}/apiConnectorConfiguration{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Configuration for enabling an API connector for use as part of the self-service sign-up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
     * @param ApiConnectorConfigurationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserFlowApiConnectorConfiguration|null>
     * @throws Exception
    */
    public function get(?ApiConnectorConfigurationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserFlowApiConnectorConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Configuration for enabling an API connector for use as part of the self-service sign-up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
     * @param ApiConnectorConfigurationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApiConnectorConfigurationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ApiConnectorConfigurationRequestBuilder
    */
    public function withUrl(string $rawUrl): ApiConnectorConfigurationRequestBuilder {
        return new ApiConnectorConfigurationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
