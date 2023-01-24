<?php

namespace Microsoft\Graph\Generated\Policies\ConditionalAccessPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The custom rules that define an access scenario.
*/
class ConditionalAccessPolicyItemRequestBuilderGetQueryParameters 
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
