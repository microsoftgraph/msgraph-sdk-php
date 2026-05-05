<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\GranularSiteRestoreArtifacts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GranularSiteRestoreArtifactItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GranularSiteRestoreArtifactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GranularSiteRestoreArtifactItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GranularSiteRestoreArtifactItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GranularSiteRestoreArtifactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GranularSiteRestoreArtifactItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GranularSiteRestoreArtifactItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GranularSiteRestoreArtifactItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GranularSiteRestoreArtifactItemRequestBuilderGetQueryParameters {
        return new GranularSiteRestoreArtifactItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
