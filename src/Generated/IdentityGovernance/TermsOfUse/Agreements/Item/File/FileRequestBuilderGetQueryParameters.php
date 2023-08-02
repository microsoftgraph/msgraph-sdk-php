<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\TermsOfUse\Agreements\Item\File;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the details of an agreement file, including the language and version information. The default file can have multiple versions, each with its own language, that can be retrieved by specifying the Accept-Language header.
*/
class FileRequestBuilderGetQueryParameters 
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
     * Instantiates a new fileRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
