<?php

namespace Microsoft\Graph\Generated\Reports\GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_e2eac30b;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_48d73979 extends BaseRequestConfiguration 
{
    /**
     * @var GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_a2946729|null $queryParameters Request query parameters
    */
    public ?GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_a2946729 $queryParameters = null;
    
    /**
     * Instantiates a new GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_48d73979 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_a2946729|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_a2946729 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_a2946729.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_a2946729
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_a2946729 {
        return new GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWi_a2946729($count, $filter, $search, $skip, $top);
    }

}
