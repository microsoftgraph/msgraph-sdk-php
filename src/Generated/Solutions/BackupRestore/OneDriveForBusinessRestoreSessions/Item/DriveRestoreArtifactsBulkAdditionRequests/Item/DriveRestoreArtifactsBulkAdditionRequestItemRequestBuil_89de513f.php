<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\DriveRestoreArtifactsBulkAdditionRequests\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a driveRestoreArtifactsBulkAdditionRequest object by its id, associated with a oneDriveForBusinessRestoreSession. Original name: DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters
*/
class DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_89de513f 
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
     * Instantiates a new DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_89de513f and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
