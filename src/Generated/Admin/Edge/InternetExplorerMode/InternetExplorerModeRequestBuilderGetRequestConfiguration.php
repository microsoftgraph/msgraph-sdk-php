<?php

namespace Microsoft\Graph\Generated\Admin\Edge\InternetExplorerMode;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InternetExplorerModeRequestBuilderGetRequestConfiguration 
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
     * @var InternetExplorerModeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InternetExplorerModeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new internetExplorerModeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InternetExplorerModeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InternetExplorerModeRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new internetExplorerModeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InternetExplorerModeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InternetExplorerModeRequestBuilderGetQueryParameters {
        return new InternetExplorerModeRequestBuilderGetQueryParameters($expand, $select);
    }

}
