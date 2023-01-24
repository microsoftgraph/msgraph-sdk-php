<?php

namespace Microsoft\Graph\Generated\Education\Users\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get users from education
*/
class EducationUserItemRequestBuilderGetQueryParameters 
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
