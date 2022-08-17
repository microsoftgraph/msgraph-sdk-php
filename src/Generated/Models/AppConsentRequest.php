<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppConsentRequest extends Entity implements Parsable 
{
    /**
     * @var string|null $appDisplayName The display name of the app for which consent is requested. Required. Supports $filter (eq only) and $orderby.
    */
    private ?string $appDisplayName = null;
    
    /**
     * @var string|null $appId The identifier of the application. Required. Supports $filter (eq only) and $orderby.
    */
    private ?string $appId = null;
    
    /**
     * @var array<AppConsentRequestScope>|null $pendingScopes A list of pending scopes waiting for approval. Required.
    */
    private ?array $pendingScopes = null;
    
    /**
     * @var array<UserConsentRequest>|null $userConsentRequests A list of pending user consent requests. Supports $filter (eq).
    */
    private ?array $userConsentRequests = null;
    
    /**
     * Instantiates a new appConsentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appConsentRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppConsentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppConsentRequest {
        return new AppConsentRequest();
    }

    /**
     * Gets the appDisplayName property value. The display name of the app for which consent is requested. Required. Supports $filter (eq only) and $orderby.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the appId property value. The identifier of the application. Required. Supports $filter (eq only) and $orderby.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => function (ParseNode $n) use ($o) { $o->setAppDisplayName($n->getStringValue()); },
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'pendingScopes' => function (ParseNode $n) use ($o) { $o->setPendingScopes($n->getCollectionOfObjectValues(array(AppConsentRequestScope::class, 'createFromDiscriminatorValue'))); },
            'userConsentRequests' => function (ParseNode $n) use ($o) { $o->setUserConsentRequests($n->getCollectionOfObjectValues(array(UserConsentRequest::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the pendingScopes property value. A list of pending scopes waiting for approval. Required.
     * @return array<AppConsentRequestScope>|null
    */
    public function getPendingScopes(): ?array {
        return $this->pendingScopes;
    }

    /**
     * Gets the userConsentRequests property value. A list of pending user consent requests. Supports $filter (eq).
     * @return array<UserConsentRequest>|null
    */
    public function getUserConsentRequests(): ?array {
        return $this->userConsentRequests;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeCollectionOfObjectValues('pendingScopes', $this->pendingScopes);
        $writer->writeCollectionOfObjectValues('userConsentRequests', $this->userConsentRequests);
    }

    /**
     * Sets the appDisplayName property value. The display name of the app for which consent is requested. Required. Supports $filter (eq only) and $orderby.
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the appId property value. The identifier of the application. Required. Supports $filter (eq only) and $orderby.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the pendingScopes property value. A list of pending scopes waiting for approval. Required.
     *  @param array<AppConsentRequestScope>|null $value Value to set for the pendingScopes property.
    */
    public function setPendingScopes(?array $value ): void {
        $this->pendingScopes = $value;
    }

    /**
     * Sets the userConsentRequests property value. A list of pending user consent requests. Supports $filter (eq).
     *  @param array<UserConsentRequest>|null $value Value to set for the userConsentRequests property.
    */
    public function setUserConsentRequests(?array $value ): void {
        $this->userConsentRequests = $value;
    }

}
