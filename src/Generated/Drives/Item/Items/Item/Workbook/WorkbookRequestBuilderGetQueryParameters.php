<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * For files that are Excel spreadsheets, accesses the workbook API to work with the spreadsheet's contents. Nullable.
*/
class WorkbookRequestBuilderGetQueryParameters 
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
