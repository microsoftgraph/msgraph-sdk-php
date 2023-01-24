<?php

namespace Microsoft\Graph\Generated\Policies\AuthenticationMethodsPolicy\AuthenticationMethodConfigurations;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthenticationMethodConfigurationsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AuthenticationMethodConfigurationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthenticationMethodConfigurationsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
