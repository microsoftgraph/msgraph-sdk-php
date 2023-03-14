<?php

namespace Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item\AttendanceReports\Item\AttendanceRecords\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AttendanceRecordItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AttendanceRecordItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AttendanceRecordItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AttendanceRecordItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AttendanceRecordItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AttendanceRecordItemRequestBuilderGetQueryParameters {
        return new AttendanceRecordItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new AttendanceRecordItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AttendanceRecordItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AttendanceRecordItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
