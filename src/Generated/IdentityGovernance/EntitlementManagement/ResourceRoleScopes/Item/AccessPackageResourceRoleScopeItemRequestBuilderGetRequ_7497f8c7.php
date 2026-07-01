<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceRoleScopes\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AccessPackageResourceRoleScopeItemRequestBuilderGetRequestConfiguration
*/
class AccessPackageResourceRoleScopeItemRequestBuilderGetRequ_7497f8c7 extends BaseRequestConfiguration 
{
    /**
     * @var AccessPackageResourceRoleScopeItemRequestBuilderGetQuer_cd67d9cb|null $queryParameters Request query parameters
    */
    public ?AccessPackageResourceRoleScopeItemRequestBuilderGetQuer_cd67d9cb $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackageResourceRoleScopeItemRequestBuilderGetRequ_7497f8c7 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackageResourceRoleScopeItemRequestBuilderGetQuer_cd67d9cb|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackageResourceRoleScopeItemRequestBuilderGetQuer_cd67d9cb $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackageResourceRoleScopeItemRequestBuilderGetQuer_cd67d9cb.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessPackageResourceRoleScopeItemRequestBuilderGetQuer_cd67d9cb
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessPackageResourceRoleScopeItemRequestBuilderGetQuer_cd67d9cb {
        return new AccessPackageResourceRoleScopeItemRequestBuilderGetQuer_cd67d9cb($expand, $select);
    }

}
