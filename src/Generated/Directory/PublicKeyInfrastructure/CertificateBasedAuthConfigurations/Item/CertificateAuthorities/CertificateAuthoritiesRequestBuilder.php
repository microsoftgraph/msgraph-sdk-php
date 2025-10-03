<?php

namespace Microsoft\\Graph\\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations\Item\CertificateAuthorities;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations\Item\CertificateAuthorities\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations\Item\CertificateAuthorities\Item\CertificateAuthorityDetailItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\CertificateAuthorityDetail;
use Microsoft\\Graph\\Generated\Models\CertificateAuthorityDetailCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the certificateAuthorities property of the microsoft.graph.certificateBasedAuthPki entity.
*/
class CertificateAuthoritiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the certificateAuthorities property of the microsoft.graph.certificateBasedAuthPki entity.
     * @param string $certificateAuthorityDetailId The unique identifier of certificateAuthorityDetail
     * @return CertificateAuthorityDetailItemRequestBuilder
    */
    public function byCertificateAuthorityDetailId(string $certificateAuthorityDetailId): CertificateAuthorityDetailItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['certificateAuthorityDetail%2Did'] = $certificateAuthorityDetailId;
        return new CertificateAuthorityDetailItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CertificateAuthoritiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/publicKeyInfrastructure/certificateBasedAuthConfigurations/{certificateBasedAuthPki%2Did}/certificateAuthorities{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the certificateAuthorityDetail objects and their properties.
     * @param CertificateAuthoritiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateAuthorityDetailCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/certificatebasedauthpki-list-certificateauthorities?view=graph-rest-1.0 Find more info here
    */
    public function get(?CertificateAuthoritiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateAuthorityDetailCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new certificateAuthorityDetail object.
     * @param CertificateAuthorityDetail $body The request body
     * @param CertificateAuthoritiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateAuthorityDetail|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/certificatebasedauthpki-post-certificateauthorities?view=graph-rest-1.0 Find more info here
    */
    public function post(CertificateAuthorityDetail $body, ?CertificateAuthoritiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateAuthorityDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the certificateAuthorityDetail objects and their properties.
     * @param CertificateAuthoritiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CertificateAuthoritiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new certificateAuthorityDetail object.
     * @param CertificateAuthorityDetail $body The request body
     * @param CertificateAuthoritiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CertificateAuthorityDetail $body, ?CertificateAuthoritiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CertificateAuthoritiesRequestBuilder
    */
    public function withUrl(string $rawUrl): CertificateAuthoritiesRequestBuilder {
        return new CertificateAuthoritiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
