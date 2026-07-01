<?php

namespace Microsoft\Graph\Generated\Users\Item\ReminderViewWithStartDateTimeWithEndDateTime;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: reminderViewWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class ReminderViewWithStartDateTimeWithEndDateTimeRequestBuil_553c1b5c extends BaseRequestConfiguration 
{
    /**
     * @var ReminderViewWithStartDateTimeWithEndDateTimeRequestBuil_b92012fa|null $queryParameters Request query parameters
    */
    public ?ReminderViewWithStartDateTimeWithEndDateTimeRequestBuil_b92012fa $queryParameters = null;
    
    /**
     * Instantiates a new ReminderViewWithStartDateTimeWithEndDateTimeRequestBuil_553c1b5c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReminderViewWithStartDateTimeWithEndDateTimeRequestBuil_b92012fa|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReminderViewWithStartDateTimeWithEndDateTimeRequestBuil_b92012fa $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReminderViewWithStartDateTimeWithEndDateTimeRequestBuil_b92012fa.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return ReminderViewWithStartDateTimeWithEndDateTimeRequestBuil_b92012fa
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): ReminderViewWithStartDateTimeWithEndDateTimeRequestBuil_b92012fa {
        return new ReminderViewWithStartDateTimeWithEndDateTimeRequestBuil_b92012fa($count, $filter, $search, $skip, $top);
    }

}
