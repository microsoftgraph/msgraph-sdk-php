<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\InternalSponsors\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove a user or a group from the connected organization's internal sponsors. The internal sponsors are a set of users who can approve requests on behalf of other users from that connected organization.
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
