<?php

namespace Microsoft\Graph\Generated\Solutions\BookingCurrencies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties of a bookingCurrency object that is available to a Microsoft Bookings business. Use the id property, which is the currency code, to specify the currency.
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
    
    /**
     * Instantiates a new BookingCurrencyItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
