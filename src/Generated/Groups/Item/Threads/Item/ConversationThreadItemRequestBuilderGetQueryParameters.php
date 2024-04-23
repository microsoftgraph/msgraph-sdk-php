<?php

namespace Microsoft\Graph\Generated\Groups\Item\Threads\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The group's conversation threads. Nullable.
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
