<?php

namespace Microsoft\Graph\Generated\Groups\Item\Members\Item\Group;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\AddFavorite\AddFavoriteRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\AssignLicense\AssignLicenseRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\CheckGrantedPermissionsForApp\CheckGrantedPermissionsForAppRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\RemoveFavorite\RemoveFavoriteRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\Renew\RenewRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\ResetUnseenCount\ResetUnseenCountRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\SubscribeByMail\SubscribeByMailRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\UnsubscribeByMail\UnsubscribeByMailRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\Item\Group\ValidateProperties\ValidatePropertiesRequestBuilder;
use Microsoft\Graph\Generated\Models\Group;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class GroupRequestBuilder 
{
    /**
     * The addFavorite property
    */
    public function addFavorite(): AddFavoriteRequestBuilder {
        return new AddFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The assignLicense property
    */
    public function assignLicense(): AssignLicenseRequestBuilder {
        return new AssignLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkGrantedPermissionsForApp property
    */
    public function checkGrantedPermissionsForApp(): CheckGrantedPermissionsForAppRequestBuilder {
        return new CheckGrantedPermissionsForAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberGroups property
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberObjects property
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberGroups property
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberObjects property
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The removeFavorite property
    */
    public function removeFavorite(): RemoveFavoriteRequestBuilder {
        return new RemoveFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The renew property
    */
    public function renew(): RenewRequestBuilder {
        return new RenewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The resetUnseenCount property
    */
    public function resetUnseenCount(): ResetUnseenCountRequestBuilder {
        return new ResetUnseenCountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The restore property
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscribeByMail property
    */
    public function subscribeByMail(): SubscribeByMailRequestBuilder {
        return new SubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unsubscribeByMail property
    */
    public function unsubscribeByMail(): UnsubscribeByMailRequestBuilder {
        return new UnsubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The validateProperties property
    */
    public function validateProperties(): ValidatePropertiesRequestBuilder {
        return new ValidatePropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GroupRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}/members/{directoryObject%2Did}/microsoft.graph.group{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get the item of type microsoft.graph.directoryObject as microsoft.graph.group
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?GroupRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get the item of type microsoft.graph.directoryObject as microsoft.graph.group
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?GroupRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Group::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
