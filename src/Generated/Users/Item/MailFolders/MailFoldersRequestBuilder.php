<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\MailFolder;
use Microsoft\Graph\Generated\Models\MailFolderCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\MailFolderItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mailFolders property of the microsoft.graph.user entity.
*/
class MailFoldersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delta method.
    */
    public function delta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailFolders property of the microsoft.graph.user entity.
     * @param string $mailFolderId The unique identifier of mailFolder
     * @return MailFolderItemRequestBuilder
    */
    public function byMailFolderId(string $mailFolderId): MailFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailFolder%2Did'] = $mailFolderId;
        return new MailFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MailFoldersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/mailFolders{?%24count,%24expand,%24filter,%24orderby,%24select,%24skip,%24top,includeHiddenFolders*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The user's mail folders. Read-only. Nullable.
     * @param MailFoldersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailFolderCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/user-list-mailfolders?view=graph-rest-1.0 Find more info here
    */
    public function get(?MailFoldersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailFolderCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Use this API to create a new mail folder in the root folder of the user's mailbox. If you intend a new folder to be hidden, you must set the isHidden property to true on creation.
     * @param MailFolder $body The request body
     * @param MailFoldersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailFolder|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/user-post-mailfolders?view=graph-rest-1.0 Find more info here
    */
    public function post(MailFolder $body, ?MailFoldersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailFolder::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The user's mail folders. Read-only. Nullable.
     * @param MailFoldersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MailFoldersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Use this API to create a new mail folder in the root folder of the user's mailbox. If you intend a new folder to be hidden, you must set the isHidden property to true on creation.
     * @param MailFolder $body The request body
     * @param MailFoldersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MailFolder $body, ?MailFoldersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MailFoldersRequestBuilder
    */
    public function withUrl(string $rawUrl): MailFoldersRequestBuilder {
        return new MailFoldersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
