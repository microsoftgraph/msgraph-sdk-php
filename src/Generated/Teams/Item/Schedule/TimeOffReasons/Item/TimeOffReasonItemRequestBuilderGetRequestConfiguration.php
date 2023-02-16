<?php

namespace Microsoft\Graph\Generated\Teams\Item\Schedule\TimeOffReasons\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TimeOffReasonItemRequestBuilderGetRequestConfiguration 
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
     * @var TimeOffReasonItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TimeOffReasonItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TimeOffReasonItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return TimeOffReasonItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): TimeOffReasonItemRequestBuilderGetQueryParameters {
        return new TimeOffReasonItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new TimeOffReasonItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TimeOffReasonItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TimeOffReasonItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
