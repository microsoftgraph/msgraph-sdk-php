<?php

namespace Microsoft\Graph\Generated\Education\Schools\Item\AdministrativeUnit;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AdministrativeUnitRequestBuilderGetRequestConfiguration 
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
     * @var AdministrativeUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AdministrativeUnitRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new administrativeUnitRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AdministrativeUnitRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AdministrativeUnitRequestBuilderGetQueryParameters {
        return new AdministrativeUnitRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new administrativeUnitRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AdministrativeUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AdministrativeUnitRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
