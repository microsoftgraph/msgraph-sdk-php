<?php

namespace Microsoft\Graph\Generated\Organization\Item\Branding\Localizations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OrganizationalBrandingLocalization;
use Microsoft\Graph\Generated\Models\OrganizationalBrandingLocalizationCollectionResponse;
use Microsoft\Graph\Generated\Organization\Item\Branding\Localizations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Organization\Item\Branding\Localizations\Item\OrganizationalBrandingLocalizationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the localizations property of the microsoft.graph.organizationalBranding entity.
*/
class LocalizationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the localizations property of the microsoft.graph.organizationalBranding entity.
     * @param string $organizationalBrandingLocalizationId The unique identifier of organizationalBrandingLocalization
     * @return OrganizationalBrandingLocalizationItemRequestBuilder
    */
    public function byOrganizationalBrandingLocalizationId(string $organizationalBrandingLocalizationId): OrganizationalBrandingLocalizationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['organizationalBrandingLocalization%2Did'] = $organizationalBrandingLocalizationId;
        return new OrganizationalBrandingLocalizationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LocalizationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organization/{organization%2Did}/branding/localizations{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve all localization branding objects, including the default branding. This API is available in the following national cloud deployments.
     * @param LocalizationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationalBrandingLocalizationCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/organizationalbranding-list-localizations?view=graph-rest-1.0 Find more info here
    */
    public function get(?LocalizationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationalBrandingLocalizationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new organizationalBrandingLocalization object. This creates a localized branding and at the same time, the default branding if it doesn't exist. The default branding is created only once. It's loaded when a localized branding isn't configured for the user's browser language. To retrieve the default branding, see Get branding. This API is available in the following national cloud deployments.
     * @param OrganizationalBrandingLocalization $body The request body
     * @param LocalizationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationalBrandingLocalization|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/organizationalbranding-post-localizations?view=graph-rest-1.0 Find more info here
    */
    public function post(OrganizationalBrandingLocalization $body, ?LocalizationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationalBrandingLocalization::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve all localization branding objects, including the default branding. This API is available in the following national cloud deployments.
     * @param LocalizationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LocalizationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new organizationalBrandingLocalization object. This creates a localized branding and at the same time, the default branding if it doesn't exist. The default branding is created only once. It's loaded when a localized branding isn't configured for the user's browser language. To retrieve the default branding, see Get branding. This API is available in the following national cloud deployments.
     * @param OrganizationalBrandingLocalization $body The request body
     * @param LocalizationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OrganizationalBrandingLocalization $body, ?LocalizationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LocalizationsRequestBuilder
    */
    public function withUrl(string $rawUrl): LocalizationsRequestBuilder {
        return new LocalizationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
