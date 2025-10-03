<?php

namespace Microsoft\\Graph\\Generated\Teamwork\DeletedTeams\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeletedTeamItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeletedTeamItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeletedTeamItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeletedTeamItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeletedTeamItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeletedTeamItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeletedTeamItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeletedTeamItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeletedTeamItemRequestBuilderGetQueryParameters {
        return new DeletedTeamItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
