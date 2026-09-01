<?php

namespace Microsoft\Graph\Generated\Admin\ConfigurationManagement;

use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationDrifts\ConfigurationDriftsRequestBuilder;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationMonitoringResults\ConfigurationMonitoringResultsRequestBuilder;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationMonitors\ConfigurationMonitorsRequestBuilder;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationSnapshotJobs\ConfigurationSnapshotJobsRequestBuilder;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationSnapshots\ConfigurationSnapshotsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /admin/configurationManagement
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
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/configurationManagement');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
