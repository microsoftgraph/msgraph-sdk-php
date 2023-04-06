<?php

namespace Microsoft\Graph\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item\SharedCookies\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BrowserSharedCookieItemRequestBuilderGetRequestConfiguration 
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
     * @var BrowserSharedCookieItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BrowserSharedCookieItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BrowserSharedCookieItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BrowserSharedCookieItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BrowserSharedCookieItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BrowserSharedCookieItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BrowserSharedCookieItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BrowserSharedCookieItemRequestBuilderGetQueryParameters {
        return new BrowserSharedCookieItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
