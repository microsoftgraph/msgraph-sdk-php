<?php

namespace Microsoft\Graph\Generated\Me\Contacts\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user's contacts. Read-only. Nullable.
*/
class ContactItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
