<?php

namespace Microsoft\Graph\Generated\Chats\Item\LastMessagePreview;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LastMessagePreviewRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var LastMessagePreviewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LastMessagePreviewRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new lastMessagePreviewRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LastMessagePreviewRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): LastMessagePreviewRequestBuilderGetQueryParameters {
        return new LastMessagePreviewRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new lastMessagePreviewRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param LastMessagePreviewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LastMessagePreviewRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
