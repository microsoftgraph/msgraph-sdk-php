<?php

namespace Microsoft\Graph\Generated\IdentityProtection;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\IdentityProtection\RiskDetections\Item\RiskDetectionItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskDetections\RiskDetectionsRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Item\RiskyServicePrincipalItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\RiskyServicePrincipalsRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskyUsers\Item\RiskyUserItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskyUsers\RiskyUsersRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\ServicePrincipalRiskDetections\Item\ServicePrincipalRiskDetectionItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\ServicePrincipalRiskDetections\ServicePrincipalRiskDetectionsRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityProtectionRoot;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the identityProtectionRoot singleton.
*/
class IdentityProtectionRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the riskDetections property of the microsoft.graph.identityProtectionRoot entity.
    */
    public function riskDetections(): RiskDetectionsRequestBuilder {
        return new RiskDetectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the riskyServicePrincipals property of the microsoft.graph.identityProtectionRoot entity.
    */
    public function riskyServicePrincipals(): RiskyServicePrincipalsRequestBuilder {
        return new RiskyServicePrincipalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the riskyUsers property of the microsoft.graph.identityProtectionRoot entity.
    */
    public function riskyUsers(): RiskyUsersRequestBuilder {
        return new RiskyUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the servicePrincipalRiskDetections property of the microsoft.graph.identityProtectionRoot entity.
    */
    public function servicePrincipalRiskDetections(): ServicePrincipalRiskDetectionsRequestBuilder {
        return new ServicePrincipalRiskDetectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new IdentityProtectionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identityProtection{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get identityProtection
     * @param IdentityProtectionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?IdentityProtectionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [IdentityProtectionRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update identityProtection
     * @param IdentityProtectionRoot $body The request body
     * @param IdentityProtectionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(IdentityProtectionRoot $body, ?IdentityProtectionRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [IdentityProtectionRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the riskDetections property of the microsoft.graph.identityProtectionRoot entity.
     * @param string $id Unique identifier of the item
     * @return RiskDetectionItemRequestBuilder
    */
    public function riskDetectionsById(string $id): RiskDetectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskDetection%2Did'] = $id;
        return new RiskDetectionItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the riskyServicePrincipals property of the microsoft.graph.identityProtectionRoot entity.
     * @param string $id Unique identifier of the item
     * @return RiskyServicePrincipalItemRequestBuilder
    */
    public function riskyServicePrincipalsById(string $id): RiskyServicePrincipalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskyServicePrincipal%2Did'] = $id;
        return new RiskyServicePrincipalItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the riskyUsers property of the microsoft.graph.identityProtectionRoot entity.
     * @param string $id Unique identifier of the item
     * @return RiskyUserItemRequestBuilder
    */
    public function riskyUsersById(string $id): RiskyUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskyUser%2Did'] = $id;
        return new RiskyUserItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the servicePrincipalRiskDetections property of the microsoft.graph.identityProtectionRoot entity.
     * @param string $id Unique identifier of the item
     * @return ServicePrincipalRiskDetectionItemRequestBuilder
    */
    public function servicePrincipalRiskDetectionsById(string $id): ServicePrincipalRiskDetectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['servicePrincipalRiskDetection%2Did'] = $id;
        return new ServicePrincipalRiskDetectionItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Get identityProtection
     * @param IdentityProtectionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IdentityProtectionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update identityProtection
     * @param IdentityProtectionRoot $body The request body
     * @param IdentityProtectionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(IdentityProtectionRoot $body, ?IdentityProtectionRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

}
