<?php

namespace Microsoft\Graph\Identity\ConditionalAccess\Policies;

class PoliciesRequestBuilderGetRequestConfiguration 
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
     * @var PoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PoliciesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
