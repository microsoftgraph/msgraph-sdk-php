<?php

namespace Microsoft\Graph\Generated\FilterOperators\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FilterOperatorSchemaItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FilterOperatorSchemaItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FilterOperatorSchemaItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FilterOperatorSchemaItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FilterOperatorSchemaItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FilterOperatorSchemaItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FilterOperatorSchemaItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FilterOperatorSchemaItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FilterOperatorSchemaItemRequestBuilderGetQueryParameters {
        return new FilterOperatorSchemaItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
