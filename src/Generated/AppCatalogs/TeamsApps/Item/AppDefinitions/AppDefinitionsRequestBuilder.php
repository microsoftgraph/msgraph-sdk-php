<?php

namespace Microsoft\Graph\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions\Item\TeamsAppDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TeamsAppDefinition;
use Microsoft\Graph\Generated\Models\TeamsAppDefinitionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the appDefinitions property of the microsoft.graph.teamsApp entity.
*/
class AppDefinitionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appDefinitions property of the microsoft.graph.teamsApp entity.
     * @param string $teamsAppDefinitionId The unique identifier of teamsAppDefinition
     * @return TeamsAppDefinitionItemRequestBuilder
    */
    public function byTeamsAppDefinitionId(string $teamsAppDefinitionId): TeamsAppDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAppDefinition%2Did'] = $teamsAppDefinitionId;
        return new TeamsAppDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AppDefinitionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/appCatalogs/teamsApps/{teamsApp%2Did}/appDefinitions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The details for each version of the app.
     * @param AppDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamsAppDefinitionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AppDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamsAppDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update an app previously published to the Microsoft Teams app catalog. To update an app, the distributionMethod property for the app must be set to organization. This API specifically updates an app published to your organization's app catalog (the tenant app catalog).
     * @param TeamsAppDefinition $body The request body
     * @param AppDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamsAppDefinition|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamsapp-update?view=graph-rest-1.0 Find more info here
    */
    public function post(TeamsAppDefinition $body, ?AppDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamsAppDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The details for each version of the app.
     * @param AppDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AppDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update an app previously published to the Microsoft Teams app catalog. To update an app, the distributionMethod property for the app must be set to organization. This API specifically updates an app published to your organization's app catalog (the tenant app catalog).
     * @param TeamsAppDefinition $body The request body
     * @param AppDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TeamsAppDefinition $body, ?AppDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AppDefinitionsRequestBuilder
    */
    public function withUrl(string $rawUrl): AppDefinitionsRequestBuilder {
        return new AppDefinitionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
