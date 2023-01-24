<?php

namespace Microsoft\Graph\Generated\Me\Messages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The messages in a mailbox or folder. Read-only. Nullable.
*/
class MessageItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
