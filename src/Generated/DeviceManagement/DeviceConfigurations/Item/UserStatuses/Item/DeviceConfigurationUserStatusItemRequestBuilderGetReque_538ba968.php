<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\UserStatuses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceConfigurationUserStatusItemRequestBuilderGetRequestConfiguration
*/
class DeviceConfigurationUserStatusItemRequestBuilderGetReque_538ba968 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceConfigurationUserStatusItemRequestBuilderGetQuery_2d75bac3|null $queryParameters Request query parameters
    */
    public ?DeviceConfigurationUserStatusItemRequestBuilderGetQuery_2d75bac3 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceConfigurationUserStatusItemRequestBuilderGetReque_538ba968 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceConfigurationUserStatusItemRequestBuilderGetQuery_2d75bac3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceConfigurationUserStatusItemRequestBuilderGetQuery_2d75bac3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceConfigurationUserStatusItemRequestBuilderGetQuery_2d75bac3.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceConfigurationUserStatusItemRequestBuilderGetQuery_2d75bac3
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceConfigurationUserStatusItemRequestBuilderGetQuery_2d75bac3 {
        return new DeviceConfigurationUserStatusItemRequestBuilderGetQuery_2d75bac3($expand, $select);
    }

}
