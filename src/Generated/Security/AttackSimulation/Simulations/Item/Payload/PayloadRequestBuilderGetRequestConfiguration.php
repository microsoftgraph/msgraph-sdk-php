<?php

namespace Microsoft\Graph\Generated\Security\AttackSimulation\Simulations\Item\Payload;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PayloadRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PayloadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PayloadRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new payloadRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PayloadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PayloadRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new payloadRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PayloadRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PayloadRequestBuilderGetQueryParameters {
        return new PayloadRequestBuilderGetQueryParameters($expand, $select);
    }

}
