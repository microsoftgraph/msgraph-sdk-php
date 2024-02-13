<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ManagedDevices\Item\DeviceCategory;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceCategoryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceCategoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceCategoryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceCategoryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceCategoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceCategoryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceCategoryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceCategoryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceCategoryRequestBuilderGetQueryParameters {
        return new DeviceCategoryRequestBuilderGetQueryParameters($expand, $select);
    }

}
