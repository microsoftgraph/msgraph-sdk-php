<?php

namespace Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobsWithDisplayName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetQueryParameters {
        return new CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetQueryParameters($expand, $select);
    }

}
