<?php

namespace Microsoft\Graph\Generated\Education\Me;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new meRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new meRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MeRequestBuilderGetQueryParameters {
        return new MeRequestBuilderGetQueryParameters($expand, $select);
    }

}
