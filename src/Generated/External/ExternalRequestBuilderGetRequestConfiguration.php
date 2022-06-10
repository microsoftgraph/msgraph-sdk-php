<?php

namespace Microsoft\Graph\External;

class ExternalRequestBuilderGetRequestConfiguration 
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
     * @var ExternalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalRequestBuilderGetQueryParameters $queryParameters = null;
    
}
