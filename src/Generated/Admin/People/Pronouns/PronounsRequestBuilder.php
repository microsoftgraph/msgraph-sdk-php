<?php

namespace Microsoft\Graph\Generated\Admin\People\Pronouns;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PronounsSettings;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the pronouns property of the microsoft.graph.peopleAdminSettings entity.
*/
class PronounsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new PronounsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/people/pronouns{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the properties of the pronounsSettings resource for an organization.  For more information on settings to manage pronouns support, see Manage pronouns settings for an organization using the Microsoft Graph API.
     * @param PronounsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PronounsSettings|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/peopleadminsettings-list-pronouns?view=graph-rest-1.0 Find more info here
    */
    public function get(?PronounsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PronounsSettings::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a pronounsSettings object in an organization. For more information on settings to manage pronouns support, see Manage pronouns settings for an organization using the Microsoft Graph API.
     * @param PronounsSettings $body The request body
     * @param PronounsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PronounsSettings|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/pronounssettings-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(PronounsSettings $body, ?PronounsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PronounsSettings::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the properties of the pronounsSettings resource for an organization.  For more information on settings to manage pronouns support, see Manage pronouns settings for an organization using the Microsoft Graph API.
     * @param PronounsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PronounsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a pronounsSettings object in an organization. For more information on settings to manage pronouns support, see Manage pronouns settings for an organization using the Microsoft Graph API.
     * @param PronounsSettings $body The request body
     * @param PronounsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PronounsSettings $body, ?PronounsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return PronounsRequestBuilder
    */
    public function withUrl(string $rawUrl): PronounsRequestBuilder {
        return new PronounsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
