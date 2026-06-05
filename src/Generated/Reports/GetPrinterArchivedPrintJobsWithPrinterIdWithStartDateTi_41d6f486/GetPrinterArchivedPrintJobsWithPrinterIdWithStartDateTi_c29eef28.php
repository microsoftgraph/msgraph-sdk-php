<?php

namespace Microsoft\Graph\Generated\Reports\GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTi_41d6f486;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTi_c29eef28 extends BaseRequestConfiguration 
{
    /**
     * @var GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTi_c096b643|null $queryParameters Request query parameters
    */
    public ?GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTi_c096b643 $queryParameters = null;
    
    /**
     * Instantiates a new GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTi_c29eef28 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTi_c096b643|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTi_c096b643 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTi_c096b643.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTi_c096b643
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTi_c096b643 {
        return new GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTi_c096b643($count, $filter, $search, $skip, $top);
    }

}
