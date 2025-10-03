<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OnlineMeetingInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new OnlineMeetingInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnlineMeetingInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnlineMeetingInfo {
        return new OnlineMeetingInfo();
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
     * Gets the conferenceId property value. The ID of the conference.
     * @return string|null
    */
    public function getConferenceId(): ?string {
        $val = $this->getBackingStore()->get('conferenceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conferenceId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conferenceId' => fn(ParseNode $n) => $o->setConferenceId($n->getStringValue()),
            'joinUrl' => fn(ParseNode $n) => $o->setJoinUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'phones' => fn(ParseNode $n) => $o->setPhones($n->getCollectionOfObjectValues([Phone::class, 'createFromDiscriminatorValue'])),
            'quickDial' => fn(ParseNode $n) => $o->setQuickDial($n->getStringValue()),
            'tollFreeNumbers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTollFreeNumbers($val);
            },
            'tollNumber' => fn(ParseNode $n) => $o->setTollNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the joinUrl property value. The external link that launches the online meeting. This is a URL that clients launch into a browser and will redirect the user to join the meeting.
     * @return string|null
    */
    public function getJoinUrl(): ?string {
        $val = $this->getBackingStore()->get('joinUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinUrl'");
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
     * Gets the phones property value. All of the phone numbers associated with this conference.
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        $val = $this->getBackingStore()->get('phones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Phone::class);
            /** @var array<Phone>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phones'");
    }

    /**
     * Gets the quickDial property value. The preformatted quick dial for this call.
     * @return string|null
    */
    public function getQuickDial(): ?string {
        $val = $this->getBackingStore()->get('quickDial');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quickDial'");
    }

    /**
     * Gets the tollFreeNumbers property value. The toll free numbers that can be used to join the conference.
     * @return array<string>|null
    */
    public function getTollFreeNumbers(): ?array {
        $val = $this->getBackingStore()->get('tollFreeNumbers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tollFreeNumbers'");
    }

    /**
     * Gets the tollNumber property value. The toll number that can be used to join the conference.
     * @return string|null
    */
    public function getTollNumber(): ?string {
        $val = $this->getBackingStore()->get('tollNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tollNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('conferenceId', $this->getConferenceId());
        $writer->writeStringValue('joinUrl', $this->getJoinUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('phones', $this->getPhones());
        $writer->writeStringValue('quickDial', $this->getQuickDial());
        $writer->writeCollectionOfPrimitiveValues('tollFreeNumbers', $this->getTollFreeNumbers());
        $writer->writeStringValue('tollNumber', $this->getTollNumber());
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
     * Sets the conferenceId property value. The ID of the conference.
     * @param string|null $value Value to set for the conferenceId property.
    */
    public function setConferenceId(?string $value): void {
        $this->getBackingStore()->set('conferenceId', $value);
    }

    /**
     * Sets the joinUrl property value. The external link that launches the online meeting. This is a URL that clients launch into a browser and will redirect the user to join the meeting.
     * @param string|null $value Value to set for the joinUrl property.
    */
    public function setJoinUrl(?string $value): void {
        $this->getBackingStore()->set('joinUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the phones property value. All of the phone numbers associated with this conference.
     * @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value): void {
        $this->getBackingStore()->set('phones', $value);
    }

    /**
     * Sets the quickDial property value. The preformatted quick dial for this call.
     * @param string|null $value Value to set for the quickDial property.
    */
    public function setQuickDial(?string $value): void {
        $this->getBackingStore()->set('quickDial', $value);
    }

    /**
     * Sets the tollFreeNumbers property value. The toll free numbers that can be used to join the conference.
     * @param array<string>|null $value Value to set for the tollFreeNumbers property.
    */
    public function setTollFreeNumbers(?array $value): void {
        $this->getBackingStore()->set('tollFreeNumbers', $value);
    }

    /**
     * Sets the tollNumber property value. The toll number that can be used to join the conference.
     * @param string|null $value Value to set for the tollNumber property.
    */
    public function setTollNumber(?string $value): void {
        $this->getBackingStore()->set('tollNumber', $value);
    }

}
