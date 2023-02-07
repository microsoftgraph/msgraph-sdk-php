<?php

namespace Microsoft\Graph\Generated\Domains\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Domains\Item\DomainNameReferences\DomainNameReferencesRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\DomainNameReferences\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\FederationConfiguration\FederationConfigurationRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\FederationConfiguration\Item\InternalDomainFederationItemRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\MicrosoftGraphForceDelete\MicrosoftGraphForceDeleteRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\MicrosoftGraphPromote\MicrosoftGraphPromoteRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\MicrosoftGraphVerify\MicrosoftGraphVerifyRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\ServiceConfigurationRecords\ServiceConfigurationRecordsRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords\VerificationDnsRecordsRequestBuilder;
use Microsoft\Graph\Generated\Models\Domain;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the collection of domain entities.
*/
class DomainItemRequestBuilder 
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
    public function microsoftGraphForceDelete(): MicrosoftGraphForceDeleteRequestBuilder {
        return new MicrosoftGraphForceDeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the promote method.
    */
    public function microsoftGraphPromote(): MicrosoftGraphPromoteRequestBuilder {
        return new MicrosoftGraphPromoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the verify method.
    */
    public function microsoftGraphVerify(): MicrosoftGraphVerifyRequestBuilder {
        return new MicrosoftGraphVerifyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the serviceConfigurationRecords property of the microsoft.graph.domain entity.
    */
    public function serviceConfigurationRecords(): ServiceConfigurationRecordsRequestBuilder {
        return new ServiceConfigurationRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the verificationDnsRecords property of the microsoft.graph.domain entity.
    */
    public function verificationDnsRecords(): VerificationDnsRecordsRequestBuilder {
        return new VerificationDnsRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DomainItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/domains/{domain%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a domain from a tenant.
     * @param DomainItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/domain-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DomainItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the domainNameReferences property of the microsoft.graph.domain entity.
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder
    */
    public function domainNameReferencesById(string $id): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the federationConfiguration property of the microsoft.graph.domain entity.
     * @param string $id Unique identifier of the item
     * @return InternalDomainFederationItemRequestBuilder
    */
    public function federationConfigurationById(string $id): InternalDomainFederationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['internalDomainFederation%2Did'] = $id;
        return new InternalDomainFederationItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Retrieve the properties and relationships of domain object.
     * @param DomainItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/domain-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DomainItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Domain::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the properties of domain object.
     * @param Domain $body The request body
     * @param DomainItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/domain-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(Domain $body, ?DomainItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Domain::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the serviceConfigurationRecords property of the microsoft.graph.domain entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Domains\Item\ServiceConfigurationRecords\Item\DomainDnsRecordItemRequestBuilder
    */
    public function serviceConfigurationRecordsById(string $id): \Microsoft\Graph\Generated\Domains\Item\ServiceConfigurationRecords\Item\DomainDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainDnsRecord%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Domains\Item\ServiceConfigurationRecords\Item\DomainDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Deletes a domain from a tenant.
     * @param DomainItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DomainItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
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
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to manage the verificationDnsRecords property of the microsoft.graph.domain entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords\Item\DomainDnsRecordItemRequestBuilder
    */
    public function verificationDnsRecordsById(string $id): \Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords\Item\DomainDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainDnsRecord%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords\Item\DomainDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

}
