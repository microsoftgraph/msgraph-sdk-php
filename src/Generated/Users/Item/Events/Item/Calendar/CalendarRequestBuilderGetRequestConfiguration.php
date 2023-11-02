<?php

namespace Microsoft\Graph\Generated\Users\Item\Events\Item\Calendar;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CalendarRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CalendarRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CalendarRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new calendarRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CalendarRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CalendarRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new calendarRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return CalendarRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): CalendarRequestBuilderGetQueryParameters {
        return new CalendarRequestBuilderGetQueryParameters($select);
    }

}
