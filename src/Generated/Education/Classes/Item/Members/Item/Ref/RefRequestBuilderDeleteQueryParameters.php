<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Members\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove an educationUser from an educationClass. This API is supported in the following national cloud deployments.
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
