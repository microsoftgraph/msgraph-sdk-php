<?php

namespace Microsoft\Graph\Generated\Teams\Item\Channels\Item\CompleteMigration;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the completeMigration method.
*/
class CompleteMigrationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CompleteMigrationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teams/{team%2Did}/channels/{channel%2Did}/completeMigration');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Complete migration on existing channels or new channels. Complete migration operations were initially restricted to newly created standard channels using migration templates specifically designed for the initial migration process. For more information, see Import third-party platform messages to Teams using Microsoft Graph. Consider the following points when completing migration for new and existing channels: After a completeMigration request is made for existing or new channels, you can still import more messages into the team by calling channel: startMigration. This API supportes the following channel types.
     * @param CompleteMigrationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-completemigration?view=graph-rest-1.0 Find more info here
    */
    public function post(?CompleteMigrationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Complete migration on existing channels or new channels. Complete migration operations were initially restricted to newly created standard channels using migration templates specifically designed for the initial migration process. For more information, see Import third-party platform messages to Teams using Microsoft Graph. Consider the following points when completing migration for new and existing channels: After a completeMigration request is made for existing or new channels, you can still import more messages into the team by calling channel: startMigration. This API supportes the following channel types.
     * @param CompleteMigrationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?CompleteMigrationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CompleteMigrationRequestBuilder
    */
    public function withUrl(string $rawUrl): CompleteMigrationRequestBuilder {
        return new CompleteMigrationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
