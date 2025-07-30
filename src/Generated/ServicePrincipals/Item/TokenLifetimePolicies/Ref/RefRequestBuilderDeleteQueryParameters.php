<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\TokenLifetimePolicies\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove a tokenLifetimePolicy object from a service principal.
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
