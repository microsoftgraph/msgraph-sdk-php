<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments\Item\AccessPackage;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
*/
class AccessPackageRequestBuilderGetQueryParameters 
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
