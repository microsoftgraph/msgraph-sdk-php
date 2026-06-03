<?php

namespace Microsoft\Graph\Generated\AuthenticationMethodConfigurations;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: authenticationMethodConfigurationsRequestBuilderGetRequestConfiguration
*/
class AuthenticationMethodConfigurationsRequestBuilderGetRequ_d01e9a86 extends BaseRequestConfiguration 
{
    /**
     * @var AuthenticationMethodConfigurationsRequestBuilderGetQuer_ec2e46bf|null $queryParameters Request query parameters
    */
    public ?AuthenticationMethodConfigurationsRequestBuilderGetQuer_ec2e46bf $queryParameters = null;
    
    /**
     * Instantiates a new AuthenticationMethodConfigurationsRequestBuilderGetRequ_d01e9a86 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationMethodConfigurationsRequestBuilderGetQuer_ec2e46bf|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationMethodConfigurationsRequestBuilderGetQuer_ec2e46bf $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuthenticationMethodConfigurationsRequestBuilderGetQuer_ec2e46bf.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return AuthenticationMethodConfigurationsRequestBuilderGetQuer_ec2e46bf
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): AuthenticationMethodConfigurationsRequestBuilderGetQuer_ec2e46bf {
        return new AuthenticationMethodConfigurationsRequestBuilderGetQuer_ec2e46bf($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
