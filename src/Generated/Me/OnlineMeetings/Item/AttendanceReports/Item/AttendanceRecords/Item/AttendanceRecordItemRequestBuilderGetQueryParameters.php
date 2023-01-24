<?php

namespace Microsoft\Graph\Generated\Me\OnlineMeetings\Item\AttendanceReports\Item\AttendanceRecords\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of attendance records of an attendance report. Read-only.
*/
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
