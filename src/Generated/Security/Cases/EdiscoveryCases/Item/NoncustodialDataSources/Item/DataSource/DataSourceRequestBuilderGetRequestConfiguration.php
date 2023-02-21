<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\NoncustodialDataSources\Item\DataSource;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataSourceRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var DataSourceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataSourceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new dataSourceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataSourceRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DataSourceRequestBuilderGetQueryParameters {
        return new DataSourceRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new dataSourceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DataSourceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataSourceRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
