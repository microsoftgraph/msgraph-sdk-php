<?php

namespace Microsoft\Graph\Generated\Me\Outlook\SupportedLanguages;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SupportedLanguagesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SupportedLanguagesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SupportedLanguagesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new supportedLanguagesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SupportedLanguagesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SupportedLanguagesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new supportedLanguagesRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return SupportedLanguagesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): SupportedLanguagesRequestBuilderGetQueryParameters {
        return new SupportedLanguagesRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
