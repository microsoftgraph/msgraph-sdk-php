<?php

namespace Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords\Item\DomainDnsRecordItemRequestBuilder;
use Microsoft\Graph\Generated\Models\DomainDnsRecord;
use Microsoft\Graph\Generated\Models\DomainDnsRecordCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the verificationDnsRecords property of the microsoft.graph.domain entity.
*/
class VerificationDnsRecordsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the verificationDnsRecords property of the microsoft.graph.domain entity.
     * @param string $domainDnsRecordId The unique identifier of domainDnsRecord
     * @return DomainDnsRecordItemRequestBuilder
    */
    public function byDomainDnsRecordId(string $domainDnsRecordId): DomainDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainDnsRecord%2Did'] = $domainDnsRecordId;
        return new DomainDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new VerificationDnsRecordsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/domains/{domain%2Did}/verificationDnsRecords{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of domainDnsRecord objects. You cannot use an associated domain with your Microsoft Entra tenant until ownership is verified. To verify the ownership of the domain, retrieve the domain verification records and add the details to the zone file of the domain. This can be done through the domain registrar or DNS server configuration. Root domains require verification. For example, contoso.com requires verification. If a root domain is verified, subdomains of the root domain are automatically verified. For example, subdomain.contoso.com is automatically be verified if contoso.com has been verified.
     * @param VerificationDnsRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DomainDnsRecordCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/domain-list-verificationdnsrecords?view=graph-rest-1.0 Find more info here
    */
    public function get(?VerificationDnsRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DomainDnsRecordCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to verificationDnsRecords for domains
     * @param DomainDnsRecord $body The request body
     * @param VerificationDnsRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DomainDnsRecord|null>
     * @throws Exception
    */
    public function post(DomainDnsRecord $body, ?VerificationDnsRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DomainDnsRecord::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of domainDnsRecord objects. You cannot use an associated domain with your Microsoft Entra tenant until ownership is verified. To verify the ownership of the domain, retrieve the domain verification records and add the details to the zone file of the domain. This can be done through the domain registrar or DNS server configuration. Root domains require verification. For example, contoso.com requires verification. If a root domain is verified, subdomains of the root domain are automatically verified. For example, subdomain.contoso.com is automatically be verified if contoso.com has been verified.
     * @param VerificationDnsRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?VerificationDnsRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to verificationDnsRecords for domains
     * @param DomainDnsRecord $body The request body
     * @param VerificationDnsRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DomainDnsRecord $body, ?VerificationDnsRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/domains/{domain%2Did}/verificationDnsRecords';
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
     * @return VerificationDnsRecordsRequestBuilder
    */
    public function withUrl(string $rawUrl): VerificationDnsRecordsRequestBuilder {
        return new VerificationDnsRecordsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
