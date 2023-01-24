<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Services\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * All the services offered by this business. Read-only. Nullable.
*/
class BookingServiceItemRequestBuilderGetQueryParameters 
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
