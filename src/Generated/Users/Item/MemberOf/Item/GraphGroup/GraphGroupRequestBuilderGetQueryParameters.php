<?php

namespace Microsoft\Graph\Generated\Users\Item\MemberOf\Item\GraphGroup;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get groups, directory roles, and administrative units that the user is a direct member of. This operation isn't transitive. To retrieve groups, directory roles, and administrative units that the user is a member through transitive membership, use the List user transitive memberOf API.
*/
class GraphGroupRequestBuilderGetQueryParameters 
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
     * Instantiates a new GraphGroupRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
