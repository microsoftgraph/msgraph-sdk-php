<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\RegistrationConfiguration\Questions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: VirtualEventRegistrationQuestionBaseItemRequestBuilderGetRequestConfiguration
*/
class VirtualEventRegistrationQuestionBaseItemRequestBuilderG_3a17e904 extends BaseRequestConfiguration 
{
    /**
     * @var VirtualEventRegistrationQuestionBaseItemRequestBuilderG_4507b01c|null $queryParameters Request query parameters
    */
    public ?VirtualEventRegistrationQuestionBaseItemRequestBuilderG_4507b01c $queryParameters = null;
    
    /**
     * Instantiates a new VirtualEventRegistrationQuestionBaseItemRequestBuilderG_3a17e904 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VirtualEventRegistrationQuestionBaseItemRequestBuilderG_4507b01c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VirtualEventRegistrationQuestionBaseItemRequestBuilderG_4507b01c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VirtualEventRegistrationQuestionBaseItemRequestBuilderG_4507b01c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VirtualEventRegistrationQuestionBaseItemRequestBuilderG_4507b01c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): VirtualEventRegistrationQuestionBaseItemRequestBuilderG_4507b01c {
        return new VirtualEventRegistrationQuestionBaseItemRequestBuilderG_4507b01c($expand, $select);
    }

}
