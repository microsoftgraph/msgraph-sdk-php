<?php

namespace Microsoft\Graph\Generated\Users\Item\GetManagedDevicesWithAppFailures;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetManagedDevicesWithAppFailuresRequestBuilderGetRequestConfiguration 
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
     * @var GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new getManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters {
        return new GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

    /**
     * Instantiates a new getManagedDevicesWithAppFailuresRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
