<?php

namespace Microsoft\Graph\Generated\Users\Item\CalendarGroups\Item\Calendars;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CalendarsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CalendarsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CalendarsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new calendarsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CalendarsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CalendarsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new calendarsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return CalendarsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?int $top = null): CalendarsRequestBuilderGetQueryParameters {
        return new CalendarsRequestBuilderGetQueryParameters($count, $filter, $orderby, $select, $skip, $top);
    }

}
