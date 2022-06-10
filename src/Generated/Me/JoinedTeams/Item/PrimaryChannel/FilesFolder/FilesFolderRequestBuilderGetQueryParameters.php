<?php

namespace Microsoft\Graph\Me\JoinedTeams\Item\PrimaryChannel\FilesFolder;

use Microsoft\Kiota\Abstractions\QueryParameter;

class FilesFolderRequestBuilderGetQueryParameters 
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
