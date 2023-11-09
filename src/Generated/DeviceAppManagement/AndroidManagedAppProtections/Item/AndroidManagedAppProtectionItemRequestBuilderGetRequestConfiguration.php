<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\AndroidManagedAppProtections\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AndroidManagedAppProtectionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AndroidManagedAppProtectionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters {
        return new AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
