<?php

namespace Microsoft\Graph\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations\Item\CertificateAuthorities\CertificateAuthoritiesRequestBuilder;
use Microsoft\Graph\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations\Item\Upload\UploadRequestBuilder;
use Microsoft\Graph\Generated\Models\CertificateBasedAuthPki;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the certificateBasedAuthConfigurations property of the microsoft.graph.publicKeyInfrastructureRoot entity.
*/
class CertificateBasedAuthPkiItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the certificateAuthorities property of the microsoft.graph.certificateBasedAuthPki entity.
    */
    public function certificateAuthorities(): CertificateAuthoritiesRequestBuilder {
        return new CertificateAuthoritiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the upload method.
    */
    public function upload(): UploadRequestBuilder {
        return new UploadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CertificateBasedAuthPkiItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/publicKeyInfrastructure/certificateBasedAuthConfigurations/{certificateBasedAuthPki%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a certificateBasedAuthPki object.
     * @param CertificateBasedAuthPkiItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/publickeyinfrastructureroot-delete-certificatebasedauthconfigurations?view=graph-rest-1.0 Find more info here
    */
    public function delete(?CertificateBasedAuthPkiItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a certificateBasedAuthPki object.
     * @param CertificateBasedAuthPkiItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateBasedAuthPki|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/certificatebasedauthpki-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CertificateBasedAuthPkiItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateBasedAuthPki::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a certificateBasedAuthPki object.
     * @param CertificateBasedAuthPki $body The request body
     * @param CertificateBasedAuthPkiItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateBasedAuthPki|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/certificatebasedauthpki-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(CertificateBasedAuthPki $body, ?CertificateBasedAuthPkiItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateBasedAuthPki::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a certificateBasedAuthPki object.
     * @param CertificateBasedAuthPkiItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CertificateBasedAuthPkiItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a certificateBasedAuthPki object.
     * @param CertificateBasedAuthPkiItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CertificateBasedAuthPkiItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a certificateBasedAuthPki object.
     * @param CertificateBasedAuthPki $body The request body
     * @param CertificateBasedAuthPkiItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CertificateBasedAuthPki $body, ?CertificateBasedAuthPkiItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CertificateBasedAuthPkiItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CertificateBasedAuthPkiItemRequestBuilder {
        return new CertificateBasedAuthPkiItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
