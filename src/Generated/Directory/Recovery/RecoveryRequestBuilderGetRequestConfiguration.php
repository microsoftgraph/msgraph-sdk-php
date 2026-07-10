<?php

namespace Microsoft\Graph\Generated\Directory\Recovery;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RecoveryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RecoveryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RecoveryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RecoveryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RecoveryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RecoveryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RecoveryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RecoveryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RecoveryRequestBuilderGetQueryParameters {
        return new RecoveryRequestBuilderGetQueryParameters($expand, $select);
    }

}
