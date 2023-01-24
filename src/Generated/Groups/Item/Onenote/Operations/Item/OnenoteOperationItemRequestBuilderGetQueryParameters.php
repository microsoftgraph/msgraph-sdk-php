<?php

namespace Microsoft\Graph\Generated\Groups\Item\Onenote\Operations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The status of OneNote operations. Getting an operations collection is not supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
*/
class OnenoteOperationItemRequestBuilderGetQueryParameters 
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
