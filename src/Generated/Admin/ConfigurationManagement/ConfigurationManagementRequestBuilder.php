<?php

namespace Microsoft\Graph\Generated\Admin\ConfigurationManagement;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationDrifts\ConfigurationDriftsRequestBuilder;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationMonitoringResults\ConfigurationMonitoringResultsRequestBuilder;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationMonitors\ConfigurationMonitorsRequestBuilder;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationSnapshotJobs\ConfigurationSnapshotJobsRequestBuilder;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationSnapshots\ConfigurationSnapshotsRequestBuilder;
use Microsoft\Graph\Generated\Models\ConfigurationManagement;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the configurationManagement property of the microsoft.graph.admin entity.
*/
class ConfigurationManagementRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the configurationDrifts property of the microsoft.graph.configurationManagement entity.
    */
    public function configurationDrifts(): ConfigurationDriftsRequestBuilder {
        return new ConfigurationDriftsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationMonitoringResults property of the microsoft.graph.configurationManagement entity.
    */
    public function configurationMonitoringResults(): ConfigurationMonitoringResultsRequestBuilder {
        return new ConfigurationMonitoringResultsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationMonitors property of the microsoft.graph.configurationManagement entity.
    */
    public function configurationMonitors(): ConfigurationMonitorsRequestBuilder {
        return new ConfigurationMonitorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationSnapshotJobs property of the microsoft.graph.configurationManagement entity.
    */
    public function configurationSnapshotJobs(): ConfigurationSnapshotJobsRequestBuilder {
        return new ConfigurationSnapshotJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationSnapshots property of the microsoft.graph.configurationManagement entity.
    */
    public function configurationSnapshots(): ConfigurationSnapshotsRequestBuilder {
        return new ConfigurationSnapshotsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ConfigurationManagementRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/configurationManagement{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property configurationManagement for admin
     * @param ConfigurationManagementRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ConfigurationManagementRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A container for Tenant Configuration Management (TCM) resources. Read-only.
     * @param ConfigurationManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationManagement|null>
     * @throws Exception
    */
    public function get(?ConfigurationManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationManagement::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property configurationManagement in admin
     * @param ConfigurationManagement $body The request body
     * @param ConfigurationManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationManagement|null>
     * @throws Exception
    */
    public function patch(ConfigurationManagement $body, ?ConfigurationManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationManagement::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property configurationManagement for admin
     * @param ConfigurationManagementRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ConfigurationManagementRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * A container for Tenant Configuration Management (TCM) resources. Read-only.
     * @param ConfigurationManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConfigurationManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property configurationManagement in admin
     * @param ConfigurationManagement $body The request body
     * @param ConfigurationManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ConfigurationManagement $body, ?ConfigurationManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConfigurationManagementRequestBuilder
    */
    public function withUrl(string $rawUrl): ConfigurationManagementRequestBuilder {
        return new ConfigurationManagementRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
