<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Insights\MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_c71652b8;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphIdentityGovernanceTopWorkflowsProcessedSummaryWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_9c76ff12 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_7a7988ff|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_7a7988ff $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_9c76ff12 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_7a7988ff|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_7a7988ff $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_7a7988ff.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_7a7988ff
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_7a7988ff {
        return new MicrosoftGraphIdentityGovernanceTopWorkflowsProcessedSu_7a7988ff($count, $filter, $search, $skip, $top);
    }

}
