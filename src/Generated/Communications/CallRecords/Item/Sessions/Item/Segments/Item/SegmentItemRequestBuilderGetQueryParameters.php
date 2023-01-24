<?php

namespace Microsoft\Graph\Generated\Communications\CallRecords\Item\Sessions\Item\Segments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of segments involved in the session. Read-only. Nullable.
*/
class SegmentItemRequestBuilderGetQueryParameters 
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
