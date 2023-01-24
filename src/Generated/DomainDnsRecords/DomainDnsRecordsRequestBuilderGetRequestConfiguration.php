<?php

namespace Microsoft\Graph\Generated\DomainDnsRecords;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DomainDnsRecordsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var DomainDnsRecordsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DomainDnsRecordsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
