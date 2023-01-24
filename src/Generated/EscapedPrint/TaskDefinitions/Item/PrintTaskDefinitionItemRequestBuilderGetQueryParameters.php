<?php

namespace Microsoft\Graph\Generated\EscapedPrint\TaskDefinitions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of abstract definition for a task that can be triggered when various events occur within Universal Print.
*/
class PrintTaskDefinitionItemRequestBuilderGetQueryParameters 
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
