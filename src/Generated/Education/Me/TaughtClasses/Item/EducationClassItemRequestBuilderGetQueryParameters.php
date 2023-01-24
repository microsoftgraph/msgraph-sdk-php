<?php

namespace Microsoft\Graph\Generated\Education\Me\TaughtClasses\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Classes for which the user is a teacher.
*/
class EducationClassItemRequestBuilderGetQueryParameters 
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
