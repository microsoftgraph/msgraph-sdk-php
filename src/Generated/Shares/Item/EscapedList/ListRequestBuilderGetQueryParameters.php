<?php

namespace Microsoft\Graph\Generated\Shares\Item\EscapedList;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Used to access the underlying list
*/
class ListRequestBuilderGetQueryParameters 
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
