<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\GraphAdministrativeUnit;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphAdministrativeUnitRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphAdministrativeUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphAdministrativeUnitRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphAdministrativeUnitRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphAdministrativeUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphAdministrativeUnitRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphAdministrativeUnitRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphAdministrativeUnitRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphAdministrativeUnitRequestBuilderGetQueryParameters {
        return new GraphAdministrativeUnitRequestBuilderGetQueryParameters($expand, $select);
    }

}
