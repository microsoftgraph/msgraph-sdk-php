<?php

namespace Microsoft\\Graph\\Generated\Admin\People\Pronouns;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties of the pronounsSettings resource for an organization.  For more information on settings to manage pronouns support, see Manage pronouns settings for an organization using the Microsoft Graph API.
*/
class PronounsRequestBuilderGetQueryParameters 
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
     * Instantiates a new PronounsRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
