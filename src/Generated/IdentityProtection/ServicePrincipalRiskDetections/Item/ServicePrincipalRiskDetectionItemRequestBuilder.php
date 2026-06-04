<?php

namespace Microsoft\Graph\Generated\IdentityProtection\ServicePrincipalRiskDetections\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ServicePrincipalRiskDetection;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the servicePrincipalRiskDetections property of the microsoft.graph.identityProtectionRoot entity.
*/
class ServicePrincipalRiskDetectionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ServicePrincipalRiskDetectionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityProtection/servicePrincipalRiskDetections/{servicePrincipalRiskDetection%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property servicePrincipalRiskDetections for identityProtection
     * @param ServicePrincipalRiskDetectionItemRequestBuilderDeleteRe_e9d4faeb|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ServicePrincipalRiskDetectionItemRequestBuilderDeleteRe_e9d4faeb $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a servicePrincipalRiskDetection object.
     * @param ServicePrincipalRiskDetectionItemRequestBuilderGetReque_2aff0314|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServicePrincipalRiskDetection|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceprincipalriskdetection-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ServicePrincipalRiskDetectionItemRequestBuilderGetReque_2aff0314 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServicePrincipalRiskDetection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property servicePrincipalRiskDetections in identityProtection
     * @param ServicePrincipalRiskDetection $body The request body
     * @param ServicePrincipalRiskDetectionItemRequestBuilderPatchReq_b3e1bbae|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServicePrincipalRiskDetection|null>
     * @throws Exception
    */
    public function patch(ServicePrincipalRiskDetection $body, ?ServicePrincipalRiskDetectionItemRequestBuilderPatchReq_b3e1bbae $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServicePrincipalRiskDetection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property servicePrincipalRiskDetections for identityProtection
     * @param ServicePrincipalRiskDetectionItemRequestBuilderDeleteRe_e9d4faeb|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ServicePrincipalRiskDetectionItemRequestBuilderDeleteRe_e9d4faeb $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * Read the properties and relationships of a servicePrincipalRiskDetection object.
     * @param ServicePrincipalRiskDetectionItemRequestBuilderGetReque_2aff0314|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ServicePrincipalRiskDetectionItemRequestBuilderGetReque_2aff0314 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/identityProtection/servicePrincipalRiskDetections/{servicePrincipalRiskDetection%2Did}{?%24expand,%24select}';
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
     * Update the navigation property servicePrincipalRiskDetections in identityProtection
     * @param ServicePrincipalRiskDetection $body The request body
     * @param ServicePrincipalRiskDetectionItemRequestBuilderPatchReq_b3e1bbae|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ServicePrincipalRiskDetection $body, ?ServicePrincipalRiskDetectionItemRequestBuilderPatchReq_b3e1bbae $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * @return ServicePrincipalRiskDetectionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ServicePrincipalRiskDetectionItemRequestBuilder {
        return new ServicePrincipalRiskDetectionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
