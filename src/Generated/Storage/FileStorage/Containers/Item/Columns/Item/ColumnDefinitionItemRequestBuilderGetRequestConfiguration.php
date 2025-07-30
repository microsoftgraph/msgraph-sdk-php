<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Columns\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ColumnDefinitionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ColumnDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ColumnDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ColumnDefinitionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ColumnDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ColumnDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ColumnDefinitionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ColumnDefinitionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ColumnDefinitionItemRequestBuilderGetQueryParameters {
        return new ColumnDefinitionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
