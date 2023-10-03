<?php

namespace Microsoft\Graph\Generated\Drives\Item\Root;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the metadata for a driveItem in a drive by file system path or ID.item-id is the ID of a driveItem. It may also be the unique ID of a SharePoint list item. This API is supported in the following national cloud deployments.
*/
class RootRequestBuilderGetQueryParameters 
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
     * Instantiates a new rootRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
