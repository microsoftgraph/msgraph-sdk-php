<?php

namespace Microsoft\Graph\Generated\Reports\Partners;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PartnersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PartnersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PartnersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new partnersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PartnersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PartnersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new partnersRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PartnersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PartnersRequestBuilderGetQueryParameters {
        return new PartnersRequestBuilderGetQueryParameters($expand, $select);
    }

}
