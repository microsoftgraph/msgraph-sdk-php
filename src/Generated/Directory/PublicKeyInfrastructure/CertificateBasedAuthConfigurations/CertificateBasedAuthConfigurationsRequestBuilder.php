<?php

namespace Microsoft\\Graph\\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations\Item\CertificateBasedAuthPkiItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\CertificateBasedAuthPki;
use Microsoft\\Graph\\Generated\Models\CertificateBasedAuthPkiCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the certificateBasedAuthConfigurations property of the microsoft.graph.publicKeyInfrastructureRoot entity.
*/
class CertificateBasedAuthConfigurationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the certificateBasedAuthConfigurations property of the microsoft.graph.publicKeyInfrastructureRoot entity.
     * @param string $certificateBasedAuthPkiId The unique identifier of certificateBasedAuthPki
     * @return CertificateBasedAuthPkiItemRequestBuilder
    */
    public function byCertificateBasedAuthPkiId(string $certificateBasedAuthPkiId): CertificateBasedAuthPkiItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['certificateBasedAuthPki%2Did'] = $certificateBasedAuthPkiId;
        return new CertificateBasedAuthPkiItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CertificateBasedAuthConfigurationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/publicKeyInfrastructure/certificateBasedAuthConfigurations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the certificateBasedAuthPki objects and their properties.
     * @param CertificateBasedAuthConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateBasedAuthPkiCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/publickeyinfrastructureroot-list-certificatebasedauthconfigurations?view=graph-rest-1.0 Find more info here
    */
    public function get(?CertificateBasedAuthConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateBasedAuthPkiCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new certificateBasedAuthPki object.
     * @param CertificateBasedAuthPki $body The request body
     * @param CertificateBasedAuthConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateBasedAuthPki|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/publickeyinfrastructureroot-post-certificatebasedauthconfigurations?view=graph-rest-1.0 Find more info here
    */
    public function post(CertificateBasedAuthPki $body, ?CertificateBasedAuthConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateBasedAuthPki::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the certificateBasedAuthPki objects and their properties.
     * @param CertificateBasedAuthConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CertificateBasedAuthConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new certificateBasedAuthPki object.
     * @param CertificateBasedAuthPki $body The request body
     * @param CertificateBasedAuthConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CertificateBasedAuthPki $body, ?CertificateBasedAuthConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CertificateBasedAuthConfigurationsRequestBuilder
    */
    public function withUrl(string $rawUrl): CertificateBasedAuthConfigurationsRequestBuilder {
        return new CertificateBasedAuthConfigurationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
