<?php

namespace Microsoft\Graph\Generated\Education\Schools\Item\AdministrativeUnit;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a list of **administrativeUnits** associated with an educationSchool object.
*/
class AdministrativeUnitRequestBuilderGetQueryParameters 
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
