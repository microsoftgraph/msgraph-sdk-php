<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AccessReviewInstanceItemRequestBuilderGetRequestConfiguration 
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
     * @var AccessReviewInstanceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AccessReviewInstanceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
