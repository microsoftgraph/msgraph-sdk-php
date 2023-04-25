<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Customers\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BookingCustomerBaseItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BookingCustomerBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BookingCustomerBaseItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BookingCustomerBaseItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BookingCustomerBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BookingCustomerBaseItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BookingCustomerBaseItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BookingCustomerBaseItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BookingCustomerBaseItemRequestBuilderGetQueryParameters {
        return new BookingCustomerBaseItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
