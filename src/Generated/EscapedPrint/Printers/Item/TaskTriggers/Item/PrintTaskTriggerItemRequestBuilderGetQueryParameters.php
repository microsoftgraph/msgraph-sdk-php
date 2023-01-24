<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Printers\Item\TaskTriggers\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A list of task triggers that are associated with the printer.
*/
class PrintTaskTriggerItemRequestBuilderGetQueryParameters 
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
