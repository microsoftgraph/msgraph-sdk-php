<?php

namespace Microsoft\Graph\Generated\Users\Item\Outlook\SupportedTimeZonesWithTimeZoneStandard;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new supportedTimeZonesWithTimeZoneStandardRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new supportedTimeZonesWithTimeZoneStandardRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetQueryParameters {
        return new SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
