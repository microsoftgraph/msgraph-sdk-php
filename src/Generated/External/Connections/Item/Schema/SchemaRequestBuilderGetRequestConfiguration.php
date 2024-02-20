<?php

namespace Microsoft\Graph\Generated\External\Connections\Item\Schema;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SchemaRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SchemaRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SchemaRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SchemaRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SchemaRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SchemaRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SchemaRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SchemaRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SchemaRequestBuilderGetQueryParameters {
        return new SchemaRequestBuilderGetQueryParameters($expand, $select);
    }

}
