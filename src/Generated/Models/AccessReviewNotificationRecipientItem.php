<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccessReviewNotificationRecipientItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new accessReviewNotificationRecipientItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewNotificationRecipientItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewNotificationRecipientItem {
        return new AccessReviewNotificationRecipientItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'notificationRecipientScope' => fn(ParseNode $n) => $o->setNotificationRecipientScope($n->getObjectValue([AccessReviewNotificationRecipientScope::class, 'createFromDiscriminatorValue'])),
            'notificationTemplateType' => fn(ParseNode $n) => $o->setNotificationTemplateType($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the notificationRecipientScope property value. Determines the recipient of the notification email.
     * @return AccessReviewNotificationRecipientScope|null
    */
    public function getNotificationRecipientScope(): ?AccessReviewNotificationRecipientScope {
        $val = $this->getBackingStore()->get('notificationRecipientScope');
        if (is_null($val) || $val instanceof AccessReviewNotificationRecipientScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationRecipientScope'");
    }

    /**
     * Gets the notificationTemplateType property value. Indicates the type of access review email to be sent. Supported template type is CompletedAdditionalRecipients, which sends review completion notifications to the recipients.
     * @return string|null
    */
    public function getNotificationTemplateType(): ?string {
        $val = $this->getBackingStore()->get('notificationTemplateType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationTemplateType'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('notificationRecipientScope', $this->getNotificationRecipientScope());
        $writer->writeStringValue('notificationTemplateType', $this->getNotificationTemplateType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the notificationRecipientScope property value. Determines the recipient of the notification email.
     * @param AccessReviewNotificationRecipientScope|null $value Value to set for the notificationRecipientScope property.
    */
    public function setNotificationRecipientScope(?AccessReviewNotificationRecipientScope $value): void {
        $this->getBackingStore()->set('notificationRecipientScope', $value);
    }

    /**
     * Sets the notificationTemplateType property value. Indicates the type of access review email to be sent. Supported template type is CompletedAdditionalRecipients, which sends review completion notifications to the recipients.
     * @param string|null $value Value to set for the notificationTemplateType property.
    */
    public function setNotificationTemplateType(?string $value): void {
        $this->getBackingStore()->set('notificationTemplateType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
