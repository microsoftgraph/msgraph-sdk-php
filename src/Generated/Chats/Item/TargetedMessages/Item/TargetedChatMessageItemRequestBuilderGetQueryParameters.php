<?php

namespace Microsoft\Graph\Generated\Chats\Item\TargetedMessages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of targeted messages in the chat that are visible only to specific users. Nullable. You can't expand this relationship using $expand. Targeted messages can also be retrieved via the userTeamwork: getAllTargetedMessages API.
*/
class TargetedChatMessageItemRequestBuilderGetQueryParameters 
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
    
    /**
     * Instantiates a new TargetedChatMessageItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
