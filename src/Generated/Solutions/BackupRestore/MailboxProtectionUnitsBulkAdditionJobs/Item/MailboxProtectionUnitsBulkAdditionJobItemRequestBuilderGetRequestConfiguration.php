<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\MailboxProtectionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters {
        return new MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
