<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AudioConferencing implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new audioConferencing and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AudioConferencing
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AudioConferencing {
        return new AudioConferencing();
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
     * Gets the conferenceId property value. The conference id of the online meeting.
     * @return string|null
    */
    public function getConferenceId(): ?string {
        return $this->getBackingStore()->get('conferenceId');
    }

    /**
     * Gets the dialinUrl property value. A URL to the externally-accessible web page that contains dial-in information.
     * @return string|null
    */
    public function getDialinUrl(): ?string {
        return $this->getBackingStore()->get('dialinUrl');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conferenceId' => fn(ParseNode $n) => $o->setConferenceId($n->getStringValue()),
            'dialinUrl' => fn(ParseNode $n) => $o->setDialinUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tollFreeNumber' => fn(ParseNode $n) => $o->setTollFreeNumber($n->getStringValue()),
            'tollFreeNumbers' => fn(ParseNode $n) => $o->setTollFreeNumbers($n->getCollectionOfPrimitiveValues()),
            'tollNumber' => fn(ParseNode $n) => $o->setTollNumber($n->getStringValue()),
            'tollNumbers' => fn(ParseNode $n) => $o->setTollNumbers($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the tollFreeNumber property value. The tollFreeNumber property
     * @return string|null
    */
    public function getTollFreeNumber(): ?string {
        return $this->getBackingStore()->get('tollFreeNumber');
    }

    /**
     * Gets the tollFreeNumbers property value. List of toll-free numbers that are displayed in the meeting invite.
     * @return array<string>|null
    */
    public function getTollFreeNumbers(): ?array {
        return $this->getBackingStore()->get('tollFreeNumbers');
    }

    /**
     * Gets the tollNumber property value. The tollNumber property
     * @return string|null
    */
    public function getTollNumber(): ?string {
        return $this->getBackingStore()->get('tollNumber');
    }

    /**
     * Gets the tollNumbers property value. List of toll numbers that are displayed in the meeting invite.
     * @return array<string>|null
    */
    public function getTollNumbers(): ?array {
        return $this->getBackingStore()->get('tollNumbers');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('conferenceId', $this->getConferenceId());
        $writer->writeStringValue('dialinUrl', $this->getDialinUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('tollFreeNumber', $this->getTollFreeNumber());
        $writer->writeCollectionOfPrimitiveValues('tollFreeNumbers', $this->getTollFreeNumbers());
        $writer->writeStringValue('tollNumber', $this->getTollNumber());
        $writer->writeCollectionOfPrimitiveValues('tollNumbers', $this->getTollNumbers());
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
     * Sets the conferenceId property value. The conference id of the online meeting.
     * @param string|null $value Value to set for the conferenceId property.
    */
    public function setConferenceId(?string $value): void {
        $this->getBackingStore()->set('conferenceId', $value);
    }

    /**
     * Sets the dialinUrl property value. A URL to the externally-accessible web page that contains dial-in information.
     * @param string|null $value Value to set for the dialinUrl property.
    */
    public function setDialinUrl(?string $value): void {
        $this->getBackingStore()->set('dialinUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tollFreeNumber property value. The tollFreeNumber property
     * @param string|null $value Value to set for the tollFreeNumber property.
    */
    public function setTollFreeNumber(?string $value): void {
        $this->getBackingStore()->set('tollFreeNumber', $value);
    }

    /**
     * Sets the tollFreeNumbers property value. List of toll-free numbers that are displayed in the meeting invite.
     * @param array<string>|null $value Value to set for the tollFreeNumbers property.
    */
    public function setTollFreeNumbers(?array $value): void {
        $this->getBackingStore()->set('tollFreeNumbers', $value);
    }

    /**
     * Sets the tollNumber property value. The tollNumber property
     * @param string|null $value Value to set for the tollNumber property.
    */
    public function setTollNumber(?string $value): void {
        $this->getBackingStore()->set('tollNumber', $value);
    }

    /**
     * Sets the tollNumbers property value. List of toll numbers that are displayed in the meeting invite.
     * @param array<string>|null $value Value to set for the tollNumbers property.
    */
    public function setTollNumbers(?array $value): void {
        $this->getBackingStore()->set('tollNumbers', $value);
    }

}
