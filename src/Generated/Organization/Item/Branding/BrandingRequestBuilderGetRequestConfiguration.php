<?php

namespace Microsoft\Graph\Generated\Organization\Item\Branding;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BrandingRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BrandingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BrandingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BrandingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BrandingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BrandingRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BrandingRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BrandingRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BrandingRequestBuilderGetQueryParameters {
        return new BrandingRequestBuilderGetQueryParameters($expand, $select);
    }

}
