<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ThreatDetectionDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ThreatDetectionDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThreatDetectionDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThreatDetectionDetail {
        return new ThreatDetectionDetail();
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
     * Gets the confidenceLevel property value. Indicates the confidence level in the threat detection.
     * @return string|null
    */
    public function getConfidenceLevel(): ?string {
        $val = $this->getBackingStore()->get('confidenceLevel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'confidenceLevel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'confidenceLevel' => fn(ParseNode $n) => $o->setConfidenceLevel($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'priorityAccountProtection' => fn(ParseNode $n) => $o->setPriorityAccountProtection($n->getStringValue()),
            'threats' => fn(ParseNode $n) => $o->setThreats($n->getStringValue()),
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
     * Gets the priorityAccountProtection property value. Indicates if the account has priority protection enabled.
     * @return string|null
    */
    public function getPriorityAccountProtection(): ?string {
        $val = $this->getBackingStore()->get('priorityAccountProtection');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priorityAccountProtection'");
    }

    /**
     * Gets the threats property value. Lists the detected threats.
     * @return string|null
    */
    public function getThreats(): ?string {
        $val = $this->getBackingStore()->get('threats');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threats'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('confidenceLevel', $this->getConfidenceLevel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('priorityAccountProtection', $this->getPriorityAccountProtection());
        $writer->writeStringValue('threats', $this->getThreats());
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
     * Sets the confidenceLevel property value. Indicates the confidence level in the threat detection.
     * @param string|null $value Value to set for the confidenceLevel property.
    */
    public function setConfidenceLevel(?string $value): void {
        $this->getBackingStore()->set('confidenceLevel', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the priorityAccountProtection property value. Indicates if the account has priority protection enabled.
     * @param string|null $value Value to set for the priorityAccountProtection property.
    */
    public function setPriorityAccountProtection(?string $value): void {
        $this->getBackingStore()->set('priorityAccountProtection', $value);
    }

    /**
     * Sets the threats property value. Lists the detected threats.
     * @param string|null $value Value to set for the threats property.
    */
    public function setThreats(?string $value): void {
        $this->getBackingStore()->set('threats', $value);
    }

}
