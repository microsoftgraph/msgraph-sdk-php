<?php

namespace Microsoft\Graph\Generated\Identity\VerifiedId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VerifiedIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VerifiedIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VerifiedIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VerifiedIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VerifiedIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VerifiedIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VerifiedIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VerifiedIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): VerifiedIdRequestBuilderGetQueryParameters {
        return new VerifiedIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
