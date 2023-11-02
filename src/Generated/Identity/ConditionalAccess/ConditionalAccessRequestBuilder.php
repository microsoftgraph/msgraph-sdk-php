<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationContextClassReferences\AuthenticationContextClassReferencesRequestBuilder;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationStrength\AuthenticationStrengthRequestBuilder;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\NamedLocations\NamedLocationsRequestBuilder;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\Policies\PoliciesRequestBuilder;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\Templates\TemplatesRequestBuilder;
use Microsoft\Graph\Generated\Models\ConditionalAccessRoot;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the conditionalAccess property of the microsoft.graph.identityContainer entity.
*/
class ConditionalAccessRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the authenticationContextClassReferences property of the microsoft.graph.conditionalAccessRoot entity.
    */
    public function authenticationContextClassReferences(): AuthenticationContextClassReferencesRequestBuilder {
        return new AuthenticationContextClassReferencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationStrength property of the microsoft.graph.conditionalAccessRoot entity.
    */
    public function authenticationStrength(): AuthenticationStrengthRequestBuilder {
        return new AuthenticationStrengthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the namedLocations property of the microsoft.graph.conditionalAccessRoot entity.
    */
    public function namedLocations(): NamedLocationsRequestBuilder {
        return new NamedLocationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the policies property of the microsoft.graph.conditionalAccessRoot entity.
    */
    public function policies(): PoliciesRequestBuilder {
        return new PoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the templates property of the microsoft.graph.conditionalAccessRoot entity.
    */
    public function templates(): TemplatesRequestBuilder {
        return new TemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ConditionalAccessRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/conditionalAccess{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property conditionalAccess for identity
     * @param ConditionalAccessRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ConditionalAccessRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * the entry point for the Conditional Access (CA) object model.
     * @param ConditionalAccessRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConditionalAccessRoot|null>
     * @throws Exception
    */
    public function get(?ConditionalAccessRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConditionalAccessRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property conditionalAccess in identity
     * @param ConditionalAccessRoot $body The request body
     * @param ConditionalAccessRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConditionalAccessRoot|null>
     * @throws Exception
    */
    public function patch(ConditionalAccessRoot $body, ?ConditionalAccessRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConditionalAccessRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property conditionalAccess for identity
     * @param ConditionalAccessRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ConditionalAccessRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, application/json");
        return $requestInfo;
    }

    /**
     * the entry point for the Conditional Access (CA) object model.
     * @param ConditionalAccessRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConditionalAccessRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Update the navigation property conditionalAccess in identity
     * @param ConditionalAccessRoot $body The request body
     * @param ConditionalAccessRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ConditionalAccessRoot $body, ?ConditionalAccessRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ConditionalAccessRequestBuilder
    */
    public function withUrl(string $rawUrl): ConditionalAccessRequestBuilder {
        return new ConditionalAccessRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
