<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppRegistrations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagedAppRegistrationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ManagedAppRegistrationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagedAppRegistrationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ManagedAppRegistrationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedAppRegistrationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedAppRegistrationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedAppRegistrationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedAppRegistrationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedAppRegistrationItemRequestBuilderGetQueryParameters {
        return new ManagedAppRegistrationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
