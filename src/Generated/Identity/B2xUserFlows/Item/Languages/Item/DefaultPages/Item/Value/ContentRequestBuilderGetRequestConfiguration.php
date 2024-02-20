<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\Item\DefaultPages\Item\Value;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ContentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ContentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ContentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ContentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ContentRequestBuilderGetQueryParameters.
     * @param string|null $format Format of the content
     * @return ContentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $format = null): ContentRequestBuilderGetQueryParameters {
        return new ContentRequestBuilderGetQueryParameters($format);
    }

}
