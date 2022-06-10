<?php

namespace Microsoft\Graph\Me\OnlineMeetings\Item\AttendanceReports\Item\AttendanceRecords\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class AttendanceRecordItemRequestBuilderGetQueryParameters 
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
