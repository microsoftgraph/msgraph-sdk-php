<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDnsReverse;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\PassiveDnsRecordCollectionResponse;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDnsReverse\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDnsReverse\Item\PassiveDnsRecordItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the passiveDnsReverse property of the microsoft.graph.security.host entity.
*/
class PassiveDnsReverseRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the passiveDnsReverse property of the microsoft.graph.security.host entity.
     * @param string $passiveDnsRecordId The unique identifier of passiveDnsRecord
     * @return PassiveDnsRecordItemRequestBuilder
    */
    public function byPassiveDnsRecordId(string $passiveDnsRecordId): PassiveDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['passiveDnsRecord%2Did'] = $passiveDnsRecordId;
        return new PassiveDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PassiveDnsReverseRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/threatIntelligence/hosts/{host%2Did}/passiveDnsReverse{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a collection of passiveDnsRecord resources from a reverse passive DNS retrieval.  A reverse DNS lookup queries the hostname of a host using an IP address.
     * @param PassiveDnsReverseRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PassiveDnsRecordCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-host-list-passivednsreverse?view=graph-rest-1.0 Find more info here
    */
    public function get(?PassiveDnsReverseRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PassiveDnsRecordCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a collection of passiveDnsRecord resources from a reverse passive DNS retrieval.  A reverse DNS lookup queries the hostname of a host using an IP address.
     * @param PassiveDnsReverseRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PassiveDnsReverseRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return PassiveDnsReverseRequestBuilder
    */
    public function withUrl(string $rawUrl): PassiveDnsReverseRequestBuilder {
        return new PassiveDnsReverseRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
