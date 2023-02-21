<?php

namespace Microsoft\Graph\Generated\Users\Item\CalendarGroups\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CalendarGroupItemRequestBuilderGetRequestConfiguration 
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
     * @var CalendarGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CalendarGroupItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CalendarGroupItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return CalendarGroupItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): CalendarGroupItemRequestBuilderGetQueryParameters {
        return new CalendarGroupItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new CalendarGroupItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param CalendarGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CalendarGroupItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
