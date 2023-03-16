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
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var IdentitySecurityDefaultsEnforcementPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentitySecurityDefaultsEnforcementPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new identitySecurityDefaultsEnforcementPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentitySecurityDefaultsEnforcementPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentitySecurityDefaultsEnforcementPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new identitySecurityDefaultsEnforcementPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentitySecurityDefaultsEnforcementPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IdentitySecurityDefaultsEnforcementPolicyRequestBuilderGetQueryParameters {
        return new IdentitySecurityDefaultsEnforcementPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
