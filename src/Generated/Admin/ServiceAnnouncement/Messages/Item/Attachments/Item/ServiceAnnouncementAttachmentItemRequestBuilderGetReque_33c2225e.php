<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\Item\Attachments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ServiceAnnouncementAttachmentItemRequestBuilderGetRequestConfiguration
*/
class ServiceAnnouncementAttachmentItemRequestBuilderGetReque_33c2225e extends BaseRequestConfiguration 
{
    /**
     * @var ServiceAnnouncementAttachmentItemRequestBuilderGetQuery_8135e6d5|null $queryParameters Request query parameters
    */
    public ?ServiceAnnouncementAttachmentItemRequestBuilderGetQuery_8135e6d5 $queryParameters = null;
    
    /**
     * Instantiates a new ServiceAnnouncementAttachmentItemRequestBuilderGetReque_33c2225e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ServiceAnnouncementAttachmentItemRequestBuilderGetQuery_8135e6d5|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServiceAnnouncementAttachmentItemRequestBuilderGetQuery_8135e6d5 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ServiceAnnouncementAttachmentItemRequestBuilderGetQuery_8135e6d5.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServiceAnnouncementAttachmentItemRequestBuilderGetQuery_8135e6d5
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ServiceAnnouncementAttachmentItemRequestBuilderGetQuery_8135e6d5 {
        return new ServiceAnnouncementAttachmentItemRequestBuilderGetQuery_8135e6d5($expand, $select);
    }

}
