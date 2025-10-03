<?php

namespace Microsoft\\Graph\\Generated\Security\Cases\EdiscoveryCases\Item\NoncustodialDataSources\Item\LastIndexOperation;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LastIndexOperationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LastIndexOperationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LastIndexOperationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LastIndexOperationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LastIndexOperationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LastIndexOperationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LastIndexOperationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LastIndexOperationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LastIndexOperationRequestBuilderGetQueryParameters {
        return new LastIndexOperationRequestBuilderGetQueryParameters($expand, $select);
    }

}
