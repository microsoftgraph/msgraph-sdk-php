<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Services\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BookingServiceItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var BookingServiceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BookingServiceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BookingServiceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BookingServiceItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): BookingServiceItemRequestBuilderGetQueryParameters {
        return new BookingServiceItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new BookingServiceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BookingServiceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BookingServiceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
