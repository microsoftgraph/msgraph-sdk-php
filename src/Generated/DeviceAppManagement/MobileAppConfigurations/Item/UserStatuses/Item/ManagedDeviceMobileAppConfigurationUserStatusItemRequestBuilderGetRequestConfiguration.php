<?php

namespace Microsoft\\Graph\\Generated\DeviceAppManagement\MobileAppConfigurations\Item\UserStatuses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetQueryParameters {
        return new ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
