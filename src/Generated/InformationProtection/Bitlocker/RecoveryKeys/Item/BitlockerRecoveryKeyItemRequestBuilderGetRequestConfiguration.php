<?php

namespace Microsoft\Graph\Generated\InformationProtection\Bitlocker\RecoveryKeys\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BitlockerRecoveryKeyItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters {
        return new BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new BitlockerRecoveryKeyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
