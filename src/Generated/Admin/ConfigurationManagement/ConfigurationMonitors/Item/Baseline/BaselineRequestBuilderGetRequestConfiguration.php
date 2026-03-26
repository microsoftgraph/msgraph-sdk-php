<?php

namespace Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationMonitors\Item\Baseline;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BaselineRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BaselineRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BaselineRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BaselineRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BaselineRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BaselineRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BaselineRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BaselineRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BaselineRequestBuilderGetQueryParameters {
        return new BaselineRequestBuilderGetQueryParameters($expand, $select);
    }

}
