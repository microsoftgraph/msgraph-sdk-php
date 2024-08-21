<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve an access package with a list of accessPackageResourceRoleScope objects. These objects represent the resource roles that an access package assigns to each subject. Each object links to an accessPackageResourceRole and an accessPackageResourceScope.
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
    
    /**
     * Instantiates a new AccessPackageItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
