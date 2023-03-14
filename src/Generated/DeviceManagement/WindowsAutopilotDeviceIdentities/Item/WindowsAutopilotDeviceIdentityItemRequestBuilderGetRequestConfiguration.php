<?php

namespace Microsoft\Graph\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var WindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): WindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters {
        return new WindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new WindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
