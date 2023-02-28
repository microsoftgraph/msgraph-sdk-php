<?php

namespace Microsoft\Graph\Generated\Applications\Item\AppManagementPolicies\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Delete ref of navigation property appManagementPolicies for applications
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
