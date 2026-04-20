<?php

namespace Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\NumberAssignments;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\NumberAssignments\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\NumberAssignments\Item\NumberAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\NumberAssignments\MicrosoftGraphTeamsAdministrationAssignNumber\MicrosoftGraphTeamsAdministrationAssignNumberRequestBuilder;
use Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\NumberAssignments\MicrosoftGraphTeamsAdministrationUnassignNumber\MicrosoftGraphTeamsAdministrationUnassignNumberRequestBuilder;
use Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\NumberAssignments\MicrosoftGraphTeamsAdministrationUpdateNumber\MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TeamsAdministration\NumberAssignment;
use Microsoft\Graph\Generated\Models\TeamsAdministration\NumberAssignmentCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the numberAssignments property of the microsoft.graph.teamsAdministration.telephoneNumberManagementRoot entity.
*/
class NumberAssignmentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assignNumber method.
    */
    public function microsoftGraphTeamsAdministrationAssignNumber(): MicrosoftGraphTeamsAdministrationAssignNumberRequestBuilder {
        return new MicrosoftGraphTeamsAdministrationAssignNumberRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unassignNumber method.
    */
    public function microsoftGraphTeamsAdministrationUnassignNumber(): MicrosoftGraphTeamsAdministrationUnassignNumberRequestBuilder {
        return new MicrosoftGraphTeamsAdministrationUnassignNumberRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateNumber method.
    */
    public function microsoftGraphTeamsAdministrationUpdateNumber(): MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilder {
        return new MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the numberAssignments property of the microsoft.graph.teamsAdministration.telephoneNumberManagementRoot entity.
     * @param string $numberAssignmentId The unique identifier of numberAssignment
     * @return NumberAssignmentItemRequestBuilder
    */
    public function byNumberAssignmentId(string $numberAssignmentId): NumberAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['numberAssignment%2Did'] = $numberAssignmentId;
        return new NumberAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new NumberAssignmentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/teams/telephoneNumberManagement/numberAssignments{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read the properties and relationships of microsoft.graph.teamsAdministration.numberAssignment object.
     * @param NumberAssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NumberAssignmentCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamsadministration-telephonenumbermanagementroot-list-numberassignments?view=graph-rest-1.0 Find more info here
    */
    public function get(?NumberAssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NumberAssignmentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to numberAssignments for admin
     * @param NumberAssignment $body The request body
     * @param NumberAssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NumberAssignment|null>
     * @throws Exception
    */
    public function post(NumberAssignment $body, ?NumberAssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NumberAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Read the properties and relationships of microsoft.graph.teamsAdministration.numberAssignment object.
     * @param NumberAssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?NumberAssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to numberAssignments for admin
     * @param NumberAssignment $body The request body
     * @param NumberAssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(NumberAssignment $body, ?NumberAssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return NumberAssignmentsRequestBuilder
    */
    public function withUrl(string $rawUrl): NumberAssignmentsRequestBuilder {
        return new NumberAssignmentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
