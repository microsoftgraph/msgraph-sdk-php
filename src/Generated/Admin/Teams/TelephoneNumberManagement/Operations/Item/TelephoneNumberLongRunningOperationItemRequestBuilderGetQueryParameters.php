<?php

namespace Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\Operations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of microsoft.graph.teamsAdministration.telephoneNumberLongRunningOperation object. This method is used to query the status of an assign or unassign number action using Graph API. This link is returned in the Location response header found in assign or unassign operation result.
*/
class TelephoneNumberLongRunningOperationItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new TelephoneNumberLongRunningOperationItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
