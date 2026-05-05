<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\GranularDriveRestoreArtifacts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GranularDriveRestoreArtifactItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GranularDriveRestoreArtifactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GranularDriveRestoreArtifactItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GranularDriveRestoreArtifactItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GranularDriveRestoreArtifactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GranularDriveRestoreArtifactItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GranularDriveRestoreArtifactItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GranularDriveRestoreArtifactItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GranularDriveRestoreArtifactItemRequestBuilderGetQueryParameters {
        return new GranularDriveRestoreArtifactItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
