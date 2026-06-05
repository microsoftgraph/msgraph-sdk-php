<?php

namespace Microsoft\Graph\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration
*/
class WindowsAutopilotDeviceIdentityItemRequestBuilderGetRequ_db6d574f extends BaseRequestConfiguration 
{
    /**
     * @var WindowsAutopilotDeviceIdentityItemRequestBuilderGetQuer_152c74c8|null $queryParameters Request query parameters
    */
    public ?WindowsAutopilotDeviceIdentityItemRequestBuilderGetQuer_152c74c8 $queryParameters = null;
    
    /**
     * Instantiates a new WindowsAutopilotDeviceIdentityItemRequestBuilderGetRequ_db6d574f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsAutopilotDeviceIdentityItemRequestBuilderGetQuer_152c74c8|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsAutopilotDeviceIdentityItemRequestBuilderGetQuer_152c74c8 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsAutopilotDeviceIdentityItemRequestBuilderGetQuer_152c74c8.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsAutopilotDeviceIdentityItemRequestBuilderGetQuer_152c74c8
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsAutopilotDeviceIdentityItemRequestBuilderGetQuer_152c74c8 {
        return new WindowsAutopilotDeviceIdentityItemRequestBuilderGetQuer_152c74c8($expand, $select);
    }

}
