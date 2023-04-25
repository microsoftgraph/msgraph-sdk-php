<?php

namespace Microsoft\Graph\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item\Sites\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BrowserSiteItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BrowserSiteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BrowserSiteItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BrowserSiteItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BrowserSiteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BrowserSiteItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BrowserSiteItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BrowserSiteItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BrowserSiteItemRequestBuilderGetQueryParameters {
        return new BrowserSiteItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
