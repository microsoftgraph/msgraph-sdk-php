<?php

namespace Microsoft\\Graph\\Generated\Directory\AdministrativeUnits\Item\Members\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Use this API to remove a member (user, group, or device) from an administrative unit.
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
