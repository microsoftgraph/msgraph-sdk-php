<?php

namespace Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationMonitoringResults\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ConfigurationMonitoringResultItemRequestBuilderGetRequestConfiguration
*/
class ConfigurationMonitoringResultItemRequestBuilderGetReque_ce22d56e extends BaseRequestConfiguration 
{
    /**
     * @var ConfigurationMonitoringResultItemRequestBuilderGetQuery_21a26938|null $queryParameters Request query parameters
    */
    public ?ConfigurationMonitoringResultItemRequestBuilderGetQuery_21a26938 $queryParameters = null;
    
    /**
     * Instantiates a new ConfigurationMonitoringResultItemRequestBuilderGetReque_ce22d56e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConfigurationMonitoringResultItemRequestBuilderGetQuery_21a26938|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConfigurationMonitoringResultItemRequestBuilderGetQuery_21a26938 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConfigurationMonitoringResultItemRequestBuilderGetQuery_21a26938.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConfigurationMonitoringResultItemRequestBuilderGetQuery_21a26938
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ConfigurationMonitoringResultItemRequestBuilderGetQuery_21a26938 {
        return new ConfigurationMonitoringResultItemRequestBuilderGetQuery_21a26938($expand, $select);
    }

}
