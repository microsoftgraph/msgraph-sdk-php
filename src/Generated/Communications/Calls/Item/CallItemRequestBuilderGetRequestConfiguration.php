<?php

namespace Microsoft\Graph\Communications\Calls\Item;

class CallItemRequestBuilderGetRequestConfiguration 
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
     * @var CallItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CallItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
