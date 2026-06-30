<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\MailboxProtectionUnitsBulkAdditionJobs;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: mailboxProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration
*/
class MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGet_eae31668 extends BaseRequestConfiguration 
{
    /**
     * @var MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGet_2b4c7ce1|null $queryParameters Request query parameters
    */
    public ?MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGet_2b4c7ce1 $queryParameters = null;
    
    /**
     * Instantiates a new MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGet_eae31668 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGet_2b4c7ce1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGet_2b4c7ce1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGet_2b4c7ce1.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGet_2b4c7ce1
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGet_2b4c7ce1 {
        return new MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGet_2b4c7ce1($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
