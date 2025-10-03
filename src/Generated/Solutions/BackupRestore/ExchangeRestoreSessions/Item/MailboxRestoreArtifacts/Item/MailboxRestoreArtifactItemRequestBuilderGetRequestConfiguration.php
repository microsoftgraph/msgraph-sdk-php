<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifacts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MailboxRestoreArtifactItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MailboxRestoreArtifactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MailboxRestoreArtifactItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MailboxRestoreArtifactItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailboxRestoreArtifactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailboxRestoreArtifactItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MailboxRestoreArtifactItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MailboxRestoreArtifactItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MailboxRestoreArtifactItemRequestBuilderGetQueryParameters {
        return new MailboxRestoreArtifactItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
