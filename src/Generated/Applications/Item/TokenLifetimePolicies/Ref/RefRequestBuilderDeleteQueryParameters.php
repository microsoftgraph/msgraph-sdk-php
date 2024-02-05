<?php

namespace Microsoft\Graph\Generated\Applications\Item\TokenLifetimePolicies\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove a tokenLifetimePolicy from an application.
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
