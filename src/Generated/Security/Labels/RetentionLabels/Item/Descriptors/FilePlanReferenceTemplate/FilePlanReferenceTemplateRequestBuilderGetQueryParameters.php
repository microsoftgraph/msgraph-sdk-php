<?php

namespace Microsoft\\Graph\\Generated\Security\Labels\RetentionLabels\Item\Descriptors\FilePlanReferenceTemplate;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Specifies a unique alpha-numeric identifier for an organization’s retention schedule.
*/
class FilePlanReferenceTemplateRequestBuilderGetQueryParameters 
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
     * Instantiates a new FilePlanReferenceTemplateRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
