<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessBrowseSessions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OneDriveForBusinessBrowseSessionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OneDriveForBusinessBrowseSessionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OneDriveForBusinessBrowseSessionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OneDriveForBusinessBrowseSessionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OneDriveForBusinessBrowseSessionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OneDriveForBusinessBrowseSessionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OneDriveForBusinessBrowseSessionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OneDriveForBusinessBrowseSessionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OneDriveForBusinessBrowseSessionItemRequestBuilderGetQueryParameters {
        return new OneDriveForBusinessBrowseSessionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
