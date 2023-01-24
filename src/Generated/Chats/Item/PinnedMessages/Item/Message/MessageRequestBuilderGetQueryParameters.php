<?php

namespace Microsoft\Graph\Generated\Chats\Item\PinnedMessages\Item\Message;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents details about the chat message that is pinned.
*/
class MessageRequestBuilderGetQueryParameters 
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
