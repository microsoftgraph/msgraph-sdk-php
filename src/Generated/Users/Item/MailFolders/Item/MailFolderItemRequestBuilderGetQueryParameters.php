<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user's mail folders. Read-only. Nullable.
*/
class MailFolderItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new MailFolderItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
