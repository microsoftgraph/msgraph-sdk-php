<?php

namespace Microsoft\Graph\Contracts\Item;

class ContractItemRequestBuilderGetRequestConfiguration 
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
     * @var ContractItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContractItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
