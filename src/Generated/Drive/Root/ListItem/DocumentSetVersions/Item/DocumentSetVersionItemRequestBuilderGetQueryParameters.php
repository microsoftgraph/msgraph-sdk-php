<?php

namespace Microsoft\Graph\Generated\Drive\Root\ListItem\DocumentSetVersions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Version information for a document set version created by a user.
*/
class DocumentSetVersionItemRequestBuilderGetQueryParameters 
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
