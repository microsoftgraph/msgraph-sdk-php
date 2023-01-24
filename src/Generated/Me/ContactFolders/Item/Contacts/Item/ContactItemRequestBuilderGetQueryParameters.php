<?php

namespace Microsoft\Graph\Generated\Me\ContactFolders\Item\Contacts\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The contacts in the folder. Navigation property. Read-only. Nullable.
*/
class ContactItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
