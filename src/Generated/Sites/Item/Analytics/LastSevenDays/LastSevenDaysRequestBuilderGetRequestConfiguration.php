<?php

namespace Microsoft\\Graph\\Generated\Sites\Item\Analytics\LastSevenDays;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LastSevenDaysRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LastSevenDaysRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LastSevenDaysRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LastSevenDaysRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LastSevenDaysRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LastSevenDaysRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LastSevenDaysRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LastSevenDaysRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LastSevenDaysRequestBuilderGetQueryParameters {
        return new LastSevenDaysRequestBuilderGetQueryParameters($expand, $select);
    }

}
