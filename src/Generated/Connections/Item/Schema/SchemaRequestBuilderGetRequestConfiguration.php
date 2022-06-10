<?php

namespace Microsoft\Graph\Connections\Item\Schema;

class SchemaRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var SchemaRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SchemaRequestBuilderGetQueryParameters $queryParameters = null;
    
}
