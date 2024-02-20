<?php

namespace Microsoft\Graph\Generated\EmployeeExperience;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EmployeeExperienceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EmployeeExperienceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EmployeeExperienceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EmployeeExperienceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmployeeExperienceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmployeeExperienceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EmployeeExperienceRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return EmployeeExperienceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): EmployeeExperienceRequestBuilderGetQueryParameters {
        return new EmployeeExperienceRequestBuilderGetQueryParameters($select);
    }

}
