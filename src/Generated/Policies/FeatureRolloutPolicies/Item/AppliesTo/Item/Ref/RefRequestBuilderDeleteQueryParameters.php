<?php

namespace Microsoft\Graph\Policies\FeatureRolloutPolicies\Item\AppliesTo\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

class RefRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("%40id")
     * @var string|null $id Delete Uri
    */
    public ?string $id = null;
    
}
