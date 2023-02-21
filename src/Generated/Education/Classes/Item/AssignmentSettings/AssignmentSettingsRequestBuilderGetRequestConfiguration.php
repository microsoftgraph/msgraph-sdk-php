<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\AssignmentSettings;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AssignmentSettingsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AssignmentSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AssignmentSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new assignmentSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AssignmentSettingsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AssignmentSettingsRequestBuilderGetQueryParameters {
        return new AssignmentSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new assignmentSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AssignmentSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignmentSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
