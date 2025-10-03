<?php

namespace Microsoft\\Graph\\Generated\Admin\Edge\InternetExplorerMode;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InternetExplorerModeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InternetExplorerModeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InternetExplorerModeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InternetExplorerModeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InternetExplorerModeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InternetExplorerModeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InternetExplorerModeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InternetExplorerModeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InternetExplorerModeRequestBuilderGetQueryParameters {
        return new InternetExplorerModeRequestBuilderGetQueryParameters($expand, $select);
    }

}
