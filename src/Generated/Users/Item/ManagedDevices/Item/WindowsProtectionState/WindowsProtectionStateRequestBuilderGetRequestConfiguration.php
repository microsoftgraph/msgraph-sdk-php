<?php

namespace Microsoft\\Graph\\Generated\Users\Item\ManagedDevices\Item\WindowsProtectionState;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsProtectionStateRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WindowsProtectionStateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsProtectionStateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WindowsProtectionStateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsProtectionStateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsProtectionStateRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsProtectionStateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsProtectionStateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsProtectionStateRequestBuilderGetQueryParameters {
        return new WindowsProtectionStateRequestBuilderGetQueryParameters($expand, $select);
    }

}
