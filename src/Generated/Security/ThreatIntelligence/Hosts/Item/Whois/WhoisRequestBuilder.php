<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\Hosts\Item\Whois;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\WhoisRecord;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the whois property of the microsoft.graph.security.host entity.
*/
class WhoisRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WhoisRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/threatIntelligence/hosts/{host%2Did}/whois{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the specified whoisRecord resource.  Specify the desired whoisRecord in one of the following two ways:- Identify a host and get its current whoisRecord. - Specify an id value to get the corresponding whoisRecord.
     * @param WhoisRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WhoisRecord|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-whoisrecord-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?WhoisRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WhoisRecord::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the specified whoisRecord resource.  Specify the desired whoisRecord in one of the following two ways:- Identify a host and get its current whoisRecord. - Specify an id value to get the corresponding whoisRecord.
     * @param WhoisRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WhoisRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WhoisRequestBuilder
    */
    public function withUrl(string $rawUrl): WhoisRequestBuilder {
        return new WhoisRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
