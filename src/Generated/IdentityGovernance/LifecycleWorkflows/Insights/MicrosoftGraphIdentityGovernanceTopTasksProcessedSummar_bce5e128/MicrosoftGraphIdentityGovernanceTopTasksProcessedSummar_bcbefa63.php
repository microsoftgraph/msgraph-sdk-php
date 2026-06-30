<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Insights\MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_bce5e128;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphIdentityGovernanceTopTasksProcessedSummaryWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_bcbefa63 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_f8adf985|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_f8adf985 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_bcbefa63 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_f8adf985|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_f8adf985 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_f8adf985.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_f8adf985
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_f8adf985 {
        return new MicrosoftGraphIdentityGovernanceTopTasksProcessedSummar_f8adf985($count, $filter, $search, $skip, $top);
    }

}
