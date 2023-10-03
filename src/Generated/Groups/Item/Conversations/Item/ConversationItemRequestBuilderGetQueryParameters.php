<?php

namespace Microsoft\Graph\Generated\Groups\Item\Conversations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * This API is supported in the following national cloud deployments.
*/
class ConversationItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new ConversationItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
