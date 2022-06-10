<?php

namespace Microsoft\Graph\Communications\Calls;

class CallsRequestBuilderGetRequestConfiguration 
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
     * @var CallsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CallsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
