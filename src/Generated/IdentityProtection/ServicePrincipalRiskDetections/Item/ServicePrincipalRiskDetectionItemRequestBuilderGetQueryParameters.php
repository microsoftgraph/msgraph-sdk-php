<?php

namespace Microsoft\Graph\Generated\IdentityProtection\ServicePrincipalRiskDetections\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents information about detected at-risk service principals in an Azure AD tenant.
*/
class ServicePrincipalRiskDetectionItemRequestBuilderGetQueryParameters 
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
