<?php

namespace Microsoft\\Graph\\Generated\InformationProtection\Bitlocker;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BitlockerRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BitlockerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BitlockerRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BitlockerRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BitlockerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BitlockerRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BitlockerRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BitlockerRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BitlockerRequestBuilderGetQueryParameters {
        return new BitlockerRequestBuilderGetQueryParameters($expand, $select);
    }

}
