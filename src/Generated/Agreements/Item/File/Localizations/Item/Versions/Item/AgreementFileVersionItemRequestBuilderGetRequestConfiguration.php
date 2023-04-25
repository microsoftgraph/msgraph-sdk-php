<?php

namespace Microsoft\Graph\Generated\Agreements\Item\File\Localizations\Item\Versions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgreementFileVersionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AgreementFileVersionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgreementFileVersionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AgreementFileVersionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AgreementFileVersionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgreementFileVersionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AgreementFileVersionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AgreementFileVersionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AgreementFileVersionItemRequestBuilderGetQueryParameters {
        return new AgreementFileVersionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
