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

class PresenceStatusMessage implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new presenceStatusMessage and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PresenceStatusMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PresenceStatusMessage {
        return new PresenceStatusMessage();
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
     * Gets the expiryDateTime property value. Time in which the status message expires.If not provided, the status message does not expire.expiryDateTime.dateTime should not include time zone.expiryDateTime is not available when you request the presence of another user.
     * @return DateTimeTimeZone|null
    */
    public function getExpiryDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('expiryDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expiryDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expiryDateTime' => fn(ParseNode $n) => $o->setExpiryDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'publishedDateTime' => fn(ParseNode $n) => $o->setPublishedDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the message property value. Status message item. The only supported format currently is message.contentType = 'text'.
     * @return ItemBody|null
    */
    public function getMessage(): ?ItemBody {
        $val = $this->getBackingStore()->get('message');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'message'");
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
     * Gets the publishedDateTime property value. Time in which the status message was published.Read-only.publishedDateTime is not available when you request the presence of another user.
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('publishedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('expiryDateTime', $this->getExpiryDateTime());
        $writer->writeObjectValue('message', $this->getMessage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('publishedDateTime', $this->getPublishedDateTime());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the expiryDateTime property value. Time in which the status message expires.If not provided, the status message does not expire.expiryDateTime.dateTime should not include time zone.expiryDateTime is not available when you request the presence of another user.
     * @param DateTimeTimeZone|null $value Value to set for the expiryDateTime property.
    */
    public function setExpiryDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('expiryDateTime', $value);
    }

    /**
     * Sets the message property value. Status message item. The only supported format currently is message.contentType = 'text'.
     * @param ItemBody|null $value Value to set for the message property.
    */
    public function setMessage(?ItemBody $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the publishedDateTime property value. Time in which the status message was published.Read-only.publishedDateTime is not available when you request the presence of another user.
     * @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('publishedDateTime', $value);
    }

}
