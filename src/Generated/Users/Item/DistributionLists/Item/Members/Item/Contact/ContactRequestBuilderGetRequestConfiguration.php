<?php

namespace Microsoft\Graph\Generated\Users\Item\DistributionLists\Item\Members\Item\Contact;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContactRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ContactRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContactRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ContactRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ContactRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ContactRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ContactRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ContactRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ContactRequestBuilderGetQueryParameters {
        return new ContactRequestBuilderGetQueryParameters($expand, $select);
    }

}
