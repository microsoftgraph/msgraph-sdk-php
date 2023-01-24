<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Customers\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * All the customers of this business. Read-only. Nullable.
*/
class BookingCustomerBaseItemRequestBuilderGetQueryParameters 
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
