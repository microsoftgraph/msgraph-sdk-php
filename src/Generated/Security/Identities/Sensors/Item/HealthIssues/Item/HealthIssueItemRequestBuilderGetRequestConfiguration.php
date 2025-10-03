<?php

namespace Microsoft\\Graph\\Generated\Security\Identities\Sensors\Item\HealthIssues\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HealthIssueItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HealthIssueItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HealthIssueItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HealthIssueItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HealthIssueItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HealthIssueItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HealthIssueItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HealthIssueItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HealthIssueItemRequestBuilderGetQueryParameters {
        return new HealthIssueItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
