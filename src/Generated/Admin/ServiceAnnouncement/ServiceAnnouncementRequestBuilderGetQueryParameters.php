<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A container for service communications resources. Read-only.
*/
class ServiceAnnouncementRequestBuilderGetQueryParameters 
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
