<?php

namespace Microsoft\Graph\Generated\Policies\AuthenticationStrengthPolicies\Item\CombinationConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AuthenticationCombinationConfiguration;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the combinationConfigurations property of the microsoft.graph.authenticationStrengthPolicy entity.
*/
class AuthenticationCombinationConfigurationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AuthenticationCombinationConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/authenticationStrengthPolicies/{authenticationStrengthPolicy%2Did}/combinationConfigurations/{authenticationCombinationConfiguration%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an authenticationCombinationConfiguration  for a custom authenticationStrengthPolicy object. This API is available in the following national cloud deployments.
     * @param AuthenticationCombinationConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationstrengthpolicy-delete-combinationconfigurations?view=graph-rest-1.0 Find more info here
    */
    public function delete(?AuthenticationCombinationConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of an authenticationCombinationConfiguration object. This API is available in the following national cloud deployments.
     * @param AuthenticationCombinationConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationCombinationConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationcombinationconfiguration-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?AuthenticationCombinationConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationCombinationConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an authenticationCombinationConfiguration object. In use, only fido2combinationConfigurations may be updated as they're the only type of authenticationCombinationConfiguration that may be created. This API is available in the following national cloud deployments.
     * @param AuthenticationCombinationConfiguration $body The request body
     * @param AuthenticationCombinationConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationCombinationConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationcombinationconfiguration-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(AuthenticationCombinationConfiguration $body, ?AuthenticationCombinationConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationCombinationConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an authenticationCombinationConfiguration  for a custom authenticationStrengthPolicy object. This API is available in the following national cloud deployments.
     * @param AuthenticationCombinationConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AuthenticationCombinationConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, application/json");
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of an authenticationCombinationConfiguration object. This API is available in the following national cloud deployments.
     * @param AuthenticationCombinationConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationCombinationConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Update the properties of an authenticationCombinationConfiguration object. In use, only fido2combinationConfigurations may be updated as they're the only type of authenticationCombinationConfiguration that may be created. This API is available in the following national cloud deployments.
     * @param AuthenticationCombinationConfiguration $body The request body
     * @param AuthenticationCombinationConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AuthenticationCombinationConfiguration $body, ?AuthenticationCombinationConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AuthenticationCombinationConfigurationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationCombinationConfigurationItemRequestBuilder {
        return new AuthenticationCombinationConfigurationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
