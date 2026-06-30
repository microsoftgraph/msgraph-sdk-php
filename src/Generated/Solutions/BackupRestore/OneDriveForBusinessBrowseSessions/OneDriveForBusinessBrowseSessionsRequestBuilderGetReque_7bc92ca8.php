<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessBrowseSessions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: oneDriveForBusinessBrowseSessionsRequestBuilderGetRequestConfiguration
*/
class OneDriveForBusinessBrowseSessionsRequestBuilderGetReque_7bc92ca8 extends BaseRequestConfiguration 
{
    /**
     * @var OneDriveForBusinessBrowseSessionsRequestBuilderGetQuery_5e7b6e34|null $queryParameters Request query parameters
    */
    public ?OneDriveForBusinessBrowseSessionsRequestBuilderGetQuery_5e7b6e34 $queryParameters = null;
    
    /**
     * Instantiates a new OneDriveForBusinessBrowseSessionsRequestBuilderGetReque_7bc92ca8 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OneDriveForBusinessBrowseSessionsRequestBuilderGetQuery_5e7b6e34|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OneDriveForBusinessBrowseSessionsRequestBuilderGetQuery_5e7b6e34 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OneDriveForBusinessBrowseSessionsRequestBuilderGetQuery_5e7b6e34.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return OneDriveForBusinessBrowseSessionsRequestBuilderGetQuery_5e7b6e34
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): OneDriveForBusinessBrowseSessionsRequestBuilderGetQuery_5e7b6e34 {
        return new OneDriveForBusinessBrowseSessionsRequestBuilderGetQuery_5e7b6e34($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
