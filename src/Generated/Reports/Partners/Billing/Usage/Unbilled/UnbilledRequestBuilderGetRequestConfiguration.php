<?php

namespace Microsoft\Graph\Generated\Reports\Partners\Billing\Usage\Unbilled;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UnbilledRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UnbilledRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UnbilledRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new unbilledRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnbilledRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnbilledRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new unbilledRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnbilledRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnbilledRequestBuilderGetQueryParameters {
        return new UnbilledRequestBuilderGetQueryParameters($expand, $select);
    }

}
