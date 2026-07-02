<?php

namespace Microsoft\Graph\Generated\Groups\Item\Calendar\AllowedCalendarSharingRolesWithUser;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: allowedCalendarSharingRolesWithUserRequestBuilderGetRequestConfiguration
*/
class AllowedCalendarSharingRolesWithUserRequestBuilderGetReq_ad88b888 extends BaseRequestConfiguration 
{
    /**
     * @var AllowedCalendarSharingRolesWithUserRequestBuilderGetQue_afd1a163|null $queryParameters Request query parameters
    */
    public ?AllowedCalendarSharingRolesWithUserRequestBuilderGetQue_afd1a163 $queryParameters = null;
    
    /**
     * Instantiates a new AllowedCalendarSharingRolesWithUserRequestBuilderGetReq_ad88b888 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AllowedCalendarSharingRolesWithUserRequestBuilderGetQue_afd1a163|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AllowedCalendarSharingRolesWithUserRequestBuilderGetQue_afd1a163 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AllowedCalendarSharingRolesWithUserRequestBuilderGetQue_afd1a163.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return AllowedCalendarSharingRolesWithUserRequestBuilderGetQue_afd1a163
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): AllowedCalendarSharingRolesWithUserRequestBuilderGetQue_afd1a163 {
        return new AllowedCalendarSharingRolesWithUserRequestBuilderGetQue_afd1a163($count, $filter, $search, $skip, $top);
    }

}
