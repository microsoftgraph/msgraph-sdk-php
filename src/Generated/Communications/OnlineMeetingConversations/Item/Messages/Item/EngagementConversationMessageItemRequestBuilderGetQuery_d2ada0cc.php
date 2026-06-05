<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Messages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The messages in a Viva Engage conversation. Original name: EngagementConversationMessageItemRequestBuilderGetQueryParameters
*/
class EngagementConversationMessageItemRequestBuilderGetQuery_d2ada0cc 
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
     * Instantiates a new EngagementConversationMessageItemRequestBuilderGetQuery_d2ada0cc and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
