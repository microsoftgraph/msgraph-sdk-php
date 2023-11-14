<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\MicrosoftGraphSecurityPurgeData;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the purgeData method.
*/
class MicrosoftGraphSecurityPurgeDataRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityPurgeDataRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/cases/ediscoveryCases/{ediscoveryCase%2Did}/searches/{ediscoverySearch%2Did}/microsoft.graph.security.purgeData');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete Microsoft Teams messages contained in an eDiscovery search. You can collect and purge the following categories of Teams content:- Teams 1:1 chats - Chat messages, posts, and attachments shared in a Teams conversation between two people. Teams 1:1 chats are also called *conversations*.- Teams group chats - Chat messages, posts, and attachments shared in a Teams conversation between three or more people. Also called *1:N* chats or *group conversations*.- Teams channels - Chat messages, posts, replies, and attachments shared in a standard Teams channel.- Private channels - Message posts, replies, and attachments shared in a private Teams channel.- Shared channels - Message posts, replies, and attachments shared in a shared Teams channel. For more information about purging Teams messages, see:- eDiscovery solution series: Data spillage scenario - Search and purge- eDiscovery (Premium) workflow for content in Microsoft Teams  This API is available in the following national cloud deployments.
     * @param PurgeDataPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityPurgeDataRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-ediscoverysearch-purgedata?view=graph-rest-1.0 Find more info here
    */
    public function post(PurgeDataPostRequestBody $body, ?MicrosoftGraphSecurityPurgeDataRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Delete Microsoft Teams messages contained in an eDiscovery search. You can collect and purge the following categories of Teams content:- Teams 1:1 chats - Chat messages, posts, and attachments shared in a Teams conversation between two people. Teams 1:1 chats are also called *conversations*.- Teams group chats - Chat messages, posts, and attachments shared in a Teams conversation between three or more people. Also called *1:N* chats or *group conversations*.- Teams channels - Chat messages, posts, replies, and attachments shared in a standard Teams channel.- Private channels - Message posts, replies, and attachments shared in a private Teams channel.- Shared channels - Message posts, replies, and attachments shared in a shared Teams channel. For more information about purging Teams messages, see:- eDiscovery solution series: Data spillage scenario - Search and purge- eDiscovery (Premium) workflow for content in Microsoft Teams  This API is available in the following national cloud deployments.
     * @param PurgeDataPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityPurgeDataRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PurgeDataPostRequestBody $body, ?MicrosoftGraphSecurityPurgeDataRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityPurgeDataRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityPurgeDataRequestBuilder {
        return new MicrosoftGraphSecurityPurgeDataRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
