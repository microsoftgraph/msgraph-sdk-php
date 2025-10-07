<?php

namespace Microsoft\\Graph\\Generated\AuditLogs;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\AuditLogs\DirectoryAudits\DirectoryAuditsRequestBuilder;
use Microsoft\\Graph\\Generated\AuditLogs\Provisioning\ProvisioningRequestBuilder;
use Microsoft\\Graph\\Generated\AuditLogs\SignIns\SignInsRequestBuilder;
use Microsoft\\Graph\\Generated\Models\AuditLogRoot;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the auditLogRoot singleton.
*/
class AuditLogsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the directoryAudits property of the microsoft.graph.auditLogRoot entity.
    */
    public function directoryAudits(): DirectoryAuditsRequestBuilder {
        return new DirectoryAuditsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the provisioning property of the microsoft.graph.auditLogRoot entity.
    */
    public function provisioning(): ProvisioningRequestBuilder {
        return new ProvisioningRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the signIns property of the microsoft.graph.auditLogRoot entity.
    */
    public function signIns(): SignInsRequestBuilder {
        return new SignInsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuditLogsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get auditLogs
     * @param AuditLogsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuditLogRoot|null>
     * @throws Exception
    */
    public function get(?AuditLogsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuditLogRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update auditLogs
     * @param AuditLogRoot $body The request body
     * @param AuditLogsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuditLogRoot|null>
     * @throws Exception
    */
    public function patch(AuditLogRoot $body, ?AuditLogsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuditLogRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get auditLogs
     * @param AuditLogsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuditLogsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update auditLogs
     * @param AuditLogRoot $body The request body
     * @param AuditLogsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AuditLogRoot $body, ?AuditLogsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AuditLogsRequestBuilder
    */
    public function withUrl(string $rawUrl): AuditLogsRequestBuilder {
        return new AuditLogsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
