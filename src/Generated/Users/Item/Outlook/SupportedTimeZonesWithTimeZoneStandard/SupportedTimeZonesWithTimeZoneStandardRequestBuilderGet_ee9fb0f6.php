<?php

namespace Microsoft\Graph\Generated\Users\Item\Outlook\SupportedTimeZonesWithTimeZoneStandard;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: supportedTimeZonesWithTimeZoneStandardRequestBuilderGetRequestConfiguration
*/
class SupportedTimeZonesWithTimeZoneStandardRequestBuilderGet_ee9fb0f6 extends BaseRequestConfiguration 
{
    /**
     * @var SupportedTimeZonesWithTimeZoneStandardRequestBuilderGet_89a8d198|null $queryParameters Request query parameters
    */
    public ?SupportedTimeZonesWithTimeZoneStandardRequestBuilderGet_89a8d198 $queryParameters = null;
    
    /**
     * Instantiates a new SupportedTimeZonesWithTimeZoneStandardRequestBuilderGet_ee9fb0f6 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SupportedTimeZonesWithTimeZoneStandardRequestBuilderGet_89a8d198|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SupportedTimeZonesWithTimeZoneStandardRequestBuilderGet_89a8d198 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SupportedTimeZonesWithTimeZoneStandardRequestBuilderGet_89a8d198.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return SupportedTimeZonesWithTimeZoneStandardRequestBuilderGet_89a8d198
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): SupportedTimeZonesWithTimeZoneStandardRequestBuilderGet_89a8d198 {
        return new SupportedTimeZonesWithTimeZoneStandardRequestBuilderGet_89a8d198($count, $filter, $search, $skip, $top);
    }

}
