<?php

namespace Microsoft\Graph\Generated\DeviceManagement\TermsAndConditions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The terms and conditions associated with device management of the company.
*/
class TermsAndConditionsItemRequestBuilderGetQueryParameters 
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
