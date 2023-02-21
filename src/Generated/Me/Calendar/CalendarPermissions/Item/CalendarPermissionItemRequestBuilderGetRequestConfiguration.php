<?php

namespace Microsoft\Graph\Generated\Me\Calendar\CalendarPermissions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CalendarPermissionItemRequestBuilderGetRequestConfiguration 
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
     * @var CalendarPermissionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CalendarPermissionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CalendarPermissionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return CalendarPermissionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): CalendarPermissionItemRequestBuilderGetQueryParameters {
        return new CalendarPermissionItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new CalendarPermissionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param CalendarPermissionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CalendarPermissionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
