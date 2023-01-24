<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\DeploymentSummary;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeploymentSummaryRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var DeploymentSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeploymentSummaryRequestBuilderGetQueryParameters $queryParameters = null;
    
}
