<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifactsBulkAdditionRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration
*/
class MailboxRestoreArtifactsBulkAdditionRequestItemRequestBu_72e910e5 extends BaseRequestConfiguration 
{
    /**
     * @var MailboxRestoreArtifactsBulkAdditionRequestItemRequestBu_43cb7c97|null $queryParameters Request query parameters
    */
    public ?MailboxRestoreArtifactsBulkAdditionRequestItemRequestBu_43cb7c97 $queryParameters = null;
    
    /**
     * Instantiates a new MailboxRestoreArtifactsBulkAdditionRequestItemRequestBu_72e910e5 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailboxRestoreArtifactsBulkAdditionRequestItemRequestBu_43cb7c97|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailboxRestoreArtifactsBulkAdditionRequestItemRequestBu_43cb7c97 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MailboxRestoreArtifactsBulkAdditionRequestItemRequestBu_43cb7c97.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MailboxRestoreArtifactsBulkAdditionRequestItemRequestBu_43cb7c97
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MailboxRestoreArtifactsBulkAdditionRequestItemRequestBu_43cb7c97 {
        return new MailboxRestoreArtifactsBulkAdditionRequestItemRequestBu_43cb7c97($expand, $select);
    }

}
