<?php

namespace Microsoft\\Graph\\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleAccessPackages\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove an access package from the list of access packages that have been marked as incompatible on an accessPackage.  
*/
class RefRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("%40id")
     * @var string|null $id The delete Uri
    */
    public ?string $id = null;
    
    /**
     * Instantiates a new RefRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $id The delete Uri
    */
    public function __construct(?string $id = null) {
        $this->id = $id;
    }

}
