<?php

namespace Microsoft\Graph\Generated\Policies\IdentitySecurityDefaultsEnforcementPolicy;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentitySecurityDefaultsEnforcementPolicyRequestBuilderGetRequestConfiguration 
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
     * @var IdentitySecurityDefaultsEnforcementPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentitySecurityDefaultsEnforcementPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
}
