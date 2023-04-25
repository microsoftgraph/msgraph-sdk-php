<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BookingBusinessItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BookingBusinessItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BookingBusinessItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BookingBusinessItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BookingBusinessItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BookingBusinessItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BookingBusinessItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BookingBusinessItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BookingBusinessItemRequestBuilderGetQueryParameters {
        return new BookingBusinessItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
