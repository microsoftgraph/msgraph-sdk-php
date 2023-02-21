<?php

namespace Microsoft\Graph\Generated\DeviceManagement\TelecomExpenseManagementPartners\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TelecomExpenseManagementPartnerItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var TelecomExpenseManagementPartnerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TelecomExpenseManagementPartnerItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TelecomExpenseManagementPartnerItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TelecomExpenseManagementPartnerItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): TelecomExpenseManagementPartnerItemRequestBuilderGetQueryParameters {
        return new TelecomExpenseManagementPartnerItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new TelecomExpenseManagementPartnerItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TelecomExpenseManagementPartnerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TelecomExpenseManagementPartnerItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
