<?php

namespace Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\Columns\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of field definitions for this list.
*/
class ColumnDefinitionItemRequestBuilderGetQueryParameters 
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
