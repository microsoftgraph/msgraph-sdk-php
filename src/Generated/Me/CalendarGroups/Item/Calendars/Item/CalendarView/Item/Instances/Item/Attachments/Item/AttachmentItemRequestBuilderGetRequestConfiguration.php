<?php

namespace Microsoft\Graph\Generated\Me\CalendarGroups\Item\Calendars\Item\CalendarView\Item\Instances\Item\Attachments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AttachmentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AttachmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AttachmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AttachmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AttachmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AttachmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AttachmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AttachmentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AttachmentItemRequestBuilderGetQueryParameters {
        return new AttachmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
