<?php

namespace Microsoft\Graph\Generated\Groups\Item\Threads\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a specific thread that belongs to a group. You can specify both the parent conversation and the thread, or, you can specify the thread without referencing the parent conversation.  This API is supported in the following national cloud deployments.
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
