<?php

namespace Microsoft\Graph\Generated\InformationProtection\Bitlocker\RecoveryKeys\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BitlockerRecoveryKeyItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BitlockerRecoveryKeyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters {
        return new BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
