<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\GranularDriveRestoreArtifacts\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\GranularDriveRestoreArtifact;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the granularDriveRestoreArtifacts property of the microsoft.graph.oneDriveForBusinessRestoreSession entity.
*/
class GranularDriveRestoreArtifactItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GranularDriveRestoreArtifactItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/oneDriveForBusinessRestoreSessions/{oneDriveForBusinessRestoreSession%2Did}/granularDriveRestoreArtifacts/{granularDriveRestoreArtifact%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property granularDriveRestoreArtifacts for solutions
     * @param GranularDriveRestoreArtifactItemRequestBuilderDeleteReq_42dee1b2|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?GranularDriveRestoreArtifactItemRequestBuilderDeleteReq_42dee1b2 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A collection of browse session ID and item key details that can be used to restore OneDrive for work or school files and folders.
     * @param GranularDriveRestoreArtifactItemRequestBuilderGetReques_8012add7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GranularDriveRestoreArtifact|null>
     * @throws Exception
    */
    public function get(?GranularDriveRestoreArtifactItemRequestBuilderGetReques_8012add7 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GranularDriveRestoreArtifact::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property granularDriveRestoreArtifacts in solutions
     * @param GranularDriveRestoreArtifact $body The request body
     * @param GranularDriveRestoreArtifactItemRequestBuilderPatchRequ_1c9c4589|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GranularDriveRestoreArtifact|null>
     * @throws Exception
    */
    public function patch(GranularDriveRestoreArtifact $body, ?GranularDriveRestoreArtifactItemRequestBuilderPatchRequ_1c9c4589 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GranularDriveRestoreArtifact::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property granularDriveRestoreArtifacts for solutions
     * @param GranularDriveRestoreArtifactItemRequestBuilderDeleteReq_42dee1b2|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?GranularDriveRestoreArtifactItemRequestBuilderDeleteReq_42dee1b2 $requestConfiguration = null): RequestInformation {
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
     * A collection of browse session ID and item key details that can be used to restore OneDrive for work or school files and folders.
     * @param GranularDriveRestoreArtifactItemRequestBuilderGetReques_8012add7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GranularDriveRestoreArtifactItemRequestBuilderGetReques_8012add7 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/solutions/backupRestore/oneDriveForBusinessRestoreSessions/{oneDriveForBusinessRestoreSession%2Did}/granularDriveRestoreArtifacts/{granularDriveRestoreArtifact%2Did}{?%24expand,%24select}';
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
     * Update the navigation property granularDriveRestoreArtifacts in solutions
     * @param GranularDriveRestoreArtifact $body The request body
     * @param GranularDriveRestoreArtifactItemRequestBuilderPatchRequ_1c9c4589|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(GranularDriveRestoreArtifact $body, ?GranularDriveRestoreArtifactItemRequestBuilderPatchRequ_1c9c4589 $requestConfiguration = null): RequestInformation {
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
     * @return GranularDriveRestoreArtifactItemRequestBuilder
    */
    public function withUrl(string $rawUrl): GranularDriveRestoreArtifactItemRequestBuilder {
        return new GranularDriveRestoreArtifactItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
