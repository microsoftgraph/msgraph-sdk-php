<?php

namespace Microsoft\Graph\Generated\Drive\EscapedList\Drive;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Only present on document libraries. Allows access to the list as a [drive][] resource with [driveItems][driveItem].
*/
class DriveRequestBuilderGetQueryParameters 
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
