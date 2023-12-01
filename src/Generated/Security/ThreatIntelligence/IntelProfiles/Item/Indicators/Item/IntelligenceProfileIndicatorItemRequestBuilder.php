<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\IntelProfiles\Item\Indicators\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\IntelligenceProfileIndicator;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the indicators property of the microsoft.graph.security.intelligenceProfile entity.
*/
class IntelligenceProfileIndicatorItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new IntelligenceProfileIndicatorItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/threatIntelligence/intelProfiles/{intelligenceProfile%2Did}/indicators/{intelligenceProfileIndicator%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Includes an assemblage of high-fidelity network indicators of compromise.
     * @param IntelligenceProfileIndicatorItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IntelligenceProfileIndicator|null>
     * @throws Exception
    */
    public function get(?IntelligenceProfileIndicatorItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IntelligenceProfileIndicator::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Includes an assemblage of high-fidelity network indicators of compromise.
     * @param IntelligenceProfileIndicatorItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IntelligenceProfileIndicatorItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IntelligenceProfileIndicatorItemRequestBuilder
    */
    public function withUrl(string $rawUrl): IntelligenceProfileIndicatorItemRequestBuilder {
        return new IntelligenceProfileIndicatorItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
