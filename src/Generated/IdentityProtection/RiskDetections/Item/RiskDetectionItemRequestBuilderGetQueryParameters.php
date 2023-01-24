<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskDetections\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Risk detection in Azure AD Identity Protection and the associated information about the detection.
*/
class RiskDetectionItemRequestBuilderGetQueryParameters 
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
