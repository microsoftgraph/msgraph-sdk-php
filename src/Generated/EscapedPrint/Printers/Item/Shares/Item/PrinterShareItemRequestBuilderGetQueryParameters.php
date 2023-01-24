<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Printers\Item\Shares\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of printerShares that are associated with the printer. Currently, only one printerShare can be associated with the printer. Read-only. Nullable.
*/
class PrinterShareItemRequestBuilderGetQueryParameters 
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
