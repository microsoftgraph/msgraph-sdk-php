<?php

namespace Microsoft\Graph\Generated\Users\Item\Settings\WorkHoursAndLocations;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorkHoursAndLocationsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WorkHoursAndLocationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorkHoursAndLocationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WorkHoursAndLocationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WorkHoursAndLocationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WorkHoursAndLocationsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WorkHoursAndLocationsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WorkHoursAndLocationsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WorkHoursAndLocationsRequestBuilderGetQueryParameters {
        return new WorkHoursAndLocationsRequestBuilderGetQueryParameters($expand, $select);
    }

}
