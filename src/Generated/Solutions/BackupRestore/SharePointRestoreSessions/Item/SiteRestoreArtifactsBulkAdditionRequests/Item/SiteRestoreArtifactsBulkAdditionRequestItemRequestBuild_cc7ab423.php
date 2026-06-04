<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SiteRestoreArtifactsBulkAdditionRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration
*/
class SiteRestoreArtifactsBulkAdditionRequestItemRequestBuild_cc7ab423 extends BaseRequestConfiguration 
{
    /**
     * @var SiteRestoreArtifactsBulkAdditionRequestItemRequestBuild_433eceff|null $queryParameters Request query parameters
    */
    public ?SiteRestoreArtifactsBulkAdditionRequestItemRequestBuild_433eceff $queryParameters = null;
    
    /**
     * Instantiates a new SiteRestoreArtifactsBulkAdditionRequestItemRequestBuild_cc7ab423 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SiteRestoreArtifactsBulkAdditionRequestItemRequestBuild_433eceff|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SiteRestoreArtifactsBulkAdditionRequestItemRequestBuild_433eceff $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SiteRestoreArtifactsBulkAdditionRequestItemRequestBuild_433eceff.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SiteRestoreArtifactsBulkAdditionRequestItemRequestBuild_433eceff
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SiteRestoreArtifactsBulkAdditionRequestItemRequestBuild_433eceff {
        return new SiteRestoreArtifactsBulkAdditionRequestItemRequestBuild_433eceff($expand, $select);
    }

}
