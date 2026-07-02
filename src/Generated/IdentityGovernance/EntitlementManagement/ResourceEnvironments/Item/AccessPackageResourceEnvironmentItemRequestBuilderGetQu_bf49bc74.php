<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceEnvironments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A reference to the geolocation environments in which a resource is located. Original name: AccessPackageResourceEnvironmentItemRequestBuilderGetQueryParameters
*/
class AccessPackageResourceEnvironmentItemRequestBuilderGetQu_bf49bc74 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new AccessPackageResourceEnvironmentItemRequestBuilderGetQu_bf49bc74 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
