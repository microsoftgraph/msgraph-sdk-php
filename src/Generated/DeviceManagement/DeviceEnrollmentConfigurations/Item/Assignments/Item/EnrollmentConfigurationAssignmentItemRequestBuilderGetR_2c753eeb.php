<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceEnrollmentConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: EnrollmentConfigurationAssignmentItemRequestBuilderGetRequestConfiguration
*/
class EnrollmentConfigurationAssignmentItemRequestBuilderGetR_2c753eeb extends BaseRequestConfiguration 
{
    /**
     * @var EnrollmentConfigurationAssignmentItemRequestBuilderGetQ_9135b9e2|null $queryParameters Request query parameters
    */
    public ?EnrollmentConfigurationAssignmentItemRequestBuilderGetQ_9135b9e2 $queryParameters = null;
    
    /**
     * Instantiates a new EnrollmentConfigurationAssignmentItemRequestBuilderGetR_2c753eeb and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EnrollmentConfigurationAssignmentItemRequestBuilderGetQ_9135b9e2|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EnrollmentConfigurationAssignmentItemRequestBuilderGetQ_9135b9e2 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EnrollmentConfigurationAssignmentItemRequestBuilderGetQ_9135b9e2.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EnrollmentConfigurationAssignmentItemRequestBuilderGetQ_9135b9e2
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EnrollmentConfigurationAssignmentItemRequestBuilderGetQ_9135b9e2 {
        return new EnrollmentConfigurationAssignmentItemRequestBuilderGetQ_9135b9e2($expand, $select);
    }

}
