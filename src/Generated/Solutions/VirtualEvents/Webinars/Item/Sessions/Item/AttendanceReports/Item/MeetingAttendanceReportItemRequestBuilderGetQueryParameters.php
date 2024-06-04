<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\Sessions\Item\AttendanceReports\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the meetingAttendanceReport for an onlineMeeting or a virtualEvent. Each time an online meeting ends, an attendance report is generated for that session.
*/
class MeetingAttendanceReportItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new MeetingAttendanceReportItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
