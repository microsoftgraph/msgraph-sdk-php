<?php

namespace Microsoft\Graph\Generated\Users\Item\Onenote\Notebooks\Item\SectionGroups\Item\Sections\Item\Pages\Item\ParentSection;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ParentSectionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ParentSectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ParentSectionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ParentSectionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ParentSectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ParentSectionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ParentSectionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ParentSectionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ParentSectionRequestBuilderGetQueryParameters {
        return new ParentSectionRequestBuilderGetQueryParameters($expand, $select);
    }

}
