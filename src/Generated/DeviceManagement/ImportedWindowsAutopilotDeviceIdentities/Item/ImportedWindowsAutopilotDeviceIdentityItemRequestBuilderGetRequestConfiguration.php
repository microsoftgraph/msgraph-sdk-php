<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters {
        return new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
