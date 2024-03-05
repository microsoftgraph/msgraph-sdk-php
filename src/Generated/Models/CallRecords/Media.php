<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Media implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Media and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Media
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Media {
        return new Media();
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
     * Gets the calleeDevice property value. Device information associated with the callee endpoint of this media.
     * @return DeviceInfo|null
    */
    public function getCalleeDevice(): ?DeviceInfo {
        $val = $this->getBackingStore()->get('calleeDevice');
        if (is_null($val) || $val instanceof DeviceInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calleeDevice'");
    }

    /**
     * Gets the calleeNetwork property value. Network information associated with the callee endpoint of this media.
     * @return NetworkInfo|null
    */
    public function getCalleeNetwork(): ?NetworkInfo {
        $val = $this->getBackingStore()->get('calleeNetwork');
        if (is_null($val) || $val instanceof NetworkInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calleeNetwork'");
    }

    /**
     * Gets the callerDevice property value. Device information associated with the caller endpoint of this media.
     * @return DeviceInfo|null
    */
    public function getCallerDevice(): ?DeviceInfo {
        $val = $this->getBackingStore()->get('callerDevice');
        if (is_null($val) || $val instanceof DeviceInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callerDevice'");
    }

    /**
     * Gets the callerNetwork property value. Network information associated with the caller endpoint of this media.
     * @return NetworkInfo|null
    */
    public function getCallerNetwork(): ?NetworkInfo {
        $val = $this->getBackingStore()->get('callerNetwork');
        if (is_null($val) || $val instanceof NetworkInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callerNetwork'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calleeDevice' => fn(ParseNode $n) => $o->setCalleeDevice($n->getObjectValue([DeviceInfo::class, 'createFromDiscriminatorValue'])),
            'calleeNetwork' => fn(ParseNode $n) => $o->setCalleeNetwork($n->getObjectValue([NetworkInfo::class, 'createFromDiscriminatorValue'])),
            'callerDevice' => fn(ParseNode $n) => $o->setCallerDevice($n->getObjectValue([DeviceInfo::class, 'createFromDiscriminatorValue'])),
            'callerNetwork' => fn(ParseNode $n) => $o->setCallerNetwork($n->getObjectValue([NetworkInfo::class, 'createFromDiscriminatorValue'])),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'streams' => fn(ParseNode $n) => $o->setStreams($n->getCollectionOfObjectValues([MediaStream::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the label property value. How the media was identified during media negotiation stage.
     * @return string|null
    */
    public function getLabel(): ?string {
        $val = $this->getBackingStore()->get('label');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'label'");
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
     * Gets the streams property value. Network streams associated with this media.
     * @return array<MediaStream>|null
    */
    public function getStreams(): ?array {
        $val = $this->getBackingStore()->get('streams');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MediaStream::class);
            /** @var array<MediaStream>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'streams'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('calleeDevice', $this->getCalleeDevice());
        $writer->writeObjectValue('calleeNetwork', $this->getCalleeNetwork());
        $writer->writeObjectValue('callerDevice', $this->getCallerDevice());
        $writer->writeObjectValue('callerNetwork', $this->getCallerNetwork());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('streams', $this->getStreams());
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
     * Sets the calleeDevice property value. Device information associated with the callee endpoint of this media.
     * @param DeviceInfo|null $value Value to set for the calleeDevice property.
    */
    public function setCalleeDevice(?DeviceInfo $value): void {
        $this->getBackingStore()->set('calleeDevice', $value);
    }

    /**
     * Sets the calleeNetwork property value. Network information associated with the callee endpoint of this media.
     * @param NetworkInfo|null $value Value to set for the calleeNetwork property.
    */
    public function setCalleeNetwork(?NetworkInfo $value): void {
        $this->getBackingStore()->set('calleeNetwork', $value);
    }

    /**
     * Sets the callerDevice property value. Device information associated with the caller endpoint of this media.
     * @param DeviceInfo|null $value Value to set for the callerDevice property.
    */
    public function setCallerDevice(?DeviceInfo $value): void {
        $this->getBackingStore()->set('callerDevice', $value);
    }

    /**
     * Sets the callerNetwork property value. Network information associated with the caller endpoint of this media.
     * @param NetworkInfo|null $value Value to set for the callerNetwork property.
    */
    public function setCallerNetwork(?NetworkInfo $value): void {
        $this->getBackingStore()->set('callerNetwork', $value);
    }

    /**
     * Sets the label property value. How the media was identified during media negotiation stage.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->getBackingStore()->set('label', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the streams property value. Network streams associated with this media.
     * @param array<MediaStream>|null $value Value to set for the streams property.
    */
    public function setStreams(?array $value): void {
        $this->getBackingStore()->set('streams', $value);
    }

}
