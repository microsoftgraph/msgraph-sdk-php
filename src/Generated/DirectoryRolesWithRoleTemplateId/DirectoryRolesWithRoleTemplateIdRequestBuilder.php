<?php

namespace Microsoft\Graph\Generated\DirectoryRolesWithRoleTemplateId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DirectoryRole;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of directoryRole entities.
*/
class DirectoryRolesWithRoleTemplateIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DirectoryRolesWithRoleTemplateIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $roleTemplateId Alternate key of directoryRole
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $roleTemplateId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directoryRoles(roleTemplateId=\'{roleTemplateId}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['roleTemplateId'] = $roleTemplateId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete entity from directoryRoles by roleTemplateId
     * @param DirectoryRolesWithRoleTemplateIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DirectoryRolesWithRoleTemplateIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve the properties of a directoryRole object. The role must be activated in tenant for a successful response. You can use both the object ID and template ID of the directoryRole with this API. The template ID of a built-in role is immutable and can be seen in the role description on the Microsoft Entra admin center. For details, see Role template IDs.
     * @param DirectoryRolesWithRoleTemplateIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DirectoryRole|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directoryrole-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DirectoryRolesWithRoleTemplateIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DirectoryRole::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update entity in directoryRoles by roleTemplateId
     * @param DirectoryRole $body The request body
     * @param DirectoryRolesWithRoleTemplateIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DirectoryRole|null>
     * @throws Exception
    */
    public function patch(DirectoryRole $body, ?DirectoryRolesWithRoleTemplateIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DirectoryRole::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete entity from directoryRoles by roleTemplateId
     * @param DirectoryRolesWithRoleTemplateIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DirectoryRolesWithRoleTemplateIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Retrieve the properties of a directoryRole object. The role must be activated in tenant for a successful response. You can use both the object ID and template ID of the directoryRole with this API. The template ID of a built-in role is immutable and can be seen in the role description on the Microsoft Entra admin center. For details, see Role template IDs.
     * @param DirectoryRolesWithRoleTemplateIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DirectoryRolesWithRoleTemplateIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update entity in directoryRoles by roleTemplateId
     * @param DirectoryRole $body The request body
     * @param DirectoryRolesWithRoleTemplateIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DirectoryRole $body, ?DirectoryRolesWithRoleTemplateIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DirectoryRolesWithRoleTemplateIdRequestBuilder
    */
    public function withUrl(string $rawUrl): DirectoryRolesWithRoleTemplateIdRequestBuilder {
        return new DirectoryRolesWithRoleTemplateIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
