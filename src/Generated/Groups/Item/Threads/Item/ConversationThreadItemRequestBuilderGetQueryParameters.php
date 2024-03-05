<?php

namespace Microsoft\Graph\Generated\Groups\Item\Threads\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a thread object.
*/
class ConversationThreadItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new ConversationThreadItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
