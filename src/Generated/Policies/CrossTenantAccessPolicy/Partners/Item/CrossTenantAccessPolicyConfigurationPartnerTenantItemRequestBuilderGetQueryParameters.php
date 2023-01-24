<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\Partners\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Defines partner-specific configurations for external Azure Active Directory organizations.
*/
class CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderGetQueryParameters 
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
    
}
