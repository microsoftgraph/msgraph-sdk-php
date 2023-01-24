<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Access packages define the collection of resource roles and the policies for which subjects can request or be assigned access to those resources.
*/
class AccessPackageItemRequestBuilderGetQueryParameters 
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
