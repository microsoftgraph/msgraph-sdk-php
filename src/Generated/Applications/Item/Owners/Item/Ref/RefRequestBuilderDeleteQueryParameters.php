<?php

namespace Microsoft\Graph\Generated\Applications\Item\Owners\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove an owner from an application. As a recommended best practice, apps should have at least two owners. This API is available in the following national cloud deployments.
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
