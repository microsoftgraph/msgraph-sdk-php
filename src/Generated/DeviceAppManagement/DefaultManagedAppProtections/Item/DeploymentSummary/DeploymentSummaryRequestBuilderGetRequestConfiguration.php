<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\DefaultManagedAppProtections\Item\DeploymentSummary;

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
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var DeploymentSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeploymentSummaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deploymentSummaryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeploymentSummaryRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DeploymentSummaryRequestBuilderGetQueryParameters {
        return new DeploymentSummaryRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new deploymentSummaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DeploymentSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeploymentSummaryRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
