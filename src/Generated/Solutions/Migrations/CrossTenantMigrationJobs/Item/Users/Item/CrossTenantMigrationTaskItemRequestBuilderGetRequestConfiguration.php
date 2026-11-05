<?php

namespace Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobs\Item\Users\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CrossTenantMigrationTaskItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CrossTenantMigrationTaskItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CrossTenantMigrationTaskItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CrossTenantMigrationTaskItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CrossTenantMigrationTaskItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CrossTenantMigrationTaskItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CrossTenantMigrationTaskItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CrossTenantMigrationTaskItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CrossTenantMigrationTaskItemRequestBuilderGetQueryParameters {
        return new CrossTenantMigrationTaskItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
