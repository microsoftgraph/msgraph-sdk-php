<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get entitlementManagement from identityGovernance
*/
class EntitlementManagementRequestBuilderGetQueryParameters 
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
