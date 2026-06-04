<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\GranularMailboxRestoreArtifacts\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get granularMailboxRestoreArtifacts from solutions Original name: GranularMailboxRestoreArtifactItemRequestBuilderGetQueryParameters
*/
class GranularMailboxRestoreArtifactItemRequestBuilderGetQuer_dc59f8d3 
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
     * Instantiates a new GranularMailboxRestoreArtifactItemRequestBuilderGetQuer_dc59f8d3 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
