<?php

namespace Microsoft\\Graph\\Generated\DeviceManagement\IosUpdateStatuses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IosUpdateDeviceStatusItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IosUpdateDeviceStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IosUpdateDeviceStatusItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IosUpdateDeviceStatusItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IosUpdateDeviceStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IosUpdateDeviceStatusItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IosUpdateDeviceStatusItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IosUpdateDeviceStatusItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IosUpdateDeviceStatusItemRequestBuilderGetQueryParameters {
        return new IosUpdateDeviceStatusItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
