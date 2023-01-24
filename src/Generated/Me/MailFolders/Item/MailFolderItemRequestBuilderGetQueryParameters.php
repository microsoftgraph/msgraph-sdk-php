<?php

namespace Microsoft\Graph\Generated\Me\MailFolders\Item;

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
    
}
