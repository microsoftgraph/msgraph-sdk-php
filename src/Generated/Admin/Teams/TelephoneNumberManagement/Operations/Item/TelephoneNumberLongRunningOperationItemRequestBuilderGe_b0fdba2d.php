<?php

namespace Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\Operations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: TelephoneNumberLongRunningOperationItemRequestBuilderGetRequestConfiguration
*/
class TelephoneNumberLongRunningOperationItemRequestBuilderGe_b0fdba2d extends BaseRequestConfiguration 
{
    /**
     * @var TelephoneNumberLongRunningOperationItemRequestBuilderGe_407755de|null $queryParameters Request query parameters
    */
    public ?TelephoneNumberLongRunningOperationItemRequestBuilderGe_407755de $queryParameters = null;
    
    /**
     * Instantiates a new TelephoneNumberLongRunningOperationItemRequestBuilderGe_b0fdba2d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TelephoneNumberLongRunningOperationItemRequestBuilderGe_407755de|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TelephoneNumberLongRunningOperationItemRequestBuilderGe_407755de $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TelephoneNumberLongRunningOperationItemRequestBuilderGe_407755de.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TelephoneNumberLongRunningOperationItemRequestBuilderGe_407755de
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TelephoneNumberLongRunningOperationItemRequestBuilderGe_407755de {
        return new TelephoneNumberLongRunningOperationItemRequestBuilderGe_407755de($expand, $select);
    }

}
