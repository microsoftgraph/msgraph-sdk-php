<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RubricQuality implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new rubricQuality and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RubricQuality
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RubricQuality {
        return new RubricQuality();
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
     * Gets the criteria property value. The collection of criteria for this rubric quality.
     * @return array<RubricCriterion>|null
    */
    public function getCriteria(): ?array {
        return $this->getBackingStore()->get('criteria');
    }

    /**
     * Gets the description property value. The description of this rubric quality.
     * @return EducationItemBody|null
    */
    public function getDescription(): ?EducationItemBody {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The name of this rubric quality.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'criteria' => fn(ParseNode $n) => $o->setCriteria($n->getCollectionOfObjectValues([RubricCriterion::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getObjectValue([EducationItemBody::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'qualityId' => fn(ParseNode $n) => $o->setQualityId($n->getStringValue()),
            'weight' => fn(ParseNode $n) => $o->setWeight($n->getFloatValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the qualityId property value. The ID of this resource.
     * @return string|null
    */
    public function getQualityId(): ?string {
        return $this->getBackingStore()->get('qualityId');
    }

    /**
     * Gets the weight property value. If present, a numerical weight for this quality.  Weights must add up to 100.
     * @return float|null
    */
    public function getWeight(): ?float {
        return $this->getBackingStore()->get('weight');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('criteria', $this->getCriteria());
        $writer->writeObjectValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('qualityId', $this->getQualityId());
        $writer->writeFloatValue('weight', $this->getWeight());
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
     * Sets the criteria property value. The collection of criteria for this rubric quality.
     * @param array<RubricCriterion>|null $value Value to set for the criteria property.
    */
    public function setCriteria(?array $value): void {
        $this->getBackingStore()->set('criteria', $value);
    }

    /**
     * Sets the description property value. The description of this rubric quality.
     * @param EducationItemBody|null $value Value to set for the description property.
    */
    public function setDescription(?EducationItemBody $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of this rubric quality.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the qualityId property value. The ID of this resource.
     * @param string|null $value Value to set for the qualityId property.
    */
    public function setQualityId(?string $value): void {
        $this->getBackingStore()->set('qualityId', $value);
    }

    /**
     * Sets the weight property value. If present, a numerical weight for this quality.  Weights must add up to 100.
     * @param float|null $value Value to set for the weight property.
    */
    public function setWeight(?float $value): void {
        $this->getBackingStore()->set('weight', $value);
    }

}
