<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class InformationProtection implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new informationProtection and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InformationProtection {
        return new InformationProtection();
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
     * Gets the bitlocker property value. The bitlocker property
     * @return Bitlocker|null
    */
    public function getBitlocker(): ?Bitlocker {
        $val = $this->getBackingStore()->get('bitlocker');
        if (is_null($val) || $val instanceof Bitlocker) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bitlocker'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bitlocker' => fn(ParseNode $n) => $o->setBitlocker($n->getObjectValue([Bitlocker::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'threatAssessmentRequests' => fn(ParseNode $n) => $o->setThreatAssessmentRequests($n->getCollectionOfObjectValues([ThreatAssessmentRequest::class, 'createFromDiscriminatorValue'])),
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
     * Gets the threatAssessmentRequests property value. The threatAssessmentRequests property
     * @return array<ThreatAssessmentRequest>|null
    */
    public function getThreatAssessmentRequests(): ?array {
        $val = $this->getBackingStore()->get('threatAssessmentRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ThreatAssessmentRequest::class);
            /** @var array<ThreatAssessmentRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatAssessmentRequests'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('bitlocker', $this->getBitlocker());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('threatAssessmentRequests', $this->getThreatAssessmentRequests());
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
     * Sets the bitlocker property value. The bitlocker property
     * @param Bitlocker|null $value Value to set for the bitlocker property.
    */
    public function setBitlocker(?Bitlocker $value): void {
        $this->getBackingStore()->set('bitlocker', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the threatAssessmentRequests property value. The threatAssessmentRequests property
     * @param array<ThreatAssessmentRequest>|null $value Value to set for the threatAssessmentRequests property.
    */
    public function setThreatAssessmentRequests(?array $value): void {
        $this->getBackingStore()->set('threatAssessmentRequests', $value);
    }

}
