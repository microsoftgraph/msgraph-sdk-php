<?php

namespace Microsoft\Graph\Generated\Reports\Partners\Billing\Reconciliation;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReconciliationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReconciliationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReconciliationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReconciliationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReconciliationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReconciliationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReconciliationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ReconciliationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ReconciliationRequestBuilderGetQueryParameters {
        return new ReconciliationRequestBuilderGetQueryParameters($expand, $select);
    }

}
