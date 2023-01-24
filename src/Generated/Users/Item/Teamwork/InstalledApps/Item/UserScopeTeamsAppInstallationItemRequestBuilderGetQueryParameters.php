<?php

namespace Microsoft\Graph\Generated\Users\Item\Teamwork\InstalledApps\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The apps installed in the personal scope of this user.
*/
class UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters 
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
