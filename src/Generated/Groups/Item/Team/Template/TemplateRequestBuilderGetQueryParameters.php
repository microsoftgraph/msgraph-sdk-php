<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Template;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The template this team was created from. See available templates.
*/
class TemplateRequestBuilderGetQueryParameters 
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
