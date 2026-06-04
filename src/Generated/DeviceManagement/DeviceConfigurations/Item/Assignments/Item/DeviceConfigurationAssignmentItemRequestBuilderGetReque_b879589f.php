<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceConfigurationAssignmentItemRequestBuilderGetRequestConfiguration
*/
class DeviceConfigurationAssignmentItemRequestBuilderGetReque_b879589f extends BaseRequestConfiguration 
{
    /**
     * @var DeviceConfigurationAssignmentItemRequestBuilderGetQuery_b1dbef1c|null $queryParameters Request query parameters
    */
    public ?DeviceConfigurationAssignmentItemRequestBuilderGetQuery_b1dbef1c $queryParameters = null;
    
    /**
     * Instantiates a new DeviceConfigurationAssignmentItemRequestBuilderGetReque_b879589f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceConfigurationAssignmentItemRequestBuilderGetQuery_b1dbef1c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceConfigurationAssignmentItemRequestBuilderGetQuery_b1dbef1c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceConfigurationAssignmentItemRequestBuilderGetQuery_b1dbef1c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceConfigurationAssignmentItemRequestBuilderGetQuery_b1dbef1c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceConfigurationAssignmentItemRequestBuilderGetQuery_b1dbef1c {
        return new DeviceConfigurationAssignmentItemRequestBuilderGetQuery_b1dbef1c($expand, $select);
    }

}
