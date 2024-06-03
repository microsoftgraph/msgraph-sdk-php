<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Permissions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The set of permissions for users in the fileStorageContainer. Permission for each user is set by the roles property. The possible values are 'reader', 'writer', 'manager', and 'owner'. Read-write.
*/
class PermissionItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new PermissionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
