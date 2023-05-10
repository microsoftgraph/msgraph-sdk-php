<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleAccessPackages\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove an access package from the list of access packages that have been marked as incompatible on an accessPackage.  
*/
class RefRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("%40id")
     * @var string|null $id Delete Uri
    */
    public ?string $id = null;
    
    /**
     * Instantiates a new RefRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $id Delete Uri
    */
    public function __construct(?string $id = null) {
        $this->id = $id;
    }

}
