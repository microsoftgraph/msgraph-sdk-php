<?php

namespace Microsoft\Graph\Generated\Directory\TenantGovernance\GovernanceRequests\Item\GovernancePolicyTemplate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GovernancePolicyTemplateRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GovernancePolicyTemplateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GovernancePolicyTemplateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GovernancePolicyTemplateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GovernancePolicyTemplateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GovernancePolicyTemplateRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GovernancePolicyTemplateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GovernancePolicyTemplateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GovernancePolicyTemplateRequestBuilderGetQueryParameters {
        return new GovernancePolicyTemplateRequestBuilderGetQueryParameters($expand, $select);
    }

}
