<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessBrowseSessions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: OneDriveForBusinessBrowseSessionItemRequestBuilderGetRequestConfiguration
*/
class OneDriveForBusinessBrowseSessionItemRequestBuilderGetRe_d3b10beb extends BaseRequestConfiguration 
{
    /**
     * @var OneDriveForBusinessBrowseSessionItemRequestBuilderGetQu_ad190e08|null $queryParameters Request query parameters
    */
    public ?OneDriveForBusinessBrowseSessionItemRequestBuilderGetQu_ad190e08 $queryParameters = null;
    
    /**
     * Instantiates a new OneDriveForBusinessBrowseSessionItemRequestBuilderGetRe_d3b10beb and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OneDriveForBusinessBrowseSessionItemRequestBuilderGetQu_ad190e08|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OneDriveForBusinessBrowseSessionItemRequestBuilderGetQu_ad190e08 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OneDriveForBusinessBrowseSessionItemRequestBuilderGetQu_ad190e08.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OneDriveForBusinessBrowseSessionItemRequestBuilderGetQu_ad190e08
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OneDriveForBusinessBrowseSessionItemRequestBuilderGetQu_ad190e08 {
        return new OneDriveForBusinessBrowseSessionItemRequestBuilderGetQu_ad190e08($expand, $select);
    }

}
