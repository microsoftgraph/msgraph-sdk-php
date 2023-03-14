<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendars\Item\CalendarView\Item\Calendar;

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
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var CalendarRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CalendarRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new calendarRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return CalendarRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): CalendarRequestBuilderGetQueryParameters {
        return new CalendarRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new calendarRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CalendarRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CalendarRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
