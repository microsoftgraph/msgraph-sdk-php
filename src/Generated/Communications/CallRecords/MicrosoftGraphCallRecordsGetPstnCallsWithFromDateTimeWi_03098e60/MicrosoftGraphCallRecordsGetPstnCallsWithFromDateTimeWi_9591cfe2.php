<?php

namespace Microsoft\Graph\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_03098e60;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_9591cfe2 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_9cc0535e|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_9cc0535e $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_9591cfe2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_9cc0535e|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_9cc0535e $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_9cc0535e.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_9cc0535e
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_9cc0535e {
        return new MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_9cc0535e($count, $filter, $search, $skip, $top);
    }

}
