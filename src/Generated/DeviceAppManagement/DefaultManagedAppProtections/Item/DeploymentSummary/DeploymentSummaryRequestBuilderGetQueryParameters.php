<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\DefaultManagedAppProtections\Item\DeploymentSummary;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Navigation property to deployment summary of the configuration.
*/
class DeploymentSummaryRequestBuilderGetQueryParameters 
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
    
}
