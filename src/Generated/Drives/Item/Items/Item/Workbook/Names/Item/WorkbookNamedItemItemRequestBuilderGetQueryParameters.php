<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Names\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents a collection of workbooks scoped named items (named ranges and constants). Read-only.
*/
class WorkbookNamedItemItemRequestBuilderGetQueryParameters 
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
