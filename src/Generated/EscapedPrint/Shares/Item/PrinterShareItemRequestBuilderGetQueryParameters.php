<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Shares\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of printer shares registered in the tenant.
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
