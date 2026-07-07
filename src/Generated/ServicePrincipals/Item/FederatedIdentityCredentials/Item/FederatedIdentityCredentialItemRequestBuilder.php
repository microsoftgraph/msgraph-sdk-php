<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\FederatedIdentityCredentials\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\FederatedIdentityCredential;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the federatedIdentityCredentials property of the microsoft.graph.servicePrincipal entity.
*/
class FederatedIdentityCredentialItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FederatedIdentityCredentialItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/federatedIdentityCredentials/{federatedIdentityCredential%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property federatedIdentityCredentials for servicePrincipals
     * @param FederatedIdentityCredentialItemRequestBuilderDeleteRequ_f74752ae|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?FederatedIdentityCredentialItemRequestBuilderDeleteRequ_f74752ae $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Federated identities for a specific type of service principal - managed identity. Supports $expand and $filter (/$count eq 0, /$count ne 0).
     * @param FederatedIdentityCredentialItemRequestBuilderGetRequest_f8d8da8d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FederatedIdentityCredential|null>
     * @throws Exception
    */
    public function get(?FederatedIdentityCredentialItemRequestBuilderGetRequest_f8d8da8d $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FederatedIdentityCredential::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property federatedIdentityCredentials in servicePrincipals
     * @param FederatedIdentityCredential $body The request body
     * @param FederatedIdentityCredentialItemRequestBuilderPatchReque_4e3fc579|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FederatedIdentityCredential|null>
     * @throws Exception
    */
    public function patch(FederatedIdentityCredential $body, ?FederatedIdentityCredentialItemRequestBuilderPatchReque_4e3fc579 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FederatedIdentityCredential::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property federatedIdentityCredentials for servicePrincipals
     * @param FederatedIdentityCredentialItemRequestBuilderDeleteRequ_f74752ae|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?FederatedIdentityCredentialItemRequestBuilderDeleteRequ_f74752ae $requestConfiguration = null): RequestInformation {
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
     * Federated identities for a specific type of service principal - managed identity. Supports $expand and $filter (/$count eq 0, /$count ne 0).
     * @param FederatedIdentityCredentialItemRequestBuilderGetRequest_f8d8da8d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FederatedIdentityCredentialItemRequestBuilderGetRequest_f8d8da8d $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property federatedIdentityCredentials in servicePrincipals
     * @param FederatedIdentityCredential $body The request body
     * @param FederatedIdentityCredentialItemRequestBuilderPatchReque_4e3fc579|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(FederatedIdentityCredential $body, ?FederatedIdentityCredentialItemRequestBuilderPatchReque_4e3fc579 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * @return FederatedIdentityCredentialItemRequestBuilder
    */
    public function withUrl(string $rawUrl): FederatedIdentityCredentialItemRequestBuilder {
        return new FederatedIdentityCredentialItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
