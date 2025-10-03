<?php

namespace Microsoft\\Graph\\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\Item\Group;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * References the group that is the scope of the membership or ownership assignment request through PIM for Groups. Supports $expand and $select nested in $expand for select properties like id, displayName, and mail.
*/
class GroupRequestBuilderGetQueryParameters 
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
    
    /**
     * Instantiates a new GroupRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
