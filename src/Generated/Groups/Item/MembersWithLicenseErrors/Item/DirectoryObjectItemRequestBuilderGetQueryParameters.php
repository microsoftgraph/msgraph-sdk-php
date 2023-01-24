<?php

namespace Microsoft\Graph\Generated\Groups\Item\MembersWithLicenseErrors\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A list of group members with license errors from this group-based license assignment. Read-only.
*/
class DirectoryObjectItemRequestBuilderGetQueryParameters 
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
