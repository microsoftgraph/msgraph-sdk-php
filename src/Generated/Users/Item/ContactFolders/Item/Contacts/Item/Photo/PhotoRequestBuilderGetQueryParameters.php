<?php

namespace Microsoft\Graph\Generated\Users\Item\ContactFolders\Item\Contacts\Item\Photo;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Optional contact picture. You can get or set a photo for a contact.
*/
class PhotoRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new PhotoRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
