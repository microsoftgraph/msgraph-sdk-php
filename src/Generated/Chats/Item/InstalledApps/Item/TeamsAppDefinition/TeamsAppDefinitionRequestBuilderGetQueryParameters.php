<?php

namespace Microsoft\Graph\Chats\Item\InstalledApps\Item\TeamsAppDefinition;

use Microsoft\Kiota\Abstractions\QueryParameter;

class TeamsAppDefinitionRequestBuilderGetQueryParameters 
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
