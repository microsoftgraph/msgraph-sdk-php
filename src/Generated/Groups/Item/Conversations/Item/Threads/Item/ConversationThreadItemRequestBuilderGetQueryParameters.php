<?php

namespace Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of all the conversation threads in the conversation. A navigation property. Read-only. Nullable.
*/
class ConversationThreadItemRequestBuilderGetQueryParameters 
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
