<?php

namespace Microsoft\Graph\Generated\EscapedPrint\TaskDefinitions\Item\Tasks\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A list of tasks that have been created based on this definition. The list includes currently running tasks and recently completed tasks. Read-only.
*/
class PrintTaskItemRequestBuilderGetQueryParameters 
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
