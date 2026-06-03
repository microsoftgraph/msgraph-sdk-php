<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of structured question-and-answer (Q&A) threads in Teams directly associated with online meetings. Original name: OnlineMeetingEngagementConversationItemRequestBuilderGetQueryParameters
*/
class OnlineMeetingEngagementConversationItemRequestBuilderGe_c15f900b 
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
     * Instantiates a new OnlineMeetingEngagementConversationItemRequestBuilderGe_c15f900b and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
