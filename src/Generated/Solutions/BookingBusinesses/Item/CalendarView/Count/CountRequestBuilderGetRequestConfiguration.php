<?php

namespace Microsoft\\Graph\\Generated\Solutions\BookingBusinesses\Item\CalendarView\Count;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CountRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CountRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CountRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CountRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CountRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CountRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CountRequestBuilderGetQueryParameters.
     * @param string|null $end The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param string|null $start The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
     * @return CountRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $end = null, ?string $filter = null, ?string $search = null, ?string $start = null): CountRequestBuilderGetQueryParameters {
        return new CountRequestBuilderGetQueryParameters($end, $filter, $search, $start);
    }

}
