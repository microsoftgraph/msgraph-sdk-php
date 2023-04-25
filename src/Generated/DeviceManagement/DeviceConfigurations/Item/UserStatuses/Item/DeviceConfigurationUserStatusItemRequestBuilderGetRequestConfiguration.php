<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\UserStatuses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceConfigurationUserStatusItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceConfigurationUserStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceConfigurationUserStatusItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceConfigurationUserStatusItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceConfigurationUserStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceConfigurationUserStatusItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceConfigurationUserStatusItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceConfigurationUserStatusItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceConfigurationUserStatusItemRequestBuilderGetQueryParameters {
        return new DeviceConfigurationUserStatusItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
