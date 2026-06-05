<?php

namespace Microsoft\Graph\Generated\Reports\Security\GetAttackSimulationRepeatOffenders;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getAttackSimulationRepeatOffendersRequestBuilderGetRequestConfiguration
*/
class GetAttackSimulationRepeatOffendersRequestBuilderGetRequ_32061572 extends BaseRequestConfiguration 
{
    /**
     * @var GetAttackSimulationRepeatOffendersRequestBuilderGetQuer_c10c9c03|null $queryParameters Request query parameters
    */
    public ?GetAttackSimulationRepeatOffendersRequestBuilderGetQuer_c10c9c03 $queryParameters = null;
    
    /**
     * Instantiates a new GetAttackSimulationRepeatOffendersRequestBuilderGetRequ_32061572 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetAttackSimulationRepeatOffendersRequestBuilderGetQuer_c10c9c03|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetAttackSimulationRepeatOffendersRequestBuilderGetQuer_c10c9c03 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetAttackSimulationRepeatOffendersRequestBuilderGetQuer_c10c9c03.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetAttackSimulationRepeatOffendersRequestBuilderGetQuer_c10c9c03
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetAttackSimulationRepeatOffendersRequestBuilderGetQuer_c10c9c03 {
        return new GetAttackSimulationRepeatOffendersRequestBuilderGetQuer_c10c9c03($count, $filter, $search, $skip, $top);
    }

}
