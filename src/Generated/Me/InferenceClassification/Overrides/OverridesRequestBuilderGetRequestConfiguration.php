<?php

namespace Microsoft\Graph\Generated\Me\InferenceClassification\Overrides;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OverridesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OverridesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OverridesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new overridesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OverridesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OverridesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new overridesRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return OverridesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?int $top = null): OverridesRequestBuilderGetQueryParameters {
        return new OverridesRequestBuilderGetQueryParameters($count, $filter, $orderby, $select, $skip, $top);
    }

}
