<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\Series\Item\Points\Item\Format\Fill;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the fill format of a chart, which includes background formating information. Read-only.
*/
class FillRequestBuilderGetQueryParameters 
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
