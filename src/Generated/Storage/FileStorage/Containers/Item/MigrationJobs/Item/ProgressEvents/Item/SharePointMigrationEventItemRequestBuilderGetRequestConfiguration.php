<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\MigrationJobs\Item\ProgressEvents\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SharePointMigrationEventItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SharePointMigrationEventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SharePointMigrationEventItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SharePointMigrationEventItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SharePointMigrationEventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SharePointMigrationEventItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SharePointMigrationEventItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SharePointMigrationEventItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SharePointMigrationEventItemRequestBuilderGetQueryParameters {
        return new SharePointMigrationEventItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
