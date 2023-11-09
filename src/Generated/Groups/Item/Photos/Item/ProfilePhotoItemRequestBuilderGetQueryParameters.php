<?php

namespace Microsoft\Graph\Generated\Groups\Item\Photos\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The profile photos owned by the group. Read-only. Nullable.
*/
class ProfilePhotoItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new ProfilePhotoItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
