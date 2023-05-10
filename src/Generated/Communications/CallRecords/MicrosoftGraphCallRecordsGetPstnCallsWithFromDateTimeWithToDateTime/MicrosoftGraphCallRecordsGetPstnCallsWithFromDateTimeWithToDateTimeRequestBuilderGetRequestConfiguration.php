<?php

namespace Microsoft\Graph\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTime;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new microsoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new microsoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetQueryParameters {
        return new MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
