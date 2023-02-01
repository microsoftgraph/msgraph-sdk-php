<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ChangeNotification implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new changeNotification and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangeNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChangeNotification {
        return new ChangeNotification();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the changeType property value. 
     * @return ChangeType|null
    */
    public function getChangeType(): ?ChangeType {
        return $this->getBackingStore()->get('changeType');
    }

    /**
     * Gets the clientState property value. Value of the clientState property sent in the subscription request (if any). The maximum length is 255 characters. The client can check whether the change notification came from the service by comparing the values of the clientState property. The value of the clientState property sent with the subscription is compared with the value of the clientState property received with each change notification. Optional.
     * @return string|null
    */
    public function getClientState(): ?string {
        return $this->getBackingStore()->get('clientState');
    }

    /**
     * Gets the encryptedContent property value. (Preview) Encrypted content attached with the change notification. Only provided if encryptionCertificate and includeResourceData were defined during the subscription request and if the resource supports it. Optional.
     * @return ChangeNotificationEncryptedContent|null
    */
    public function getEncryptedContent(): ?ChangeNotificationEncryptedContent {
        return $this->getBackingStore()->get('encryptedContent');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'changeType' => fn(ParseNode $n) => $o->setChangeType($n->getEnumValue(ChangeType::class)),
            'clientState' => fn(ParseNode $n) => $o->setClientState($n->getStringValue()),
            'encryptedContent' => fn(ParseNode $n) => $o->setEncryptedContent($n->getObjectValue([ChangeNotificationEncryptedContent::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lifecycleEvent' => fn(ParseNode $n) => $o->setLifecycleEvent($n->getEnumValue(LifecycleEventType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getStringValue()),
            'resourceData' => fn(ParseNode $n) => $o->setResourceData($n->getObjectValue([ResourceData::class, 'createFromDiscriminatorValue'])),
            'subscriptionExpirationDateTime' => fn(ParseNode $n) => $o->setSubscriptionExpirationDateTime($n->getDateTimeValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique ID for the notification. Optional.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the lifecycleEvent property value. The type of lifecycle notification if the current notification is a lifecycle notification. Optional. Supported values are missed, subscriptionRemoved, reauthorizationRequired. Optional.
     * @return LifecycleEventType|null
    */
    public function getLifecycleEvent(): ?LifecycleEventType {
        return $this->getBackingStore()->get('lifecycleEvent');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the resource property value. The URI of the resource that emitted the change notification relative to https://graph.microsoft.com. Required.
     * @return string|null
    */
    public function getResource(): ?string {
        return $this->getBackingStore()->get('resource');
    }

    /**
     * Gets the resourceData property value. The content of this property depends on the type of resource being subscribed to. Optional.
     * @return ResourceData|null
    */
    public function getResourceData(): ?ResourceData {
        return $this->getBackingStore()->get('resourceData');
    }

    /**
     * Gets the subscriptionExpirationDateTime property value. The expiration time for the subscription. Required.
     * @return DateTime|null
    */
    public function getSubscriptionExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('subscriptionExpirationDateTime');
    }

    /**
     * Gets the subscriptionId property value. The unique identifier of the subscription that generated the notification.Required.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->getBackingStore()->get('subscriptionId');
    }

    /**
     * Gets the tenantId property value. The unique identifier of the tenant from which the change notification originated. Required.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('changeType', $this->getChangeType());
        $writer->writeStringValue('clientState', $this->getClientState());
        $writer->writeObjectValue('encryptedContent', $this->getEncryptedContent());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeEnumValue('lifecycleEvent', $this->getLifecycleEvent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('resource', $this->getResource());
        $writer->writeObjectValue('resourceData', $this->getResourceData());
        $writer->writeDateTimeValue('subscriptionExpirationDateTime', $this->getSubscriptionExpirationDateTime());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the changeType property value. 
     * @param ChangeType|null $value Value to set for the changeType property.
    */
    public function setChangeType(?ChangeType $value): void {
        $this->getBackingStore()->set('changeType', $value);
    }

    /**
     * Sets the clientState property value. Value of the clientState property sent in the subscription request (if any). The maximum length is 255 characters. The client can check whether the change notification came from the service by comparing the values of the clientState property. The value of the clientState property sent with the subscription is compared with the value of the clientState property received with each change notification. Optional.
     * @param string|null $value Value to set for the clientState property.
    */
    public function setClientState(?string $value): void {
        $this->getBackingStore()->set('clientState', $value);
    }

    /**
     * Sets the encryptedContent property value. (Preview) Encrypted content attached with the change notification. Only provided if encryptionCertificate and includeResourceData were defined during the subscription request and if the resource supports it. Optional.
     * @param ChangeNotificationEncryptedContent|null $value Value to set for the encryptedContent property.
    */
    public function setEncryptedContent(?ChangeNotificationEncryptedContent $value): void {
        $this->getBackingStore()->set('encryptedContent', $value);
    }

    /**
     * Sets the id property value. Unique ID for the notification. Optional.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the lifecycleEvent property value. The type of lifecycle notification if the current notification is a lifecycle notification. Optional. Supported values are missed, subscriptionRemoved, reauthorizationRequired. Optional.
     * @param LifecycleEventType|null $value Value to set for the lifecycleEvent property.
    */
    public function setLifecycleEvent(?LifecycleEventType $value): void {
        $this->getBackingStore()->set('lifecycleEvent', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resource property value. The URI of the resource that emitted the change notification relative to https://graph.microsoft.com. Required.
     * @param string|null $value Value to set for the resource property.
    */
    public function setResource(?string $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the resourceData property value. The content of this property depends on the type of resource being subscribed to. Optional.
     * @param ResourceData|null $value Value to set for the resourceData property.
    */
    public function setResourceData(?ResourceData $value): void {
        $this->getBackingStore()->set('resourceData', $value);
    }

    /**
     * Sets the subscriptionExpirationDateTime property value. The expiration time for the subscription. Required.
     * @param DateTime|null $value Value to set for the subscriptionExpirationDateTime property.
    */
    public function setSubscriptionExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('subscriptionExpirationDateTime', $value);
    }

    /**
     * Sets the subscriptionId property value. The unique identifier of the subscription that generated the notification.Required.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

    /**
     * Sets the tenantId property value. The unique identifier of the tenant from which the change notification originated. Required.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
