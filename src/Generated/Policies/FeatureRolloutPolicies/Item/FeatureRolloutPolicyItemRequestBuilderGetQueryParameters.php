<?php

namespace Microsoft\Graph\Generated\Policies\FeatureRolloutPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The feature rollout policy associated with a directory object.
*/
class FeatureRolloutPolicyItemRequestBuilderGetQueryParameters 
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
