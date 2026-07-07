<?php

namespace Microsoft\Graph\Generated\Reports\Security\GetAttackSimulationTrainingUserCoverage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getAttackSimulationTrainingUserCoverageRequestBuilderGetRequestConfiguration
*/
class GetAttackSimulationTrainingUserCoverageRequestBuilderGe_bbcd7065 extends BaseRequestConfiguration 
{
    /**
     * @var GetAttackSimulationTrainingUserCoverageRequestBuilderGe_3a533866|null $queryParameters Request query parameters
    */
    public ?GetAttackSimulationTrainingUserCoverageRequestBuilderGe_3a533866 $queryParameters = null;
    
    /**
     * Instantiates a new GetAttackSimulationTrainingUserCoverageRequestBuilderGe_bbcd7065 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetAttackSimulationTrainingUserCoverageRequestBuilderGe_3a533866|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetAttackSimulationTrainingUserCoverageRequestBuilderGe_3a533866 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetAttackSimulationTrainingUserCoverageRequestBuilderGe_3a533866.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetAttackSimulationTrainingUserCoverageRequestBuilderGe_3a533866
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetAttackSimulationTrainingUserCoverageRequestBuilderGe_3a533866 {
        return new GetAttackSimulationTrainingUserCoverageRequestBuilderGe_3a533866($count, $filter, $search, $skip, $top);
    }

}
