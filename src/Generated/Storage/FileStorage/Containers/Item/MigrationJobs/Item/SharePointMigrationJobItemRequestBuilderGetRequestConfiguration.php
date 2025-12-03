<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\MigrationJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SharePointMigrationJobItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SharePointMigrationJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SharePointMigrationJobItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SharePointMigrationJobItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SharePointMigrationJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SharePointMigrationJobItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SharePointMigrationJobItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SharePointMigrationJobItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SharePointMigrationJobItemRequestBuilderGetQueryParameters {
        return new SharePointMigrationJobItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
