<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Comments\Item\Replies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get replies from drives
*/
class WorkbookCommentReplyItemRequestBuilderGetQueryParameters 
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
