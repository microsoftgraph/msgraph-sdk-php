<?php

namespace Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobs\Item\Users\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a crossTenantMigrationTask object that provides details about the migration task for a single user in a crossTenantMigrationJob. The crossTenantMigrationTask contains the status details of migrations for the workloads specified in the crossTenantMigrationJob.
*/
class CrossTenantMigrationTaskItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new CrossTenantMigrationTaskItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
