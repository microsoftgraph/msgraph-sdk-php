<?php

namespace Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TelephoneNumberManagementRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TelephoneNumberManagementRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TelephoneNumberManagementRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TelephoneNumberManagementRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TelephoneNumberManagementRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TelephoneNumberManagementRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TelephoneNumberManagementRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TelephoneNumberManagementRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TelephoneNumberManagementRequestBuilderGetQueryParameters {
        return new TelephoneNumberManagementRequestBuilderGetQueryParameters($expand, $select);
    }

}
