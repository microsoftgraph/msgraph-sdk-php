<?php

namespace Microsoft\Graph\Generated\Groups\Item\Drives\Item\EscapedList\ContentTypes\Item\ColumnPositions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Column order information in a content type.
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
