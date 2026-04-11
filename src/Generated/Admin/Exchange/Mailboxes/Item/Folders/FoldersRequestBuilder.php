<?php

namespace Microsoft\Graph\Generated\Admin\Exchange\Mailboxes\Item\Folders;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\Exchange\Mailboxes\Item\Folders\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\Exchange\Mailboxes\Item\Folders\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Generated\Admin\Exchange\Mailboxes\Item\Folders\Item\MailboxFolderItemRequestBuilder;
use Microsoft\Graph\Generated\Models\MailboxFolderCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the folders property of the microsoft.graph.mailbox entity.
*/
class FoldersRequestBuilder extends BaseRequestBuilder 
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
     * Provides operations to manage the folders property of the microsoft.graph.mailbox entity.
     * @param string $mailboxFolderId The unique identifier of mailboxFolder
     * @return MailboxFolderItemRequestBuilder
    */
    public function byMailboxFolderId(string $mailboxFolderId): MailboxFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailboxFolder%2Did'] = $mailboxFolderId;
        return new MailboxFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FoldersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/exchange/mailboxes/{mailbox%2Did}/folders{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get folders from admin
     * @param FoldersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxFolderCollectionResponse|null>
     * @throws Exception
    */
    public function get(?FoldersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxFolderCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get folders from admin
     * @param FoldersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FoldersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return FoldersRequestBuilder
    */
    public function withUrl(string $rawUrl): FoldersRequestBuilder {
        return new FoldersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
