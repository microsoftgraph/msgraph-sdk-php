<?php

namespace Microsoft\Graph\Identity\ConditionalAccess;

class ConditionalAccessRequestBuilderGetRequestConfiguration 
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
     * @var ConditionalAccessRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConditionalAccessRequestBuilderGetQueryParameters $queryParameters = null;
    
}
