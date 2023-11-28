<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\Owners\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove an owner from a servicePrincipal object. As a recommended best practice, service principals should have at least two owners.
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
