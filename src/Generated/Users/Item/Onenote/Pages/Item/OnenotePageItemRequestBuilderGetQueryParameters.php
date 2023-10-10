<?php

namespace Microsoft\Graph\Generated\Users\Item\Onenote\Pages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the properties and relationships of a page object. Getting page information Access a page's metadata by page identifier: Getting page content You can use the page's content endpoint to get the HTML content of a page: The includeIDs=true query option is used to update pages. This API is available in the following national cloud deployments.
*/
class OnenotePageItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new OnenotePageItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
