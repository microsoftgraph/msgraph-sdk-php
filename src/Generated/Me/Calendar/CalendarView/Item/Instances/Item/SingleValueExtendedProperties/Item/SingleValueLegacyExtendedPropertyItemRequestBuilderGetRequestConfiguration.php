<?php

namespace Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\Instances\Item\SingleValueExtendedProperties\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SingleValueLegacyExtendedPropertyItemRequestBuilderGetRequestConfiguration 
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
     * @var SingleValueLegacyExtendedPropertyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SingleValueLegacyExtendedPropertyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SingleValueLegacyExtendedPropertyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SingleValueLegacyExtendedPropertyItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SingleValueLegacyExtendedPropertyItemRequestBuilderGetQueryParameters {
        return new SingleValueLegacyExtendedPropertyItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new SingleValueLegacyExtendedPropertyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SingleValueLegacyExtendedPropertyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SingleValueLegacyExtendedPropertyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
