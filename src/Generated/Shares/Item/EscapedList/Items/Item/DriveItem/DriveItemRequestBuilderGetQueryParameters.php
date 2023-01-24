<?php

namespace Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\DriveItem;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * For document libraries, the driveItem relationship exposes the listItem as a [driveItem][]
*/
class DriveItemRequestBuilderGetQueryParameters 
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
