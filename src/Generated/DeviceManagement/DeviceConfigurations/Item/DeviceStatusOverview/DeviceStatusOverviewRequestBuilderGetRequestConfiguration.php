<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\DeviceStatusOverview;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceStatusOverviewRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceStatusOverviewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceStatusOverviewRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deviceStatusOverviewRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceStatusOverviewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceStatusOverviewRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new deviceStatusOverviewRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceStatusOverviewRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceStatusOverviewRequestBuilderGetQueryParameters {
        return new DeviceStatusOverviewRequestBuilderGetQueryParameters($expand, $select);
    }

}
