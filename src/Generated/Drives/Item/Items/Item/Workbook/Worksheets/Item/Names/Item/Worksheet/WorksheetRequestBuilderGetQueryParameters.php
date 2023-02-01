<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Names\Item\Worksheet;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Returns the worksheet on which the named item is scoped to. Available only if the item is scoped to the worksheet. Read-only.
*/
class WorksheetRequestBuilderGetQueryParameters 
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
