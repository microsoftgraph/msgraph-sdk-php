<?php

namespace Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationMonitors;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationMonitors\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationMonitors\Item\ConfigurationMonitorItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ConfigurationMonitor;
use Microsoft\Graph\Generated\Models\ConfigurationMonitorCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the configurationMonitors property of the microsoft.graph.configurationManagement entity.
*/
class ConfigurationMonitorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationMonitors property of the microsoft.graph.configurationManagement entity.
     * @param string $configurationMonitorId The unique identifier of configurationMonitor
     * @return ConfigurationMonitorItemRequestBuilder
    */
    public function byConfigurationMonitorId(string $configurationMonitorId): ConfigurationMonitorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['configurationMonitor%2Did'] = $configurationMonitorId;
        return new ConfigurationMonitorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ConfigurationMonitorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/configurationManagement/configurationMonitors{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the configurationMonitor objects and their properties.
     * @param ConfigurationMonitorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationMonitorCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/configurationmanagement-list-configurationmonitors?view=graph-rest-1.0 Find more info here
    */
    public function get(?ConfigurationMonitorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationMonitorCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new configurationMonitor object that runs periodically in the background at a scheduled frequency. You can create up to 30 configurationMonitor objects per tenant. Each monitor runs at a fixed interval of 6 hours and cannot be configured to run at any other frequency. An administrator can monitor up to 800 configuration resources per day per tenant across all monitors.
     * @param ConfigurationMonitor $body The request body
     * @param ConfigurationMonitorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationMonitor|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/configurationmanagement-post-configurationmonitors?view=graph-rest-1.0 Find more info here
    */
    public function post(ConfigurationMonitor $body, ?ConfigurationMonitorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationMonitor::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the configurationMonitor objects and their properties.
     * @param ConfigurationMonitorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConfigurationMonitorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new configurationMonitor object that runs periodically in the background at a scheduled frequency. You can create up to 30 configurationMonitor objects per tenant. Each monitor runs at a fixed interval of 6 hours and cannot be configured to run at any other frequency. An administrator can monitor up to 800 configuration resources per day per tenant across all monitors.
     * @param ConfigurationMonitor $body The request body
     * @param ConfigurationMonitorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConfigurationMonitor $body, ?ConfigurationMonitorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConfigurationMonitorsRequestBuilder
    */
    public function withUrl(string $rawUrl): ConfigurationMonitorsRequestBuilder {
        return new ConfigurationMonitorsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
