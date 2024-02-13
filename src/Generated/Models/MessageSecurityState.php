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

class MessageSecurityState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MessageSecurityState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageSecurityState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageSecurityState {
        return new MessageSecurityState();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the connectingIP property value. The connectingIP property
     * @return string|null
    */
    public function getConnectingIP(): ?string {
        $val = $this->getBackingStore()->get('connectingIP');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectingIP'");
    }

    /**
     * Gets the deliveryAction property value. The deliveryAction property
     * @return string|null
    */
    public function getDeliveryAction(): ?string {
        $val = $this->getBackingStore()->get('deliveryAction');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliveryAction'");
    }

    /**
     * Gets the deliveryLocation property value. The deliveryLocation property
     * @return string|null
    */
    public function getDeliveryLocation(): ?string {
        $val = $this->getBackingStore()->get('deliveryLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliveryLocation'");
    }

    /**
     * Gets the directionality property value. The directionality property
     * @return string|null
    */
    public function getDirectionality(): ?string {
        $val = $this->getBackingStore()->get('directionality');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directionality'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'connectingIP' => fn(ParseNode $n) => $o->setConnectingIP($n->getStringValue()),
            'deliveryAction' => fn(ParseNode $n) => $o->setDeliveryAction($n->getStringValue()),
            'deliveryLocation' => fn(ParseNode $n) => $o->setDeliveryLocation($n->getStringValue()),
            'directionality' => fn(ParseNode $n) => $o->setDirectionality($n->getStringValue()),
            'internetMessageId' => fn(ParseNode $n) => $o->setInternetMessageId($n->getStringValue()),
            'messageFingerprint' => fn(ParseNode $n) => $o->setMessageFingerprint($n->getStringValue()),
            'messageReceivedDateTime' => fn(ParseNode $n) => $o->setMessageReceivedDateTime($n->getDateTimeValue()),
            'messageSubject' => fn(ParseNode $n) => $o->setMessageSubject($n->getStringValue()),
            'networkMessageId' => fn(ParseNode $n) => $o->setNetworkMessageId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the internetMessageId property value. The internetMessageId property
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        $val = $this->getBackingStore()->get('internetMessageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internetMessageId'");
    }

    /**
     * Gets the messageFingerprint property value. The messageFingerprint property
     * @return string|null
    */
    public function getMessageFingerprint(): ?string {
        $val = $this->getBackingStore()->get('messageFingerprint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageFingerprint'");
    }

    /**
     * Gets the messageReceivedDateTime property value. The messageReceivedDateTime property
     * @return DateTime|null
    */
    public function getMessageReceivedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('messageReceivedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageReceivedDateTime'");
    }

    /**
     * Gets the messageSubject property value. The messageSubject property
     * @return string|null
    */
    public function getMessageSubject(): ?string {
        $val = $this->getBackingStore()->get('messageSubject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageSubject'");
    }

    /**
     * Gets the networkMessageId property value. The networkMessageId property
     * @return string|null
    */
    public function getNetworkMessageId(): ?string {
        $val = $this->getBackingStore()->get('networkMessageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkMessageId'");
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
        $writer->writeStringValue('connectingIP', $this->getConnectingIP());
        $writer->writeStringValue('deliveryAction', $this->getDeliveryAction());
        $writer->writeStringValue('deliveryLocation', $this->getDeliveryLocation());
        $writer->writeStringValue('directionality', $this->getDirectionality());
        $writer->writeStringValue('internetMessageId', $this->getInternetMessageId());
        $writer->writeStringValue('messageFingerprint', $this->getMessageFingerprint());
        $writer->writeDateTimeValue('messageReceivedDateTime', $this->getMessageReceivedDateTime());
        $writer->writeStringValue('messageSubject', $this->getMessageSubject());
        $writer->writeStringValue('networkMessageId', $this->getNetworkMessageId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the connectingIP property value. The connectingIP property
     * @param string|null $value Value to set for the connectingIP property.
    */
    public function setConnectingIP(?string $value): void {
        $this->getBackingStore()->set('connectingIP', $value);
    }

    /**
     * Sets the deliveryAction property value. The deliveryAction property
     * @param string|null $value Value to set for the deliveryAction property.
    */
    public function setDeliveryAction(?string $value): void {
        $this->getBackingStore()->set('deliveryAction', $value);
    }

    /**
     * Sets the deliveryLocation property value. The deliveryLocation property
     * @param string|null $value Value to set for the deliveryLocation property.
    */
    public function setDeliveryLocation(?string $value): void {
        $this->getBackingStore()->set('deliveryLocation', $value);
    }

    /**
     * Sets the directionality property value. The directionality property
     * @param string|null $value Value to set for the directionality property.
    */
    public function setDirectionality(?string $value): void {
        $this->getBackingStore()->set('directionality', $value);
    }

    /**
     * Sets the internetMessageId property value. The internetMessageId property
     * @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value): void {
        $this->getBackingStore()->set('internetMessageId', $value);
    }

    /**
     * Sets the messageFingerprint property value. The messageFingerprint property
     * @param string|null $value Value to set for the messageFingerprint property.
    */
    public function setMessageFingerprint(?string $value): void {
        $this->getBackingStore()->set('messageFingerprint', $value);
    }

    /**
     * Sets the messageReceivedDateTime property value. The messageReceivedDateTime property
     * @param DateTime|null $value Value to set for the messageReceivedDateTime property.
    */
    public function setMessageReceivedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('messageReceivedDateTime', $value);
    }

    /**
     * Sets the messageSubject property value. The messageSubject property
     * @param string|null $value Value to set for the messageSubject property.
    */
    public function setMessageSubject(?string $value): void {
        $this->getBackingStore()->set('messageSubject', $value);
    }

    /**
     * Sets the networkMessageId property value. The networkMessageId property
     * @param string|null $value Value to set for the networkMessageId property.
    */
    public function setNetworkMessageId(?string $value): void {
        $this->getBackingStore()->set('networkMessageId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
