<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\ThreatIntelligence;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\ArticleIndicators\ArticleIndicatorsRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\Articles\ArticlesRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\HostComponents\HostComponentsRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\HostCookies\HostCookiesRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\Hosts\HostsRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\HostTrackers\HostTrackersRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\IntelligenceProfileIndicators\IntelligenceProfileIndicatorsRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\IntelProfiles\IntelProfilesRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\PassiveDnsRecords\PassiveDnsRecordsRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\Vulnerabilities\VulnerabilitiesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the threatIntelligence property of the microsoft.graph.security entity.
*/
class ThreatIntelligenceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the articleIndicators property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function articleIndicators(): ArticleIndicatorsRequestBuilder {
        return new ArticleIndicatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the articles property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function articles(): ArticlesRequestBuilder {
        return new ArticlesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hostComponents property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function hostComponents(): HostComponentsRequestBuilder {
        return new HostComponentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hostCookies property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function hostCookies(): HostCookiesRequestBuilder {
        return new HostCookiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hosts property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function hosts(): HostsRequestBuilder {
        return new HostsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hostTrackers property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function hostTrackers(): HostTrackersRequestBuilder {
        return new HostTrackersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the intelligenceProfileIndicators property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function intelligenceProfileIndicators(): IntelligenceProfileIndicatorsRequestBuilder {
        return new IntelligenceProfileIndicatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the intelProfiles property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function intelProfiles(): IntelProfilesRequestBuilder {
        return new IntelProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the passiveDnsRecords property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function passiveDnsRecords(): PassiveDnsRecordsRequestBuilder {
        return new PassiveDnsRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the vulnerabilities property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function vulnerabilities(): VulnerabilitiesRequestBuilder {
        return new VulnerabilitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ThreatIntelligenceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/threatIntelligence{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property threatIntelligence for security
     * @param ThreatIntelligenceRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ThreatIntelligenceRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Get threatIntelligence from security
     * @param ThreatIntelligenceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ThreatIntelligenceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ThreatIntelligence::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property threatIntelligence in security
     * @param ThreatIntelligence $body The request body
     * @param ThreatIntelligenceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(ThreatIntelligence $body, ?ThreatIntelligenceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ThreatIntelligence::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property threatIntelligence for security
     * @param ThreatIntelligenceRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ThreatIntelligenceRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Get threatIntelligence from security
     * @param ThreatIntelligenceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ThreatIntelligenceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property threatIntelligence in security
     * @param ThreatIntelligence $body The request body
     * @param ThreatIntelligenceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ThreatIntelligence $body, ?ThreatIntelligenceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ThreatIntelligenceRequestBuilder
    */
    public function withUrl(string $rawUrl): ThreatIntelligenceRequestBuilder {
        return new ThreatIntelligenceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
