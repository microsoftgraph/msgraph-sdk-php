<?php

namespace Microsoft\Graph\Generated\Applications\Item\ExtensionProperties\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExtensionPropertyItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExtensionPropertyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExtensionPropertyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExtensionPropertyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExtensionPropertyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExtensionPropertyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExtensionPropertyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExtensionPropertyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExtensionPropertyItemRequestBuilderGetQueryParameters {
        return new ExtensionPropertyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
