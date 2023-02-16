<?php

namespace Microsoft\Graph\Generated\Me\ContactFolders\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user's contacts folders. Read-only. Nullable.
*/
class ContactFolderItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new ContactFolderItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
