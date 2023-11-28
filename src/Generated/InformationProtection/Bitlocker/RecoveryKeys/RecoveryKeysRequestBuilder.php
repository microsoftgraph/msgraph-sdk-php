<?php

namespace Microsoft\Graph\Generated\InformationProtection\Bitlocker\RecoveryKeys;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\InformationProtection\Bitlocker\RecoveryKeys\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\InformationProtection\Bitlocker\RecoveryKeys\Item\BitlockerRecoveryKeyItemRequestBuilder;
use Microsoft\Graph\Generated\Models\BitlockerRecoveryKeyCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the recoveryKeys property of the microsoft.graph.bitlocker entity.
*/
class RecoveryKeysRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the recoveryKeys property of the microsoft.graph.bitlocker entity.
     * @param string $bitlockerRecoveryKeyId The unique identifier of bitlockerRecoveryKey
     * @return BitlockerRecoveryKeyItemRequestBuilder
    */
    public function byBitlockerRecoveryKeyId(string $bitlockerRecoveryKeyId): BitlockerRecoveryKeyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bitlockerRecoveryKey%2Did'] = $bitlockerRecoveryKeyId;
        return new BitlockerRecoveryKeyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RecoveryKeysRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/informationProtection/bitlocker/recoveryKeys{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the bitlockerRecoveryKey objects and their properties.  This operation does not return the key property. For information about how to read the key property, see Get bitlockerRecoveryKey.
     * @param RecoveryKeysRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BitlockerRecoveryKeyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/bitlocker-list-recoverykeys?view=graph-rest-1.0 Find more info here
    */
    public function get(?RecoveryKeysRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BitlockerRecoveryKeyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the bitlockerRecoveryKey objects and their properties.  This operation does not return the key property. For information about how to read the key property, see Get bitlockerRecoveryKey.
     * @param RecoveryKeysRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RecoveryKeysRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RecoveryKeysRequestBuilder
    */
    public function withUrl(string $rawUrl): RecoveryKeysRequestBuilder {
        return new RecoveryKeysRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
