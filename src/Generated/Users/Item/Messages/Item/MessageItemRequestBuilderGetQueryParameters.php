<?php

namespace Microsoft\Graph\Generated\Users\Item\Messages\Item;

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
    
    /**
     * Instantiates a new MessageItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
