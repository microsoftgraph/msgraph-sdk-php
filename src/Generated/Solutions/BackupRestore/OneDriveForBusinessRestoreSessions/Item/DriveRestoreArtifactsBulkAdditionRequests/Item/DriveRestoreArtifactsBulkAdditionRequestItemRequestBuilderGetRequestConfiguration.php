<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\DriveRestoreArtifactsBulkAdditionRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters {
        return new DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
