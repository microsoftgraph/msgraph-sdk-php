<?php

namespace Microsoft\Graph\Generated\Groups\Item\Members\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove a member from a group via the members navigation property. You can't remove a member from groups with dynamic memberships.
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
