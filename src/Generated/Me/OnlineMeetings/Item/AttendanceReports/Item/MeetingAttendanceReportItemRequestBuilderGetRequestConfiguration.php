<?php

namespace Microsoft\Graph\Generated\Me\OnlineMeetings\Item\AttendanceReports\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MeetingAttendanceReportItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var MeetingAttendanceReportItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MeetingAttendanceReportItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MeetingAttendanceReportItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MeetingAttendanceReportItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): MeetingAttendanceReportItemRequestBuilderGetQueryParameters {
        return new MeetingAttendanceReportItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new MeetingAttendanceReportItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MeetingAttendanceReportItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MeetingAttendanceReportItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
