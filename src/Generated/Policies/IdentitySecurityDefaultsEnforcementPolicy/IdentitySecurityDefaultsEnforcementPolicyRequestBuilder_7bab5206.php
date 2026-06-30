<?php

namespace Microsoft\Graph\Generated\Policies\IdentitySecurityDefaultsEnforcementPolicy;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the properties of an identitySecurityDefaultsEnforcementPolicy object. Original name: identitySecurityDefaultsEnforcementPolicyRequestBuilderGetQueryParameters
*/
class IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_7bab5206 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new IdentitySecurityDefaultsEnforcementPolicyRequestBuilder_7bab5206 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
