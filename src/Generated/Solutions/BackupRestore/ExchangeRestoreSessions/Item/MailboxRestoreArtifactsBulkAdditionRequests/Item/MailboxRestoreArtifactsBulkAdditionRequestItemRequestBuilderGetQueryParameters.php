<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifactsBulkAdditionRequests\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a mailboxRestoreArtifactsBulkAdditionRequest object by its id, associated with an exchangeRestoreSession.
*/
class MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
