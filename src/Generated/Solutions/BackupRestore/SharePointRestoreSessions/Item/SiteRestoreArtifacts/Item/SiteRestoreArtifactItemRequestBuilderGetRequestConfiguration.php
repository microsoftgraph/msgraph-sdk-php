<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SiteRestoreArtifacts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SiteRestoreArtifactItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SiteRestoreArtifactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SiteRestoreArtifactItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SiteRestoreArtifactItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SiteRestoreArtifactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SiteRestoreArtifactItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SiteRestoreArtifactItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SiteRestoreArtifactItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SiteRestoreArtifactItemRequestBuilderGetQueryParameters {
        return new SiteRestoreArtifactItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
