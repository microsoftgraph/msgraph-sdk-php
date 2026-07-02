<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeProtectionPolicies\Item\MailboxProtectionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration
*/
class MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder_c4cffa6c extends BaseRequestConfiguration 
{
    /**
     * @var MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder_19265b0e|null $queryParameters Request query parameters
    */
    public ?MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder_19265b0e $queryParameters = null;
    
    /**
     * Instantiates a new MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder_c4cffa6c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder_19265b0e|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder_19265b0e $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder_19265b0e.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder_19265b0e
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder_19265b0e {
        return new MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder_19265b0e($expand, $select);
    }

}
