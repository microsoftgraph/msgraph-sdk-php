<?php

namespace Microsoft\Graph\Generated\Admin\Sharepoint;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SharepointRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SharepointRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SharepointRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new sharepointRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SharepointRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SharepointRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new sharepointRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SharepointRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SharepointRequestBuilderGetQueryParameters {
        return new SharepointRequestBuilderGetQueryParameters($expand, $select);
    }

}
