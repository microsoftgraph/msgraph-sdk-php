<?php

namespace Microsoft\Graph\Generated\Users\Item\People\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PersonItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PersonItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PersonItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PersonItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PersonItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PersonItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PersonItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return PersonItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): PersonItemRequestBuilderGetQueryParameters {
        return new PersonItemRequestBuilderGetQueryParameters($select);
    }

}
