<?php

namespace Microsoft\Graph\Generated\Me\Calendars\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CalendarItemRequestBuilderGetRequestConfiguration 
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
     * @var CalendarItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CalendarItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
