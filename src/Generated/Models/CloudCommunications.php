<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\\Graph\\Generated\Models\CallRecords\CallRecord;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudCommunications implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudCommunications and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudCommunications
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudCommunications {
        return new CloudCommunications();
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
     * Gets the callRecords property value. The callRecords property
     * @return array<CallRecord>|null
    */
    public function getCallRecords(): ?array {
        $val = $this->getBackingStore()->get('callRecords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CallRecord::class);
            /** @var array<CallRecord>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callRecords'");
    }

    /**
     * Gets the calls property value. The calls property
     * @return array<Call>|null
    */
    public function getCalls(): ?array {
        $val = $this->getBackingStore()->get('calls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Call::class);
            /** @var array<Call>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calls'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callRecords' => fn(ParseNode $n) => $o->setCallRecords($n->getCollectionOfObjectValues([CallRecord::class, 'createFromDiscriminatorValue'])),
            'calls' => fn(ParseNode $n) => $o->setCalls($n->getCollectionOfObjectValues([Call::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onlineMeetings' => fn(ParseNode $n) => $o->setOnlineMeetings($n->getCollectionOfObjectValues([OnlineMeeting::class, 'createFromDiscriminatorValue'])),
            'presences' => fn(ParseNode $n) => $o->setPresences($n->getCollectionOfObjectValues([Presence::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the onlineMeetings property value. The onlineMeetings property
     * @return array<OnlineMeeting>|null
    */
    public function getOnlineMeetings(): ?array {
        $val = $this->getBackingStore()->get('onlineMeetings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnlineMeeting::class);
            /** @var array<OnlineMeeting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlineMeetings'");
    }

    /**
     * Gets the presences property value. The presences property
     * @return array<Presence>|null
    */
    public function getPresences(): ?array {
        $val = $this->getBackingStore()->get('presences');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Presence::class);
            /** @var array<Presence>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presences'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('callRecords', $this->getCallRecords());
        $writer->writeCollectionOfObjectValues('calls', $this->getCalls());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('onlineMeetings', $this->getOnlineMeetings());
        $writer->writeCollectionOfObjectValues('presences', $this->getPresences());
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
     * Sets the callRecords property value. The callRecords property
     * @param array<CallRecord>|null $value Value to set for the callRecords property.
    */
    public function setCallRecords(?array $value): void {
        $this->getBackingStore()->set('callRecords', $value);
    }

    /**
     * Sets the calls property value. The calls property
     * @param array<Call>|null $value Value to set for the calls property.
    */
    public function setCalls(?array $value): void {
        $this->getBackingStore()->set('calls', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onlineMeetings property value. The onlineMeetings property
     * @param array<OnlineMeeting>|null $value Value to set for the onlineMeetings property.
    */
    public function setOnlineMeetings(?array $value): void {
        $this->getBackingStore()->set('onlineMeetings', $value);
    }

    /**
     * Sets the presences property value. The presences property
     * @param array<Presence>|null $value Value to set for the presences property.
    */
    public function setPresences(?array $value): void {
        $this->getBackingStore()->set('presences', $value);
    }

}
