<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\InstalledApps\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The apps installed in this team.
*/
class TeamsAppInstallationItemRequestBuilderGetQueryParameters 
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
