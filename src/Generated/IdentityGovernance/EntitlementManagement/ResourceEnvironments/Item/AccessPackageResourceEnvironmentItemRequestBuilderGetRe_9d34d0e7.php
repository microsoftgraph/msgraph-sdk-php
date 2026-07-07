<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceEnvironments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AccessPackageResourceEnvironmentItemRequestBuilderGetRequestConfiguration
*/
class AccessPackageResourceEnvironmentItemRequestBuilderGetRe_9d34d0e7 extends BaseRequestConfiguration 
{
    /**
     * @var AccessPackageResourceEnvironmentItemRequestBuilderGetQu_bf49bc74|null $queryParameters Request query parameters
    */
    public ?AccessPackageResourceEnvironmentItemRequestBuilderGetQu_bf49bc74 $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackageResourceEnvironmentItemRequestBuilderGetRe_9d34d0e7 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackageResourceEnvironmentItemRequestBuilderGetQu_bf49bc74|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackageResourceEnvironmentItemRequestBuilderGetQu_bf49bc74 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackageResourceEnvironmentItemRequestBuilderGetQu_bf49bc74.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessPackageResourceEnvironmentItemRequestBuilderGetQu_bf49bc74
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessPackageResourceEnvironmentItemRequestBuilderGetQu_bf49bc74 {
        return new AccessPackageResourceEnvironmentItemRequestBuilderGetQu_bf49bc74($expand, $select);
    }

}
