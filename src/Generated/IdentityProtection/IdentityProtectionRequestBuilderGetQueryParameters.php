<?php

namespace Microsoft\Graph\Generated\IdentityProtection;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get identityProtection
*/
class IdentityProtectionRequestBuilderGetQueryParameters 
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
    
}
