<?php

namespace Microsoft\Graph\Generated\EmployeeExperience;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EmployeeExperienceRequestBuilderGetRequestConfiguration 
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
     * @var EmployeeExperienceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EmployeeExperienceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new employeeExperienceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EmployeeExperienceRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): EmployeeExperienceRequestBuilderGetQueryParameters {
        return new EmployeeExperienceRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new employeeExperienceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmployeeExperienceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmployeeExperienceRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
