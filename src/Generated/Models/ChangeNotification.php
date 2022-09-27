<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChangeNotification implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ChangeType|null $changeType The changeType property
    */
    private ?ChangeType $changeType = null;
    
    /**
     * @var string|null $clientState Value of the clientState property sent in the subscription request (if any). The maximum length is 255 characters. The client can check whether the change notification came from the service by comparing the values of the clientState property. The value of the clientState property sent with the subscription is compared with the value of the clientState property received with each change notification. Optional.
    */
    private ?string $clientState = null;
    
    /**
     * @var ChangeNotificationEncryptedContent|null $encryptedContent (Preview) Encrypted content attached with the change notification. Only provided if encryptionCertificate and includeResourceData were defined during the subscription request and if the resource supports it. Optional.
    */
    private ?ChangeNotificationEncryptedContent $encryptedContent = null;
    
    /**
     * @var string|null $id Unique ID for the notification. Optional.
    */
    private ?string $id = null;
    
    /**
     * @var LifecycleEventType|null $lifecycleEvent The type of lifecycle notification if the current notification is a lifecycle notification. Optional. Supported values are missed, subscriptionRemoved, reauthorizationRequired. Optional.
    */
    private ?LifecycleEventType $lifecycleEvent = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $resource The URI of the resource that emitted the change notification relative to https://graph.microsoft.com. Required.
    */
    private ?string $resource = null;
    
    /**
     * @var ResourceData|null $resourceData The content of this property depends on the type of resource being subscribed to. Optional.
    */
    private ?ResourceData $resourceData = null;
    
    /**
     * @var DateTime|null $subscriptionExpirationDateTime The expiration time for the subscription. Required.
    */
    private ?DateTime $subscriptionExpirationDateTime = null;
    
    /**
     * @var string|null $subscriptionId The unique identifier of the subscription that generated the notification.Required.
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var string|null $tenantId The unique identifier of the tenant from which the change notification originated. Required.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new changeNotification and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.changeNotification');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the changeType property value. The changeType property
     * @return ChangeType|null
    */
    public function getChangeType(): ?ChangeType {
        return $this->changeType;
    }

    /**
     * Gets the clientState property value. Value of the clientState property sent in the subscription request (if any). The maximum length is 255 characters. The client can check whether the change notification came from the service by comparing the values of the clientState property. The value of the clientState property sent with the subscription is compared with the value of the clientState property received with each change notification. Optional.
     * @return string|null
    */
    public function getClientState(): ?string {
        return $this->clientState;
    }

    /**
     * Gets the encryptedContent property value. (Preview) Encrypted content attached with the change notification. Only provided if encryptionCertificate and includeResourceData were defined during the subscription request and if the resource supports it. Optional.
     * @return ChangeNotificationEncryptedContent|null
    */
    public function getEncryptedContent(): ?ChangeNotificationEncryptedContent {
        return $this->encryptedContent;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'changeType' => function (ParseNode $n) use ($o) { $o->setChangeType($n->getEnumValue(ChangeType::class)); },
            'clientState' => function (ParseNode $n) use ($o) { $o->setClientState($n->getStringValue()); },
            'encryptedContent' => function (ParseNode $n) use ($o) { $o->setEncryptedContent($n->getObjectValue(array(ChangeNotificationEncryptedContent::class, 'createFromDiscriminatorValue'))); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'lifecycleEvent' => function (ParseNode $n) use ($o) { $o->setLifecycleEvent($n->getEnumValue(LifecycleEventType::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'resource' => function (ParseNode $n) use ($o) { $o->setResource($n->getStringValue()); },
            'resourceData' => function (ParseNode $n) use ($o) { $o->setResourceData($n->getObjectValue(array(ResourceData::class, 'createFromDiscriminatorValue'))); },
            'subscriptionExpirationDateTime' => function (ParseNode $n) use ($o) { $o->setSubscriptionExpirationDateTime($n->getDateTimeValue()); },
            'subscriptionId' => function (ParseNode $n) use ($o) { $o->setSubscriptionId($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. Unique ID for the notification. Optional.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lifecycleEvent property value. The type of lifecycle notification if the current notification is a lifecycle notification. Optional. Supported values are missed, subscriptionRemoved, reauthorizationRequired. Optional.
     * @return LifecycleEventType|null
    */
    public function getLifecycleEvent(): ?LifecycleEventType {
        return $this->lifecycleEvent;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the resource property value. The URI of the resource that emitted the change notification relative to https://graph.microsoft.com. Required.
     * @return string|null
    */
    public function getResource(): ?string {
        return $this->resource;
    }

    /**
     * Gets the resourceData property value. The content of this property depends on the type of resource being subscribed to. Optional.
     * @return ResourceData|null
    */
    public function getResourceData(): ?ResourceData {
        return $this->resourceData;
    }

    /**
     * Gets the subscriptionExpirationDateTime property value. The expiration time for the subscription. Required.
     * @return DateTime|null
    */
    public function getSubscriptionExpirationDateTime(): ?DateTime {
        return $this->subscriptionExpirationDateTime;
    }

    /**
     * Gets the subscriptionId property value. The unique identifier of the subscription that generated the notification.Required.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the tenantId property value. The unique identifier of the tenant from which the change notification originated. Required.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('changeType', $this->changeType);
        $writer->writeStringValue('clientState', $this->clientState);
        $writer->writeObjectValue('encryptedContent', $this->encryptedContent);
        $writer->writeStringValue('id', $this->id);
        $writer->writeEnumValue('lifecycleEvent', $this->lifecycleEvent);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('resource', $this->resource);
        $writer->writeObjectValue('resourceData', $this->resourceData);
        $writer->writeDateTimeValue('subscriptionExpirationDateTime', $this->subscriptionExpirationDateTime);
        $writer->writeStringValue('subscriptionId', $this->subscriptionId);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the changeType property value. The changeType property
     *  @param ChangeType|null $value Value to set for the changeType property.
    */
    public function setChangeType(?ChangeType $value ): void {
        $this->changeType = $value;
    }

    /**
     * Sets the clientState property value. Value of the clientState property sent in the subscription request (if any). The maximum length is 255 characters. The client can check whether the change notification came from the service by comparing the values of the clientState property. The value of the clientState property sent with the subscription is compared with the value of the clientState property received with each change notification. Optional.
     *  @param string|null $value Value to set for the clientState property.
    */
    public function setClientState(?string $value ): void {
        $this->clientState = $value;
    }

    /**
     * Sets the encryptedContent property value. (Preview) Encrypted content attached with the change notification. Only provided if encryptionCertificate and includeResourceData were defined during the subscription request and if the resource supports it. Optional.
     *  @param ChangeNotificationEncryptedContent|null $value Value to set for the encryptedContent property.
    */
    public function setEncryptedContent(?ChangeNotificationEncryptedContent $value ): void {
        $this->encryptedContent = $value;
    }

    /**
     * Sets the id property value. Unique ID for the notification. Optional.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the lifecycleEvent property value. The type of lifecycle notification if the current notification is a lifecycle notification. Optional. Supported values are missed, subscriptionRemoved, reauthorizationRequired. Optional.
     *  @param LifecycleEventType|null $value Value to set for the lifecycleEvent property.
    */
    public function setLifecycleEvent(?LifecycleEventType $value ): void {
        $this->lifecycleEvent = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the resource property value. The URI of the resource that emitted the change notification relative to https://graph.microsoft.com. Required.
     *  @param string|null $value Value to set for the resource property.
    */
    public function setResource(?string $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the resourceData property value. The content of this property depends on the type of resource being subscribed to. Optional.
     *  @param ResourceData|null $value Value to set for the resourceData property.
    */
    public function setResourceData(?ResourceData $value ): void {
        $this->resourceData = $value;
    }

    /**
     * Sets the subscriptionExpirationDateTime property value. The expiration time for the subscription. Required.
     *  @param DateTime|null $value Value to set for the subscriptionExpirationDateTime property.
    */
    public function setSubscriptionExpirationDateTime(?DateTime $value ): void {
        $this->subscriptionExpirationDateTime = $value;
    }

    /**
     * Sets the subscriptionId property value. The unique identifier of the subscription that generated the notification.Required.
     *  @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value ): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the tenantId property value. The unique identifier of the tenant from which the change notification originated. Required.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
