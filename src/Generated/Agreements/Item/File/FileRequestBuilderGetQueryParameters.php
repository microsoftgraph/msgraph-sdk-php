<?php

namespace Microsoft\Graph\Generated\Agreements\Item\File;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the details of the default file for an agreement, including the language and version information. The file information is specified through the agreementFile object.
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
    
}
