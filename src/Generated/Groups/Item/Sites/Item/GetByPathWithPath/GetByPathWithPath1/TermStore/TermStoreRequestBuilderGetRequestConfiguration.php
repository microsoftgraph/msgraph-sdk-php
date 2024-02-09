<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\TermStore;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TermStoreRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TermStoreRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TermStoreRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TermStoreRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TermStoreRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TermStoreRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TermStoreRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TermStoreRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TermStoreRequestBuilderGetQueryParameters {
        return new TermStoreRequestBuilderGetQueryParameters($expand, $select);
    }

}
