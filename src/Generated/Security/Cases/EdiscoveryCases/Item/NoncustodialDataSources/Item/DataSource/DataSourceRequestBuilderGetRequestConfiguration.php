<?php

namespace Microsoft\\Graph\\Generated\Security\Cases\EdiscoveryCases\Item\NoncustodialDataSources\Item\DataSource;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataSourceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DataSourceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataSourceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DataSourceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DataSourceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataSourceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DataSourceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataSourceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DataSourceRequestBuilderGetQueryParameters {
        return new DataSourceRequestBuilderGetQueryParameters($expand, $select);
    }

}
