<?php

namespace Microsoft\Graph\Policies\AuthorizationPolicy;

class AuthorizationPolicyRequestBuilderGetRequestConfiguration 
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
     * @var AuthorizationPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthorizationPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
}
