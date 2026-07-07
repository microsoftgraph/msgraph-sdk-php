<?php

namespace Microsoft\Graph\Generated\DeviceManagement\TermsAndConditions\Item\AcceptanceStatuses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: TermsAndConditionsAcceptanceStatusItemRequestBuilderGetRequestConfiguration
*/
class TermsAndConditionsAcceptanceStatusItemRequestBuilderGet_035cfe34 extends BaseRequestConfiguration 
{
    /**
     * @var TermsAndConditionsAcceptanceStatusItemRequestBuilderGet_d0da7ae1|null $queryParameters Request query parameters
    */
    public ?TermsAndConditionsAcceptanceStatusItemRequestBuilderGet_d0da7ae1 $queryParameters = null;
    
    /**
     * Instantiates a new TermsAndConditionsAcceptanceStatusItemRequestBuilderGet_035cfe34 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TermsAndConditionsAcceptanceStatusItemRequestBuilderGet_d0da7ae1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TermsAndConditionsAcceptanceStatusItemRequestBuilderGet_d0da7ae1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TermsAndConditionsAcceptanceStatusItemRequestBuilderGet_d0da7ae1.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TermsAndConditionsAcceptanceStatusItemRequestBuilderGet_d0da7ae1
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TermsAndConditionsAcceptanceStatusItemRequestBuilderGet_d0da7ae1 {
        return new TermsAndConditionsAcceptanceStatusItemRequestBuilderGet_d0da7ae1($expand, $select);
    }

}
