<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\Synchronization;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SynchronizationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SynchronizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SynchronizationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SynchronizationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SynchronizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SynchronizationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SynchronizationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SynchronizationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SynchronizationRequestBuilderGetQueryParameters {
        return new SynchronizationRequestBuilderGetQueryParameters($expand, $select);
    }

}
