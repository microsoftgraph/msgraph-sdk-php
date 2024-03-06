<?php

namespace Microsoft\Graph\Generated\Domains\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Domains\Item\DomainNameReferences\DomainNameReferencesRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\FederationConfiguration\FederationConfigurationRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\ForceDelete\ForceDeleteRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\Promote\PromoteRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\ServiceConfigurationRecords\ServiceConfigurationRecordsRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords\VerificationDnsRecordsRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\Verify\VerifyRequestBuilder;
use Microsoft\Graph\Generated\Models\Domain;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of domain entities.
*/
class DomainItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the domainNameReferences property of the microsoft.graph.domain entity.
    */
    public function domainNameReferences(): DomainNameReferencesRequestBuilder {
        return new DomainNameReferencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the federationConfiguration property of the microsoft.graph.domain entity.
    */
    public function federationConfiguration(): FederationConfigurationRequestBuilder {
        return new FederationConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the forceDelete method.
    */
    public function forceDelete(): ForceDeleteRequestBuilder {
        return new ForceDeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the promote method.
    */
    public function promote(): PromoteRequestBuilder {
        return new PromoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the serviceConfigurationRecords property of the microsoft.graph.domain entity.
    */
    public function serviceConfigurationRecords(): ServiceConfigurationRecordsRequestBuilder {
        return new ServiceConfigurationRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the verificationDnsRecords property of the microsoft.graph.domain entity.
    */
    public function verificationDnsRecords(): VerificationDnsRecordsRequestBuilder {
        return new VerificationDnsRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the verify method.
    */
    public function verify(): VerifyRequestBuilder {
        return new VerifyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DomainItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/domains/{domain%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a domain from a tenant.
     * @param DomainItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/domain-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DomainItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve the properties and relationships of domain object.
     * @param DomainItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Domain|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/domain-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DomainItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Domain::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of domain object.
     * @param Domain $body The request body
     * @param DomainItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Domain|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/domain-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(Domain $body, ?DomainItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Domain::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a domain from a tenant.
     * @param DomainItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DomainItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/domains/{domain%2Did}';
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
     * Retrieve the properties and relationships of domain object.
     * @param DomainItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DomainItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of domain object.
     * @param Domain $body The request body
     * @param DomainItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Domain $body, ?DomainItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/domains/{domain%2Did}';
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
     * @return DomainItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DomainItemRequestBuilder {
        return new DomainItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
