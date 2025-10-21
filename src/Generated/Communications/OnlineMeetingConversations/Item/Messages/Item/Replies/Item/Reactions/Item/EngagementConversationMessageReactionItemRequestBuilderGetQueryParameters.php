<?php

namespace Microsoft\\Graph\\Generated\Communications\OnlineMeetingConversations\Item\Messages\Item\Replies\Item\Reactions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of reactions (such as like and smile) that users have applied to this message.
*/
class EngagementConversationMessageReactionItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new EngagementConversationMessageReactionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
