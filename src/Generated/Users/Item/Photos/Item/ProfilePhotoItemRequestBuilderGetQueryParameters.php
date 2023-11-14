<?php

namespace Microsoft\Graph\Generated\Users\Item\Photos\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of the user's profile photos in different sizes. Read-only.
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
