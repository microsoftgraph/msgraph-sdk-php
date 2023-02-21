<?php

namespace Microsoft\Graph\Generated\Me\Calendar\CalendarView;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CalendarViewRequestBuilderGetRequestConfiguration 
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
     * @var CalendarViewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CalendarViewRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new calendarViewRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $endDateTime The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param string|null $startDateTime The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
     * @param int|null $top Show only the first n items
     * @return CalendarViewRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?bool $count = null, ?string $endDateTime = null, ?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?string $startDateTime = null, ?int $top = null): CalendarViewRequestBuilderGetQueryParameters {
        return new CalendarViewRequestBuilderGetQueryParameters($count, $endDateTime, $filter, $orderby, $select, $skip, $startDateTime, $top);
    }

    /**
     * Instantiates a new calendarViewRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param CalendarViewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CalendarViewRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
