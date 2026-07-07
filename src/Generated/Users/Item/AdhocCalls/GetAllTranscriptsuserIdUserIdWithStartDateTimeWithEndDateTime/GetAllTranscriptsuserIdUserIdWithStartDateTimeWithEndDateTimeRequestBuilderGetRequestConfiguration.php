<?php

namespace Microsoft\Graph\Generated\Users\Item\AdhocCalls\GetAllTranscriptsuserIdUserIdWithStartDateTimeWithEndDateTime;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetAllTranscriptsuserIdUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetAllTranscriptsuserIdUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetAllTranscriptsuserIdUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetAllTranscriptsuserIdUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetAllTranscriptsuserIdUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetAllTranscriptsuserIdUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetAllTranscriptsuserIdUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param DateTime|null $endDateTime Usage: endDateTime=@endDateTime
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param DateTime|null $startDateTime Usage: startDateTime=@startDateTime
     * @param int|null $top Show only the first n items
     * @param string|null $userId Usage: userId='@userId'
     * @return GetAllTranscriptsuserIdUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?DateTime $endDateTime = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?DateTime $startDateTime = null, ?int $top = null, ?string $userId = null): GetAllTranscriptsuserIdUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetQueryParameters {
        return new GetAllTranscriptsuserIdUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetQueryParameters($count, $endDateTime, $expand, $filter, $orderby, $search, $select, $skip, $startDateTime, $top, $userId);
    }

}
