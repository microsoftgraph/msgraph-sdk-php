<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\IosManagedAppProtections\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IosManagedAppProtectionItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var IosManagedAppProtectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IosManagedAppProtectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IosManagedAppProtectionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IosManagedAppProtectionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): IosManagedAppProtectionItemRequestBuilderGetQueryParameters {
        return new IosManagedAppProtectionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new IosManagedAppProtectionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param IosManagedAppProtectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IosManagedAppProtectionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
