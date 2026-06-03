<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration
*/
class ImportedWindowsAutopilotDeviceIdentityItemRequestBuilde_e74bc228 extends BaseRequestConfiguration 
{
    /**
     * @var ImportedWindowsAutopilotDeviceIdentityItemRequestBuilde_37bcab20|null $queryParameters Request query parameters
    */
    public ?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilde_37bcab20 $queryParameters = null;
    
    /**
     * Instantiates a new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilde_e74bc228 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ImportedWindowsAutopilotDeviceIdentityItemRequestBuilde_37bcab20|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilde_37bcab20 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilde_37bcab20.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ImportedWindowsAutopilotDeviceIdentityItemRequestBuilde_37bcab20
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ImportedWindowsAutopilotDeviceIdentityItemRequestBuilde_37bcab20 {
        return new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilde_37bcab20($expand, $select);
    }

}
