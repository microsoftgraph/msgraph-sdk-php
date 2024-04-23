<?php

namespace Microsoft\Graph\Generated\AuditLogs\Provisioning;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\AuditLogs\Provisioning\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\Provisioning\Item\ProvisioningObjectSummaryItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ProvisioningObjectSummary;
use Microsoft\Graph\Generated\Models\ProvisioningObjectSummaryCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the provisioning property of the microsoft.graph.auditLogRoot entity.
*/
class ProvisioningRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the provisioning property of the microsoft.graph.auditLogRoot entity.
     * @param string $provisioningObjectSummaryId The unique identifier of provisioningObjectSummary
     * @return ProvisioningObjectSummaryItemRequestBuilder
    */
    public function byProvisioningObjectSummaryId(string $provisioningObjectSummaryId): ProvisioningObjectSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['provisioningObjectSummary%2Did'] = $provisioningObjectSummaryId;
        return new ProvisioningObjectSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProvisioningRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs/provisioning{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get provisioning from auditLogs
     * @param ProvisioningRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProvisioningObjectSummaryCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ProvisioningRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProvisioningObjectSummaryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to provisioning for auditLogs
     * @param ProvisioningObjectSummary $body The request body
     * @param ProvisioningRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProvisioningObjectSummary|null>
     * @throws Exception
    */
    public function post(ProvisioningObjectSummary $body, ?ProvisioningRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProvisioningObjectSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get provisioning from auditLogs
     * @param ProvisioningRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProvisioningRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to provisioning for auditLogs
     * @param ProvisioningObjectSummary $body The request body
     * @param ProvisioningRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ProvisioningObjectSummary $body, ?ProvisioningRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProvisioningRequestBuilder
    */
    public function withUrl(string $rawUrl): ProvisioningRequestBuilder {
        return new ProvisioningRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
