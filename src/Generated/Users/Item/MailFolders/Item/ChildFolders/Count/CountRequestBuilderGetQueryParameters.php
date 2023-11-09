<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders\Item\ChildFolders\Count;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the number of the resource
*/
class CountRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * Instantiates a new CountRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $filter Filter items by property values
    */
    public function __construct(?string $filter = null) {
        $this->filter = $filter;
    }

}
