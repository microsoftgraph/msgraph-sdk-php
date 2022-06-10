<?php

namespace Microsoft\Graph\Policies\ConditionalAccessPolicies\Item;

class ConditionalAccessPolicyItemRequestBuilderGetRequestConfiguration 
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
     * @var ConditionalAccessPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConditionalAccessPolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
