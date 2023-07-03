<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class JoinMeetingIdSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new joinMeetingIdSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return JoinMeetingIdSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): JoinMeetingIdSettings {
        return new JoinMeetingIdSettings();
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
            'isPasscodeRequired' => fn(ParseNode $n) => $o->setIsPasscodeRequired($n->getBooleanValue()),
            'joinMeetingId' => fn(ParseNode $n) => $o->setJoinMeetingId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'passcode' => fn(ParseNode $n) => $o->setPasscode($n->getStringValue()),
        ];
    }

    /**
     * Gets the isPasscodeRequired property value. Indicates whether a passcode is required to join a meeting when using joinMeetingId. Optional.
     * @return bool|null
    */
    public function getIsPasscodeRequired(): ?bool {
        $val = $this->getBackingStore()->get('isPasscodeRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPasscodeRequired'");
    }

    /**
     * Gets the joinMeetingId property value. The meeting ID to be used to join a meeting. Optional. Read-only.
     * @return string|null
    */
    public function getJoinMeetingId(): ?string {
        $val = $this->getBackingStore()->get('joinMeetingId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinMeetingId'");
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
     * Gets the passcode property value. The passcode to join a meeting.  Optional. Read-only.
     * @return string|null
    */
    public function getPasscode(): ?string {
        $val = $this->getBackingStore()->get('passcode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isPasscodeRequired', $this->getIsPasscodeRequired());
        $writer->writeStringValue('joinMeetingId', $this->getJoinMeetingId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('passcode', $this->getPasscode());
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
     * Sets the isPasscodeRequired property value. Indicates whether a passcode is required to join a meeting when using joinMeetingId. Optional.
     * @param bool|null $value Value to set for the isPasscodeRequired property.
    */
    public function setIsPasscodeRequired(?bool $value): void {
        $this->getBackingStore()->set('isPasscodeRequired', $value);
    }

    /**
     * Sets the joinMeetingId property value. The meeting ID to be used to join a meeting. Optional. Read-only.
     * @param string|null $value Value to set for the joinMeetingId property.
    */
    public function setJoinMeetingId(?string $value): void {
        $this->getBackingStore()->set('joinMeetingId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the passcode property value. The passcode to join a meeting.  Optional. Read-only.
     * @param string|null $value Value to set for the passcode property.
    */
    public function setPasscode(?string $value): void {
        $this->getBackingStore()->set('passcode', $value);
    }

}
