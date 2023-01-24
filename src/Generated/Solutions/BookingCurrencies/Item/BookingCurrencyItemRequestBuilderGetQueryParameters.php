<?php

namespace Microsoft\Graph\Generated\Solutions\BookingCurrencies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get bookingCurrencies from solutions
*/
class BookingCurrencyItemRequestBuilderGetQueryParameters 
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
