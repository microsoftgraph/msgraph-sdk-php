<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedDeviceMobileAppConfigurationItemRequestBuilderGetRequestConfiguration
*/
class ManagedDeviceMobileAppConfigurationItemRequestBuilderGe_dad7c2b8 extends BaseRequestConfiguration 
{
    /**
     * @var ManagedDeviceMobileAppConfigurationItemRequestBuilderGe_05fc9c69|null $queryParameters Request query parameters
    */
    public ?ManagedDeviceMobileAppConfigurationItemRequestBuilderGe_05fc9c69 $queryParameters = null;
    
    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationItemRequestBuilderGe_dad7c2b8 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedDeviceMobileAppConfigurationItemRequestBuilderGe_05fc9c69|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedDeviceMobileAppConfigurationItemRequestBuilderGe_05fc9c69 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationItemRequestBuilderGe_05fc9c69.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedDeviceMobileAppConfigurationItemRequestBuilderGe_05fc9c69
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedDeviceMobileAppConfigurationItemRequestBuilderGe_05fc9c69 {
        return new ManagedDeviceMobileAppConfigurationItemRequestBuilderGe_05fc9c69($expand, $select);
    }

}
