<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\UserStatuses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetRequestConfiguration
*/
class ManagedDeviceMobileAppConfigurationUserStatusItemReques_86e7230d extends BaseRequestConfiguration 
{
    /**
     * @var ManagedDeviceMobileAppConfigurationUserStatusItemReques_35d00b38|null $queryParameters Request query parameters
    */
    public ?ManagedDeviceMobileAppConfigurationUserStatusItemReques_35d00b38 $queryParameters = null;
    
    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationUserStatusItemReques_86e7230d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedDeviceMobileAppConfigurationUserStatusItemReques_35d00b38|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedDeviceMobileAppConfigurationUserStatusItemReques_35d00b38 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationUserStatusItemReques_35d00b38.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedDeviceMobileAppConfigurationUserStatusItemReques_35d00b38
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedDeviceMobileAppConfigurationUserStatusItemReques_35d00b38 {
        return new ManagedDeviceMobileAppConfigurationUserStatusItemReques_35d00b38($expand, $select);
    }

}
