<?php

namespace Microsoft\Graph\Generated\Users\Item\Activities\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user's activities across devices. Read-only. Nullable.
*/
class UserActivityItemRequestBuilderGetQueryParameters 
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
