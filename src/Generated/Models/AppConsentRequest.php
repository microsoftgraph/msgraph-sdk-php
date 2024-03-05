<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AppConsentRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new AppConsentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('appDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDisplayName'");
    }

    /**
     * Gets the appId property value. The identifier of the application. Required. Supports $filter (eq only) and $orderby.
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'pendingScopes' => fn(ParseNode $n) => $o->setPendingScopes($n->getCollectionOfObjectValues([AppConsentRequestScope::class, 'createFromDiscriminatorValue'])),
            'userConsentRequests' => fn(ParseNode $n) => $o->setUserConsentRequests($n->getCollectionOfObjectValues([UserConsentRequest::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the pendingScopes property value. A list of pending scopes waiting for approval. Required.
     * @return array<AppConsentRequestScope>|null
    */
    public function getPendingScopes(): ?array {
        $val = $this->getBackingStore()->get('pendingScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppConsentRequestScope::class);
            /** @var array<AppConsentRequestScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingScopes'");
    }

    /**
     * Gets the userConsentRequests property value. A list of pending user consent requests. Supports $filter (eq).
     * @return array<UserConsentRequest>|null
    */
    public function getUserConsentRequests(): ?array {
        $val = $this->getBackingStore()->get('userConsentRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserConsentRequest::class);
            /** @var array<UserConsentRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userConsentRequests'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeCollectionOfObjectValues('pendingScopes', $this->getPendingScopes());
        $writer->writeCollectionOfObjectValues('userConsentRequests', $this->getUserConsentRequests());
    }

    /**
     * Sets the appDisplayName property value. The display name of the app for which consent is requested. Required. Supports $filter (eq only) and $orderby.
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appId property value. The identifier of the application. Required. Supports $filter (eq only) and $orderby.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the pendingScopes property value. A list of pending scopes waiting for approval. Required.
     * @param array<AppConsentRequestScope>|null $value Value to set for the pendingScopes property.
    */
    public function setPendingScopes(?array $value): void {
        $this->getBackingStore()->set('pendingScopes', $value);
    }

    /**
     * Sets the userConsentRequests property value. A list of pending user consent requests. Supports $filter (eq).
     * @param array<UserConsentRequest>|null $value Value to set for the userConsentRequests property.
    */
    public function setUserConsentRequests(?array $value): void {
        $this->getBackingStore()->set('userConsentRequests', $value);
    }

}
