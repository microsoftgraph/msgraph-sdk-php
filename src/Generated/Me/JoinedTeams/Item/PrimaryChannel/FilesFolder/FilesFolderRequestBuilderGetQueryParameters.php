<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\PrimaryChannel\FilesFolder;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the metadata for the location where the files of a channel are stored. 
*/
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
