<?php

namespace Microsoft\Graph\Generated\Groups\Item\Calendar\CalendarPermissions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CalendarPermissionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CalendarPermissionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CalendarPermissionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CalendarPermissionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CalendarPermissionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CalendarPermissionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CalendarPermissionsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return CalendarPermissionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?int $top = null): CalendarPermissionsRequestBuilderGetQueryParameters {
        return new CalendarPermissionsRequestBuilderGetQueryParameters($count, $filter, $orderby, $select, $skip, $top);
    }

}
