<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendars\Item\CalendarView\Item\Attachments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
*/
class AttachmentItemRequestBuilderGetQueryParameters 
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
