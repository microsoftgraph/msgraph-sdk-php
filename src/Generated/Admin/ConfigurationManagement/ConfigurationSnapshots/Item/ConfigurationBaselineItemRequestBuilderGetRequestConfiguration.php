<?php

namespace Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationSnapshots\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConfigurationBaselineItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ConfigurationBaselineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConfigurationBaselineItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ConfigurationBaselineItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConfigurationBaselineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConfigurationBaselineItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConfigurationBaselineItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConfigurationBaselineItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ConfigurationBaselineItemRequestBuilderGetQueryParameters {
        return new ConfigurationBaselineItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
