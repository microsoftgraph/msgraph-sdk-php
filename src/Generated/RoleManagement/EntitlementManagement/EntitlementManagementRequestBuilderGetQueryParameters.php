<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Container for roles and assignments for entitlement management resources.
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
