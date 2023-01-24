<?php

namespace Microsoft\Graph\Generated\Me\Chats\Item\InstalledApps\Item\TeamsApp;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The app that is installed.
*/
class TeamsAppRequestBuilderGetQueryParameters 
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
