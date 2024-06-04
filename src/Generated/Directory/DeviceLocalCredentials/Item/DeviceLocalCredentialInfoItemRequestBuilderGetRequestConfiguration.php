<?php

namespace Microsoft\Graph\Generated\Directory\DeviceLocalCredentials\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceLocalCredentialInfoItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceLocalCredentialInfoItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters {
        return new DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
