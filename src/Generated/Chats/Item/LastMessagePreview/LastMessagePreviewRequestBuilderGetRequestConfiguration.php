<?php

namespace Microsoft\Graph\Generated\Chats\Item\LastMessagePreview;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LastMessagePreviewRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LastMessagePreviewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LastMessagePreviewRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LastMessagePreviewRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LastMessagePreviewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LastMessagePreviewRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LastMessagePreviewRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LastMessagePreviewRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LastMessagePreviewRequestBuilderGetQueryParameters {
        return new LastMessagePreviewRequestBuilderGetQueryParameters($expand, $select);
    }

}
