<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\DriveRestoreArtifactsBulkAdditionRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration
*/
class DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_fb92c3b1 extends BaseRequestConfiguration 
{
    /**
     * @var DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_89de513f|null $queryParameters Request query parameters
    */
    public ?DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_89de513f $queryParameters = null;
    
    /**
     * Instantiates a new DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_fb92c3b1 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_89de513f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_89de513f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_89de513f.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_89de513f
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_89de513f {
        return new DriveRestoreArtifactsBulkAdditionRequestItemRequestBuil_89de513f($expand, $select);
    }

}
