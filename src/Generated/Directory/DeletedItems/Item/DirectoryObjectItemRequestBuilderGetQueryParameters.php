<?php

namespace Microsoft\Graph\Generated\Directory\DeletedItems\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the properties of a recently deleted application, group, servicePrincipal, administrative unit, or user object from deleted items. Retrieve the properties of a recently deleted directory object from deleted items. The following types are supported:- administrativeUnit- application- certificateBasedAuthPki- certificateAuthorityDetail- group- servicePrincipal- user
*/
class DirectoryObjectItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new DirectoryObjectItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
