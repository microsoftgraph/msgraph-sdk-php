<?php

namespace Microsoft\Graph\Generated\Admin\Exchange\Tracing\MessageTraces\Item\GetDetailsByRecipientWithRecipientAddress;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getDetailsByRecipientWithRecipientAddressRequestBuilderGetRequestConfiguration
*/
class GetDetailsByRecipientWithRecipientAddressRequestBuilder_00612b39 extends BaseRequestConfiguration 
{
    /**
     * @var GetDetailsByRecipientWithRecipientAddressRequestBuilder_a8809f30|null $queryParameters Request query parameters
    */
    public ?GetDetailsByRecipientWithRecipientAddressRequestBuilder_a8809f30 $queryParameters = null;
    
    /**
     * Instantiates a new GetDetailsByRecipientWithRecipientAddressRequestBuilder_00612b39 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetDetailsByRecipientWithRecipientAddressRequestBuilder_a8809f30|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetDetailsByRecipientWithRecipientAddressRequestBuilder_a8809f30 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetDetailsByRecipientWithRecipientAddressRequestBuilder_a8809f30.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetDetailsByRecipientWithRecipientAddressRequestBuilder_a8809f30
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): GetDetailsByRecipientWithRecipientAddressRequestBuilder_a8809f30 {
        return new GetDetailsByRecipientWithRecipientAddressRequestBuilder_a8809f30($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
