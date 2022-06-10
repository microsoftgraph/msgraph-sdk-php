<?php

namespace Microsoft\Graph\Generated\Domains\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Domains\Item\DomainNameReferences\DomainNameReferencesRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\DomainNameReferences\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\FederationConfiguration\FederationConfigurationRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\FederationConfiguration\Item\InternalDomainFederationItemRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\ForceDelete\ForceDeleteRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\ServiceConfigurationRecords\Item\DomainDnsRecordItemRequestBuilder as MicrosoftGraphGeneratedDomainsItemServiceConfigurationRecordsItemDomainDnsRecordItemRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\ServiceConfigurationRecords\ServiceConfigurationRecordsRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords\Item\DomainDnsRecordItemRequestBuilder as MicrosoftGraphGeneratedDomainsItemVerificationDnsRecordsItemDomainDnsRecordItemRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords\VerificationDnsRecordsRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\Verify\VerifyRequestBuilder;
use Microsoft\Graph\Generated\Models\Domain;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DomainItemRequestBuilder 
{
    /**
     * The domainNameReferences property
    */
    public function domainNameReferences(): DomainNameReferencesRequestBuilder {
        return new DomainNameReferencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The federationConfiguration property
    */
    public function federationConfiguration(): FederationConfigurationRequestBuilder {
        return new FederationConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The forceDelete property
    */
    public function forceDelete(): ForceDeleteRequestBuilder {
        return new ForceDeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The serviceConfigurationRecords property
    */
    public function serviceConfigurationRecords(): ServiceConfigurationRecordsRequestBuilder {
        return new ServiceConfigurationRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The verificationDnsRecords property
    */
    public function verificationDnsRecords(): VerificationDnsRecordsRequestBuilder {
        return new VerificationDnsRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The verify property
    */
    public function verify(): VerifyRequestBuilder {
        return new VerifyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DomainItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/domains/{domain%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Deletes a domain from a tenant.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?DomainItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of domain object.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?DomainItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * @param Domain $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Domain $body, ?DomainItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Deletes a domain from a tenant.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?DomainItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.domains.item.domainNameReferences.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder
    */
    public function domainNameReferencesById(string $id): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.domains.item.federationConfiguration.item collection
     * @param string $id Unique identifier of the item
     * @return InternalDomainFederationItemRequestBuilder
    */
    public function federationConfigurationById(string $id): InternalDomainFederationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['internalDomainFederation%2Did'] = $id;
        return new InternalDomainFederationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve the properties and relationships of domain object.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DomainItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Domain::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the properties of domain object.
     * @param Domain $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Domain $body, ?DomainItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.domains.item.serviceConfigurationRecords.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedDomainsItemServiceConfigurationRecordsItemDomainDnsRecordItemRequestBuilder
    */
    public function serviceConfigurationRecordsById(string $id): MicrosoftGraphGeneratedDomainsItemServiceConfigurationRecordsItemDomainDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainDnsRecord%2Did'] = $id;
        return new MicrosoftGraphGeneratedDomainsItemServiceConfigurationRecordsItemDomainDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.domains.item.verificationDnsRecords.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedDomainsItemVerificationDnsRecordsItemDomainDnsRecordItemRequestBuilder
    */
    public function verificationDnsRecordsById(string $id): MicrosoftGraphGeneratedDomainsItemVerificationDnsRecordsItemDomainDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainDnsRecord%2Did'] = $id;
        return new MicrosoftGraphGeneratedDomainsItemVerificationDnsRecordsItemDomainDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
