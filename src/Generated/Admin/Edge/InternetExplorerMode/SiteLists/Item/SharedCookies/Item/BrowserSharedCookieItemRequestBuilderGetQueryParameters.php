<?php

namespace Microsoft\Graph\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item\SharedCookies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a session cookie that can be shared between a Microsoft Edge process and an Internet Explorer process, while using Internet Explorer mode.
*/
class BrowserSharedCookieItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new BrowserSharedCookieItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
