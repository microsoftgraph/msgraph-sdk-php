<?php

namespace Microsoft\Graph\Generated\Policies\FeatureRolloutPolicies\Item\AppliesTo\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Delete ref of navigation property appliesTo for policies
*/
class RefRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("%40id")
     * @var string|null $id The delete Uri
    */
    public ?string $id = null;
    
    /**
     * Instantiates a new RefRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $id The delete Uri
    */
    public function __construct(?string $id = null) {
        $this->id = $id;
    }

}
