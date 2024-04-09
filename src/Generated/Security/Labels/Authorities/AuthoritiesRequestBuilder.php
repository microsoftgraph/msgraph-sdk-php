<?php

namespace Microsoft\Graph\Generated\Security\Labels\Authorities;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\AuthorityTemplate;
use Microsoft\Graph\Generated\Models\Security\AuthorityTemplateCollectionResponse;
use Microsoft\Graph\Generated\Security\Labels\Authorities\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\Labels\Authorities\Item\AuthorityTemplateItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authorities property of the microsoft.graph.security.labelsRoot entity.
*/
class AuthoritiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authorities property of the microsoft.graph.security.labelsRoot entity.
     * @param string $authorityTemplateId The unique identifier of authorityTemplate
     * @return AuthorityTemplateItemRequestBuilder
    */
    public function byAuthorityTemplateId(string $authorityTemplateId): AuthorityTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authorityTemplate%2Did'] = $authorityTemplateId;
        return new AuthorityTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AuthoritiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/labels/authorities{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the authorityTemplate objects and their properties.
     * @param AuthoritiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthorityTemplateCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-labelsroot-list-authorities?view=graph-rest-1.0 Find more info here
    */
    public function get(?AuthoritiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthorityTemplateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new authorityTemplate object.
     * @param AuthorityTemplate $body The request body
     * @param AuthoritiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthorityTemplate|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-labelsroot-post-authorities?view=graph-rest-1.0 Find more info here
    */
    public function post(AuthorityTemplate $body, ?AuthoritiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthorityTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the authorityTemplate objects and their properties.
     * @param AuthoritiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthoritiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new authorityTemplate object.
     * @param AuthorityTemplate $body The request body
     * @param AuthoritiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AuthorityTemplate $body, ?AuthoritiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AuthoritiesRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthoritiesRequestBuilder {
        return new AuthoritiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
