<?php

namespace Microsoft\Graph\Contracts;

class ContractsRequestBuilderGetRequestConfiguration 
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
     * @var ContractsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContractsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
