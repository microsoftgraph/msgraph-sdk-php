<?php

namespace Microsoft\Graph\Generated\Reports\GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_2be0aad7;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_67b8ec2a extends BaseRequestConfiguration 
{
    /**
     * @var GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5deaff62|null $queryParameters Request query parameters
    */
    public ?GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5deaff62 $queryParameters = null;
    
    /**
     * Instantiates a new GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_67b8ec2a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5deaff62|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5deaff62 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5deaff62.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5deaff62
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5deaff62 {
        return new GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWith_5deaff62($count, $filter, $search, $skip, $top);
    }

}
