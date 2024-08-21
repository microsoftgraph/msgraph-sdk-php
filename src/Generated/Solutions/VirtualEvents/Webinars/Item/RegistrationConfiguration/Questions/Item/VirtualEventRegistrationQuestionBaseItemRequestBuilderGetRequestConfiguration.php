<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\RegistrationConfiguration\Questions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VirtualEventRegistrationQuestionBaseItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VirtualEventRegistrationQuestionBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VirtualEventRegistrationQuestionBaseItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VirtualEventRegistrationQuestionBaseItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VirtualEventRegistrationQuestionBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VirtualEventRegistrationQuestionBaseItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VirtualEventRegistrationQuestionBaseItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VirtualEventRegistrationQuestionBaseItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): VirtualEventRegistrationQuestionBaseItemRequestBuilderGetQueryParameters {
        return new VirtualEventRegistrationQuestionBaseItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
