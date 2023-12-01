<?php

namespace Microsoft\Graph\Generated\IdentityProtection\ServicePrincipalRiskDetections;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityProtection\ServicePrincipalRiskDetections\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\ServicePrincipalRiskDetections\Item\ServicePrincipalRiskDetectionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ServicePrincipalRiskDetection;
use Microsoft\Graph\Generated\Models\ServicePrincipalRiskDetectionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the servicePrincipalRiskDetections property of the microsoft.graph.identityProtectionRoot entity.
*/
class ServicePrincipalRiskDetectionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the servicePrincipalRiskDetections property of the microsoft.graph.identityProtectionRoot entity.
     * @param string $servicePrincipalRiskDetectionId The unique identifier of servicePrincipalRiskDetection
     * @return ServicePrincipalRiskDetectionItemRequestBuilder
    */
    public function byServicePrincipalRiskDetectionId(string $servicePrincipalRiskDetectionId): ServicePrincipalRiskDetectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['servicePrincipalRiskDetection%2Did'] = $servicePrincipalRiskDetectionId;
        return new ServicePrincipalRiskDetectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ServicePrincipalRiskDetectionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityProtection/servicePrincipalRiskDetections{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the properties of a collection of servicePrincipalRiskDetection objects.
     * @param ServicePrincipalRiskDetectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServicePrincipalRiskDetectionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityprotectionroot-list-serviceprincipalriskdetections?view=graph-rest-1.0 Find more info here
    */
    public function get(?ServicePrincipalRiskDetectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServicePrincipalRiskDetectionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to servicePrincipalRiskDetections for identityProtection
     * @param ServicePrincipalRiskDetection $body The request body
     * @param ServicePrincipalRiskDetectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServicePrincipalRiskDetection|null>
     * @throws Exception
    */
    public function post(ServicePrincipalRiskDetection $body, ?ServicePrincipalRiskDetectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServicePrincipalRiskDetection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the properties of a collection of servicePrincipalRiskDetection objects.
     * @param ServicePrincipalRiskDetectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ServicePrincipalRiskDetectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to servicePrincipalRiskDetections for identityProtection
     * @param ServicePrincipalRiskDetection $body The request body
     * @param ServicePrincipalRiskDetectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ServicePrincipalRiskDetection $body, ?ServicePrincipalRiskDetectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ServicePrincipalRiskDetectionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ServicePrincipalRiskDetectionsRequestBuilder {
        return new ServicePrincipalRiskDetectionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
