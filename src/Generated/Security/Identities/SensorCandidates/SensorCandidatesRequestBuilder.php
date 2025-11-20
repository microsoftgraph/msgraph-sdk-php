<?php

namespace Microsoft\Graph\Generated\Security\Identities\SensorCandidates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\SensorCandidate;
use Microsoft\Graph\Generated\Models\Security\SensorCandidateCollectionResponse;
use Microsoft\Graph\Generated\Security\Identities\SensorCandidates\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\Identities\SensorCandidates\Item\SensorCandidateItemRequestBuilder;
use Microsoft\Graph\Generated\Security\Identities\SensorCandidates\MicrosoftGraphSecurityActivate\MicrosoftGraphSecurityActivateRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sensorCandidates property of the microsoft.graph.security.identityContainer entity.
*/
class SensorCandidatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the activate method.
    */
    public function microsoftGraphSecurityActivate(): MicrosoftGraphSecurityActivateRequestBuilder {
        return new MicrosoftGraphSecurityActivateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sensorCandidates property of the microsoft.graph.security.identityContainer entity.
     * @param string $sensorCandidateId The unique identifier of sensorCandidate
     * @return SensorCandidateItemRequestBuilder
    */
    public function bySensorCandidateId(string $sensorCandidateId): SensorCandidateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sensorCandidate%2Did'] = $sensorCandidateId;
        return new SensorCandidateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SensorCandidatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/identities/sensorCandidates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the sensorCandidate objects and their properties.
     * @param SensorCandidatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SensorCandidateCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-identitycontainer-list-sensorcandidates?view=graph-rest-1.0 Find more info here
    */
    public function get(?SensorCandidatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SensorCandidateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to sensorCandidates for security
     * @param SensorCandidate $body The request body
     * @param SensorCandidatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SensorCandidate|null>
     * @throws Exception
    */
    public function post(SensorCandidate $body, ?SensorCandidatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SensorCandidate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the sensorCandidate objects and their properties.
     * @param SensorCandidatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SensorCandidatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to sensorCandidates for security
     * @param SensorCandidate $body The request body
     * @param SensorCandidatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SensorCandidate $body, ?SensorCandidatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SensorCandidatesRequestBuilder
    */
    public function withUrl(string $rawUrl): SensorCandidatesRequestBuilder {
        return new SensorCandidatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
