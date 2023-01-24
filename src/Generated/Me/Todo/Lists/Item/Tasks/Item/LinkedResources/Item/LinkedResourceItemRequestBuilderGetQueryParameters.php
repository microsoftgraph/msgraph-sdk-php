<?php

namespace Microsoft\Graph\Generated\Me\Todo\Lists\Item\Tasks\Item\LinkedResources\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of resources linked to the task.
*/
class LinkedResourceItemRequestBuilderGetQueryParameters 
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
