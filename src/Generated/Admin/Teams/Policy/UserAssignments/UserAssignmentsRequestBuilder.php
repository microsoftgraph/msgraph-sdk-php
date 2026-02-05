<?php

namespace Microsoft\Graph\Generated\Admin\Teams\Policy\UserAssignments;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\Teams\Policy\UserAssignments\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\Teams\Policy\UserAssignments\Item\TeamsPolicyUserAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\Admin\Teams\Policy\UserAssignments\MicrosoftGraphTeamsAdministrationAssign\MicrosoftGraphTeamsAdministrationAssignRequestBuilder;
use Microsoft\Graph\Generated\Admin\Teams\Policy\UserAssignments\MicrosoftGraphTeamsAdministrationUnassign\MicrosoftGraphTeamsAdministrationUnassignRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TeamsAdministration\TeamsPolicyUserAssignment;
use Microsoft\Graph\Generated\Models\TeamsAdministration\TeamsPolicyUserAssignmentCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userAssignments property of the microsoft.graph.teamsAdministration.teamsPolicyAssignment entity.
*/
class UserAssignmentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assign method.
    */
    public function microsoftGraphTeamsAdministrationAssign(): MicrosoftGraphTeamsAdministrationAssignRequestBuilder {
        return new MicrosoftGraphTeamsAdministrationAssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unassign method.
    */
    public function microsoftGraphTeamsAdministrationUnassign(): MicrosoftGraphTeamsAdministrationUnassignRequestBuilder {
        return new MicrosoftGraphTeamsAdministrationUnassignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userAssignments property of the microsoft.graph.teamsAdministration.teamsPolicyAssignment entity.
     * @param string $teamsPolicyUserAssignmentId The unique identifier of teamsPolicyUserAssignment
     * @return TeamsPolicyUserAssignmentItemRequestBuilder
    */
    public function byTeamsPolicyUserAssignmentId(string $teamsPolicyUserAssignmentId): TeamsPolicyUserAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsPolicyUserAssignment%2Did'] = $teamsPolicyUserAssignmentId;
        return new TeamsPolicyUserAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserAssignmentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/teams/policy/userAssignments{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The collection of user policy assignments.
     * @param UserAssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamsPolicyUserAssignmentCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UserAssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamsPolicyUserAssignmentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userAssignments for admin
     * @param TeamsPolicyUserAssignment $body The request body
     * @param UserAssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamsPolicyUserAssignment|null>
     * @throws Exception
    */
    public function post(TeamsPolicyUserAssignment $body, ?UserAssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamsPolicyUserAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The collection of user policy assignments.
     * @param UserAssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserAssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Create new navigation property to userAssignments for admin
     * @param TeamsPolicyUserAssignment $body The request body
     * @param UserAssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TeamsPolicyUserAssignment $body, ?UserAssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return UserAssignmentsRequestBuilder
    */
    public function withUrl(string $rawUrl): UserAssignmentsRequestBuilder {
        return new UserAssignmentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
