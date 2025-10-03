<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SiteRestoreArtifactsBulkAdditionRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters {
        return new SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
