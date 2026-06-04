<?php

namespace Microsoft\Graph\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_0d33e661;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphCallRecordsGetDirectRoutingCallsWithFromDateTimeWithToDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_bb7574a0 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_b3915de7|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_b3915de7 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_bb7574a0 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_b3915de7|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_b3915de7 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_b3915de7.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_b3915de7
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_b3915de7 {
        return new MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_b3915de7($count, $filter, $search, $skip, $top);
    }

}
