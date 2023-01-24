<?php

namespace Microsoft\Graph\Generated\Teams\Item\Members\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Members and owners of the team.
*/
class ConversationMemberItemRequestBuilderGetQueryParameters 
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
