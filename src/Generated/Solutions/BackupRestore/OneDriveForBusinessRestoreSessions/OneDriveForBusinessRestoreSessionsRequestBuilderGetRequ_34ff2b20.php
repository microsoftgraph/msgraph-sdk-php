<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: oneDriveForBusinessRestoreSessionsRequestBuilderGetRequestConfiguration
*/
class OneDriveForBusinessRestoreSessionsRequestBuilderGetRequ_34ff2b20 extends BaseRequestConfiguration 
{
    /**
     * @var OneDriveForBusinessRestoreSessionsRequestBuilderGetQuer_309c8f0f|null $queryParameters Request query parameters
    */
    public ?OneDriveForBusinessRestoreSessionsRequestBuilderGetQuer_309c8f0f $queryParameters = null;
    
    /**
     * Instantiates a new OneDriveForBusinessRestoreSessionsRequestBuilderGetRequ_34ff2b20 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OneDriveForBusinessRestoreSessionsRequestBuilderGetQuer_309c8f0f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OneDriveForBusinessRestoreSessionsRequestBuilderGetQuer_309c8f0f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OneDriveForBusinessRestoreSessionsRequestBuilderGetQuer_309c8f0f.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return OneDriveForBusinessRestoreSessionsRequestBuilderGetQuer_309c8f0f
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): OneDriveForBusinessRestoreSessionsRequestBuilderGetQuer_309c8f0f {
        return new OneDriveForBusinessRestoreSessionsRequestBuilderGetQuer_309c8f0f($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
