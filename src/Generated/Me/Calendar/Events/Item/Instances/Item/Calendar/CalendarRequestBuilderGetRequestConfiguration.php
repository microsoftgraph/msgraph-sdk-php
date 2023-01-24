<?php

namespace Microsoft\Graph\Generated\Me\Calendar\Events\Item\Instances\Item\Calendar;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CalendarRequestBuilderGetRequestConfiguration 
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
     * @var CalendarRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CalendarRequestBuilderGetQueryParameters $queryParameters = null;
    
}
