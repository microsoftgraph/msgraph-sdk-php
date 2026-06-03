<?php

namespace Microsoft\Graph\Generated\DeviceManagement\TroubleshootingEvents\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementTroubleshootingEventItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementTroubleshootingEventItemRequestBuilderG_6af9753f extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementTroubleshootingEventItemRequestBuilderG_e555d19a|null $queryParameters Request query parameters
    */
    public ?DeviceManagementTroubleshootingEventItemRequestBuilderG_e555d19a $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementTroubleshootingEventItemRequestBuilderG_6af9753f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementTroubleshootingEventItemRequestBuilderG_e555d19a|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementTroubleshootingEventItemRequestBuilderG_e555d19a $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementTroubleshootingEventItemRequestBuilderG_e555d19a.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementTroubleshootingEventItemRequestBuilderG_e555d19a
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementTroubleshootingEventItemRequestBuilderG_e555d19a {
        return new DeviceManagementTroubleshootingEventItemRequestBuilderG_e555d19a($expand, $select);
    }

}
