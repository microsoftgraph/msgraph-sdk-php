<?php

namespace Microsoft\Graph\Generated\Applications\Item\FederatedIdentityCredentials;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Applications\Item\FederatedIdentityCredentials\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\FederatedIdentityCredentials\Item\FederatedIdentityCredentialItemRequestBuilder;
use Microsoft\Graph\Generated\Models\FederatedIdentityCredential;
use Microsoft\Graph\Generated\Models\FederatedIdentityCredentialCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the federatedIdentityCredentials property of the microsoft.graph.application entity.
*/
class FederatedIdentityCredentialsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the federatedIdentityCredentials property of the microsoft.graph.application entity.
     * @param string $federatedIdentityCredentialId The unique identifier of federatedIdentityCredential
     * @return FederatedIdentityCredentialItemRequestBuilder
    */
    public function byFederatedIdentityCredentialId(string $federatedIdentityCredentialId): FederatedIdentityCredentialItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['federatedIdentityCredential%2Did'] = $federatedIdentityCredentialId;
        return new FederatedIdentityCredentialItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FederatedIdentityCredentialsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/applications/{application%2Did}/federatedIdentityCredentials{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Federated identities for applications. Supports $expand and $filter (startsWith, /$count eq 0, /$count ne 0).
     * @param FederatedIdentityCredentialsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FederatedIdentityCredentialCollectionResponse|null>
     * @throws Exception
    */
    public function get(?FederatedIdentityCredentialsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FederatedIdentityCredentialCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to federatedIdentityCredentials for applications
     * @param FederatedIdentityCredential $body The request body
     * @param FederatedIdentityCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FederatedIdentityCredential|null>
     * @throws Exception
    */
    public function post(FederatedIdentityCredential $body, ?FederatedIdentityCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FederatedIdentityCredential::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Federated identities for applications. Supports $expand and $filter (startsWith, /$count eq 0, /$count ne 0).
     * @param FederatedIdentityCredentialsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FederatedIdentityCredentialsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to federatedIdentityCredentials for applications
     * @param FederatedIdentityCredential $body The request body
     * @param FederatedIdentityCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FederatedIdentityCredential $body, ?FederatedIdentityCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FederatedIdentityCredentialsRequestBuilder
    */
    public function withUrl(string $rawUrl): FederatedIdentityCredentialsRequestBuilder {
        return new FederatedIdentityCredentialsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
