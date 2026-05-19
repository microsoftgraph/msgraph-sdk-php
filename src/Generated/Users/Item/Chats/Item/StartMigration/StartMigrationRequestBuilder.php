<?php

namespace Microsoft\Graph\Generated\Users\Item\Chats\Item\StartMigration;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the startMigration method.
*/
class StartMigrationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new StartMigrationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/chats/{chat%2Did}/startMigration');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Start the migration of external messages by enabling migration mode in an existing chat. Import operations were limited to newly created standard channels that were in an empty state. For more information, see Import third-party platform messages to Teams using Microsoft Graph. You can define a minimum timestamp for content migration that enables the import of messages from the past. The specified timestamp must be earlier than the current createdDateTime of the chat. Imported content is always limited by the createdDateTime of the target thread. An optional createdDateTime property in the payload allows you to update this value, but with strict rules: This API supportes the following channel types.
     * @param StartMigrationPostRequestBody $body The request body
     * @param StartMigrationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/chat-startmigration?view=graph-rest-1.0 Find more info here
    */
    public function post(StartMigrationPostRequestBody $body, ?StartMigrationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Start the migration of external messages by enabling migration mode in an existing chat. Import operations were limited to newly created standard channels that were in an empty state. For more information, see Import third-party platform messages to Teams using Microsoft Graph. You can define a minimum timestamp for content migration that enables the import of messages from the past. The specified timestamp must be earlier than the current createdDateTime of the chat. Imported content is always limited by the createdDateTime of the target thread. An optional createdDateTime property in the payload allows you to update this value, but with strict rules: This API supportes the following channel types.
     * @param StartMigrationPostRequestBody $body The request body
     * @param StartMigrationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(StartMigrationPostRequestBody $body, ?StartMigrationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return StartMigrationRequestBuilder
    */
    public function withUrl(string $rawUrl): StartMigrationRequestBuilder {
        return new StartMigrationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
