<?php

namespace Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\Application;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApplicationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ApplicationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApplicationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApplicationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApplicationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApplicationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApplicationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApplicationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApplicationRequestBuilderGetQueryParameters {
        return new ApplicationRequestBuilderGetQueryParameters($expand, $select);
    }

}
