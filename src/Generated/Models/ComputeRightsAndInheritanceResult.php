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

class ComputeRightsAndInheritanceResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ComputeRightsAndInheritanceResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComputeRightsAndInheritanceResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComputeRightsAndInheritanceResult {
        return new ComputeRightsAndInheritanceResult();
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
     * Gets the contentRights property value. The contentRights property
     * @return array<LabelContentRight>|null
    */
    public function getContentRights(): ?array {
        $val = $this->getBackingStore()->get('contentRights');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LabelContentRight::class);
            /** @var array<LabelContentRight>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentRights'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentRights' => fn(ParseNode $n) => $o->setContentRights($n->getCollectionOfObjectValues([LabelContentRight::class, 'createFromDiscriminatorValue'])),
            'inheritedLabel' => fn(ParseNode $n) => $o->setInheritedLabel($n->getObjectValue([SensitivityLabel::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sensitivityLabels' => fn(ParseNode $n) => $o->setSensitivityLabels($n->getCollectionOfObjectValues([SensitivityLabel::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the inheritedLabel property value. The inheritedLabel property
     * @return SensitivityLabel|null
    */
    public function getInheritedLabel(): ?SensitivityLabel {
        $val = $this->getBackingStore()->get('inheritedLabel');
        if (is_null($val) || $val instanceof SensitivityLabel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inheritedLabel'");
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
     * Gets the sensitivityLabels property value. The sensitivityLabels property
     * @return array<SensitivityLabel>|null
    */
    public function getSensitivityLabels(): ?array {
        $val = $this->getBackingStore()->get('sensitivityLabels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SensitivityLabel::class);
            /** @var array<SensitivityLabel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabels'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('contentRights', $this->getContentRights());
        $writer->writeObjectValue('inheritedLabel', $this->getInheritedLabel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('sensitivityLabels', $this->getSensitivityLabels());
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
     * Sets the contentRights property value. The contentRights property
     * @param array<LabelContentRight>|null $value Value to set for the contentRights property.
    */
    public function setContentRights(?array $value): void {
        $this->getBackingStore()->set('contentRights', $value);
    }

    /**
     * Sets the inheritedLabel property value. The inheritedLabel property
     * @param SensitivityLabel|null $value Value to set for the inheritedLabel property.
    */
    public function setInheritedLabel(?SensitivityLabel $value): void {
        $this->getBackingStore()->set('inheritedLabel', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sensitivityLabels property value. The sensitivityLabels property
     * @param array<SensitivityLabel>|null $value Value to set for the sensitivityLabels property.
    */
    public function setSensitivityLabels(?array $value): void {
        $this->getBackingStore()->set('sensitivityLabels', $value);
    }

}
