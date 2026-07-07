<?php

namespace Microsoft\Graph\Generated\Policies\IdentitySecurityDefaultsEnforcementPolicy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: identitySecurityDefaultsEnforcementPolicyRequestBuilderGetRequestConfiguration
*/
class IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_97030dd1 extends BaseRequestConfiguration 
{
    /**
     * @var IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_7bab5206|null $queryParameters Request query parameters
    */
    public ?IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_7bab5206 $queryParameters = null;
    
    /**
     * Instantiates a new IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_97030dd1 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_7bab5206|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_7bab5206 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_7bab5206.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_7bab5206
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_7bab5206 {
        return new IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_7bab5206($expand, $select);
    }

}
