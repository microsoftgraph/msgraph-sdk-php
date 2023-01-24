<?php

namespace Microsoft\Graph\Generated\Agreements;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgreementsRequestBuilderGetRequestConfiguration 
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
     * @var AgreementsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgreementsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
