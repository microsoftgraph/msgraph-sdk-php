<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EntitlementManagementRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EntitlementManagementRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EntitlementManagementRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new entitlementManagementRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EntitlementManagementRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EntitlementManagementRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new entitlementManagementRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EntitlementManagementRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EntitlementManagementRequestBuilderGetQueryParameters {
        return new EntitlementManagementRequestBuilderGetQueryParameters($expand, $select);
    }

}
