<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\TermsOfUse\Agreements\Item\Files\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgreementFileLocalizationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AgreementFileLocalizationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgreementFileLocalizationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AgreementFileLocalizationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AgreementFileLocalizationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgreementFileLocalizationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AgreementFileLocalizationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AgreementFileLocalizationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AgreementFileLocalizationItemRequestBuilderGetQueryParameters {
        return new AgreementFileLocalizationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
