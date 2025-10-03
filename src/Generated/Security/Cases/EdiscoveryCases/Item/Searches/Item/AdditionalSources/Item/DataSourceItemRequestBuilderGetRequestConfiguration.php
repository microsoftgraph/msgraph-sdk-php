<?php

namespace Microsoft\\Graph\\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\AdditionalSources\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataSourceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DataSourceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataSourceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DataSourceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DataSourceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataSourceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DataSourceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataSourceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DataSourceItemRequestBuilderGetQueryParameters {
        return new DataSourceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
