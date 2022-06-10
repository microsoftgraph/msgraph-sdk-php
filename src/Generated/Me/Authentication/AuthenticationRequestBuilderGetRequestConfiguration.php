<?php

namespace Microsoft\Graph\Me\Authentication;

class AuthenticationRequestBuilderGetRequestConfiguration 
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
     * @var AuthenticationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthenticationRequestBuilderGetQueryParameters $queryParameters = null;
    
}
