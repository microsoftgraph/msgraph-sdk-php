<?php

namespace Microsoft\Graph\Generated\Applications\Item\FederatedIdentityCredentialsWithName;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\FederatedIdentityCredential;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the federatedIdentityCredentials property of the microsoft.graph.application entity.
*/
class FederatedIdentityCredentialsWithNameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FederatedIdentityCredentialsWithNameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $name Alternate key of federatedIdentityCredential
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $name = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/applications/{application%2Did}/federatedIdentityCredentials(name=\'{name}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['name'] = $name;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a federatedIdentityCredential object from an application.
     * @param FederatedIdentityCredentialsWithNameRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/federatedidentitycredential-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?FederatedIdentityCredentialsWithNameRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a federatedIdentityCredential object.
     * @param FederatedIdentityCredentialsWithNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FederatedIdentityCredential|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/federatedidentitycredential-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?FederatedIdentityCredentialsWithNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FederatedIdentityCredential::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new federatedIdentityCredential object for an application if it does exist, or update the properties of an existing federatedIdentityCredential object. By configuring a trust relationship between your Microsoft Entra application registration and the identity provider for your compute platform, you can use tokens issued by that platform to authenticate with Microsoft identity platform and call APIs in the Microsoft ecosystem. Maximum of 20 objects can be added to an application.
     * @param FederatedIdentityCredential $body The request body
     * @param FederatedIdentityCredentialsWithNameRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FederatedIdentityCredential|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/federatedidentitycredential-upsert?view=graph-rest-1.0 Find more info here
    */
    public function patch(FederatedIdentityCredential $body, ?FederatedIdentityCredentialsWithNameRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FederatedIdentityCredential::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a federatedIdentityCredential object from an application.
     * @param FederatedIdentityCredentialsWithNameRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?FederatedIdentityCredentialsWithNameRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a federatedIdentityCredential object.
     * @param FederatedIdentityCredentialsWithNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FederatedIdentityCredentialsWithNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new federatedIdentityCredential object for an application if it does exist, or update the properties of an existing federatedIdentityCredential object. By configuring a trust relationship between your Microsoft Entra application registration and the identity provider for your compute platform, you can use tokens issued by that platform to authenticate with Microsoft identity platform and call APIs in the Microsoft ecosystem. Maximum of 20 objects can be added to an application.
     * @param FederatedIdentityCredential $body The request body
     * @param FederatedIdentityCredentialsWithNameRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(FederatedIdentityCredential $body, ?FederatedIdentityCredentialsWithNameRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FederatedIdentityCredentialsWithNameRequestBuilder
    */
    public function withUrl(string $rawUrl): FederatedIdentityCredentialsWithNameRequestBuilder {
        return new FederatedIdentityCredentialsWithNameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
