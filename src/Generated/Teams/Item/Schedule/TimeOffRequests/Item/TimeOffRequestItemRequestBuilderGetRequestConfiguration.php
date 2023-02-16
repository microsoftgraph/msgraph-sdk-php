<?php

namespace Microsoft\Graph\Generated\Teams\Item\Schedule\TimeOffRequests\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TimeOffRequestItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var TimeOffRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TimeOffRequestItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TimeOffRequestItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return TimeOffRequestItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): TimeOffRequestItemRequestBuilderGetQueryParameters {
        return new TimeOffRequestItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new TimeOffRequestItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TimeOffRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TimeOffRequestItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
