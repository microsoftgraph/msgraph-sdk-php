<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceRequests\Item\Catalog\ResourceScopes\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AccessPackageResourceScopeItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AccessPackageResourceScopeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AccessPackageResourceScopeItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackageResourceScopeItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackageResourceScopeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackageResourceScopeItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackageResourceScopeItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessPackageResourceScopeItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessPackageResourceScopeItemRequestBuilderGetQueryParameters {
        return new AccessPackageResourceScopeItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
