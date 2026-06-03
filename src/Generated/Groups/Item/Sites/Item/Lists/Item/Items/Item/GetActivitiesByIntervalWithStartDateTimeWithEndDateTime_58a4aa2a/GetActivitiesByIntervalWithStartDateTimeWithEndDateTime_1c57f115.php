<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Lists\Item\Items\Item\GetActivitiesByIntervalWithStartDateTimeWithEndDateTime_58a4aa2a;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilderGetRequestConfiguration
*/
class GetActivitiesByIntervalWithStartDateTimeWithEndDateTime_1c57f115 extends BaseRequestConfiguration 
{
    /**
     * @var GetActivitiesByIntervalWithStartDateTimeWithEndDateTime_995d2f03|null $queryParameters Request query parameters
    */
    public ?GetActivitiesByIntervalWithStartDateTimeWithEndDateTime_995d2f03 $queryParameters = null;
    
    /**
     * Instantiates a new GetActivitiesByIntervalWithStartDateTimeWithEndDateTime_1c57f115 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActivitiesByIntervalWithStartDateTimeWithEndDateTime_995d2f03|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActivitiesByIntervalWithStartDateTimeWithEndDateTime_995d2f03 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActivitiesByIntervalWithStartDateTimeWithEndDateTime_995d2f03.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActivitiesByIntervalWithStartDateTimeWithEndDateTime_995d2f03
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): GetActivitiesByIntervalWithStartDateTimeWithEndDateTime_995d2f03 {
        return new GetActivitiesByIntervalWithStartDateTimeWithEndDateTime_995d2f03($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
