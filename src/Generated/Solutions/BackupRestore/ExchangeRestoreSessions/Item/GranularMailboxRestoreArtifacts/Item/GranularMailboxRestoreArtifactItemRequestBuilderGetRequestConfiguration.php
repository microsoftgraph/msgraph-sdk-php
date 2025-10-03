<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\GranularMailboxRestoreArtifacts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GranularMailboxRestoreArtifactItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GranularMailboxRestoreArtifactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GranularMailboxRestoreArtifactItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GranularMailboxRestoreArtifactItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GranularMailboxRestoreArtifactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GranularMailboxRestoreArtifactItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GranularMailboxRestoreArtifactItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GranularMailboxRestoreArtifactItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GranularMailboxRestoreArtifactItemRequestBuilderGetQueryParameters {
        return new GranularMailboxRestoreArtifactItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
