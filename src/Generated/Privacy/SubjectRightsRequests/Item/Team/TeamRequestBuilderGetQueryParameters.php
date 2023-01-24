<?php

namespace Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item\Team;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Information about the Microsoft Teams team that was created for the request.
*/
class TeamRequestBuilderGetQueryParameters 
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
