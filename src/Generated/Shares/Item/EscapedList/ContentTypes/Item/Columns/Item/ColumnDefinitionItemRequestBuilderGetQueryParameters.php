<?php

namespace Microsoft\Graph\Generated\Shares\Item\EscapedList\ContentTypes\Item\Columns\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of column definitions for this contentType.
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
