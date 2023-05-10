<?php

namespace Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove a member from a directoryRole. You can use both the object ID and template ID of the **directoryRole** with this API. The template ID of a built-in role is immutable and can be seen in the role description on the Azure portal. For details, see Role template IDs.
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
