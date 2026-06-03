<?php

namespace Microsoft\Graph\Generated\Reports\Security\GetAttackSimulationSimulationUserCoverage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getAttackSimulationSimulationUserCoverageRequestBuilderGetRequestConfiguration
*/
class GetAttackSimulationSimulationUserCoverageRequestBuilder_189dacfb extends BaseRequestConfiguration 
{
    /**
     * @var GetAttackSimulationSimulationUserCoverageRequestBuilder_63fb7737|null $queryParameters Request query parameters
    */
    public ?GetAttackSimulationSimulationUserCoverageRequestBuilder_63fb7737 $queryParameters = null;
    
    /**
     * Instantiates a new GetAttackSimulationSimulationUserCoverageRequestBuilder_189dacfb and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetAttackSimulationSimulationUserCoverageRequestBuilder_63fb7737|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetAttackSimulationSimulationUserCoverageRequestBuilder_63fb7737 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetAttackSimulationSimulationUserCoverageRequestBuilder_63fb7737.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetAttackSimulationSimulationUserCoverageRequestBuilder_63fb7737
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetAttackSimulationSimulationUserCoverageRequestBuilder_63fb7737 {
        return new GetAttackSimulationSimulationUserCoverageRequestBuilder_63fb7737($count, $filter, $search, $skip, $top);
    }

}
