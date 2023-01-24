<?php

namespace Microsoft\Graph\Generated\Chats\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a single chat (without its messages). This method supports federation. To access a chat, at least one chat member must belong to the tenant the request initiated from.
*/
class ChatItemRequestBuilderGetQueryParameters 
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
