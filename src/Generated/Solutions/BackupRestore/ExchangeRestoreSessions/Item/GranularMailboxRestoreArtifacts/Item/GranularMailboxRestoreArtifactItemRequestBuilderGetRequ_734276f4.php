<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\GranularMailboxRestoreArtifacts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: GranularMailboxRestoreArtifactItemRequestBuilderGetRequestConfiguration
*/
class GranularMailboxRestoreArtifactItemRequestBuilderGetRequ_734276f4 extends BaseRequestConfiguration 
{
    /**
     * @var GranularMailboxRestoreArtifactItemRequestBuilderGetQuer_dc59f8d3|null $queryParameters Request query parameters
    */
    public ?GranularMailboxRestoreArtifactItemRequestBuilderGetQuer_dc59f8d3 $queryParameters = null;
    
    /**
     * Instantiates a new GranularMailboxRestoreArtifactItemRequestBuilderGetRequ_734276f4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GranularMailboxRestoreArtifactItemRequestBuilderGetQuer_dc59f8d3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GranularMailboxRestoreArtifactItemRequestBuilderGetQuer_dc59f8d3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GranularMailboxRestoreArtifactItemRequestBuilderGetQuer_dc59f8d3.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GranularMailboxRestoreArtifactItemRequestBuilderGetQuer_dc59f8d3
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GranularMailboxRestoreArtifactItemRequestBuilderGetQuer_dc59f8d3 {
        return new GranularMailboxRestoreArtifactItemRequestBuilderGetQuer_dc59f8d3($expand, $select);
    }

}
