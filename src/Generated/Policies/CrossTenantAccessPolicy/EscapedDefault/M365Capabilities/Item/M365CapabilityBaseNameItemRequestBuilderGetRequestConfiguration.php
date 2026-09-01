<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\EscapedDefault\M365Capabilities\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class M365CapabilityBaseNameItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var M365CapabilityBaseNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?M365CapabilityBaseNameItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new M365CapabilityBaseNameItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param M365CapabilityBaseNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?M365CapabilityBaseNameItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new M365CapabilityBaseNameItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return M365CapabilityBaseNameItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): M365CapabilityBaseNameItemRequestBuilderGetQueryParameters {
        return new M365CapabilityBaseNameItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
