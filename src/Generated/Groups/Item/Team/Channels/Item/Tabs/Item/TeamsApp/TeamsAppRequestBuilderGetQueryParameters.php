<?php

namespace Microsoft\Graph\Groups\Item\Team\Channels\Item\Tabs\Item\TeamsApp;

use Microsoft\Kiota\Abstractions\QueryParameter;

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
