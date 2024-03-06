<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationStrength;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationStrength\AuthenticationMethodModes\AuthenticationMethodModesRequestBuilder;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationStrength\Policies\PoliciesRequestBuilder;
use Microsoft\Graph\Generated\Models\AuthenticationStrengthRoot;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authenticationStrength property of the microsoft.graph.conditionalAccessRoot entity.
*/
class AuthenticationStrengthRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the authenticationMethodModes property of the microsoft.graph.authenticationStrengthRoot entity.
    */
    public function authenticationMethodModes(): AuthenticationMethodModesRequestBuilder {
        return new AuthenticationMethodModesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the policies property of the microsoft.graph.authenticationStrengthRoot entity.
    */
    public function policies(): PoliciesRequestBuilder {
        return new PoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuthenticationStrengthRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/conditionalAccess/authenticationStrength{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property authenticationStrength for identity
     * @param AuthenticationStrengthRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AuthenticationStrengthRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get authenticationStrength from identity
     * @param AuthenticationStrengthRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationStrengthRoot|null>
     * @throws Exception
    */
    public function get(?AuthenticationStrengthRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationStrengthRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property authenticationStrength in identity
     * @param AuthenticationStrengthRoot $body The request body
     * @param AuthenticationStrengthRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationStrengthRoot|null>
     * @throws Exception
    */
    public function patch(AuthenticationStrengthRoot $body, ?AuthenticationStrengthRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationStrengthRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property authenticationStrength for identity
     * @param AuthenticationStrengthRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AuthenticationStrengthRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/identity/conditionalAccess/authenticationStrength';
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
     * Get authenticationStrength from identity
     * @param AuthenticationStrengthRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationStrengthRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property authenticationStrength in identity
     * @param AuthenticationStrengthRoot $body The request body
     * @param AuthenticationStrengthRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AuthenticationStrengthRoot $body, ?AuthenticationStrengthRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/identity/conditionalAccess/authenticationStrength';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return AuthenticationStrengthRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationStrengthRequestBuilder {
        return new AuthenticationStrengthRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
