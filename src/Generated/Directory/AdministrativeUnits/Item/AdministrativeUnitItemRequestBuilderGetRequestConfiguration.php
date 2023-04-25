<?php

namespace Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AdministrativeUnitItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AdministrativeUnitItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AdministrativeUnitItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AdministrativeUnitItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AdministrativeUnitItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AdministrativeUnitItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AdministrativeUnitItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AdministrativeUnitItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AdministrativeUnitItemRequestBuilderGetQueryParameters {
        return new AdministrativeUnitItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
