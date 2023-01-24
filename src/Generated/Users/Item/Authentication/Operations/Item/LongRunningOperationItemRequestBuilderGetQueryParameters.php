<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\Operations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the status of a long-running operation.
*/
class LongRunningOperationItemRequestBuilderGetQueryParameters 
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
