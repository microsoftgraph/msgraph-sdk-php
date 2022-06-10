<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RubricQuality implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<RubricCriterion>|null $criteria The collection of criteria for this rubric quality.
    */
    private ?array $criteria = null;
    
    /**
     * @var EducationItemBody|null $description The description of this rubric quality.
    */
    private ?EducationItemBody $description = null;
    
    /**
     * @var string|null $displayName The name of this rubric quality.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $qualityId The ID of this resource.
    */
    private ?string $qualityId = null;
    
    /**
     * @var float|null $weight If present, a numerical weight for this quality.  Weights must add up to 100.
    */
    private ?float $weight = null;
    
    /**
     * Instantiates a new rubricQuality and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the criteria property value. The collection of criteria for this rubric quality.
     * @return array<RubricCriterion>|null
    */
    public function getCriteria(): ?array {
        return $this->criteria;
    }

    /**
     * Gets the description property value. The description of this rubric quality.
     * @return EducationItemBody|null
    */
    public function getDescription(): ?EducationItemBody {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The name of this rubric quality.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'criteria' => function (ParseNode $n) use ($o) { $o->setCriteria($n->getCollectionOfObjectValues(array(RubricCriterion::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getObjectValue(array(EducationItemBody::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'qualityId' => function (ParseNode $n) use ($o) { $o->setQualityId($n->getStringValue()); },
            'weight' => function (ParseNode $n) use ($o) { $o->setWeight($n->getFloatValue()); },
        ];
    }

    /**
     * Gets the qualityId property value. The ID of this resource.
     * @return string|null
    */
    public function getQualityId(): ?string {
        return $this->qualityId;
    }

    /**
     * Gets the weight property value. If present, a numerical weight for this quality.  Weights must add up to 100.
     * @return float|null
    */
    public function getWeight(): ?float {
        return $this->weight;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('criteria', $this->criteria);
        $writer->writeObjectValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('qualityId', $this->qualityId);
        $writer->writeFloatValue('weight', $this->weight);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the criteria property value. The collection of criteria for this rubric quality.
     *  @param array<RubricCriterion>|null $value Value to set for the criteria property.
    */
    public function setCriteria(?array $value ): void {
        $this->criteria = $value;
    }

    /**
     * Sets the description property value. The description of this rubric quality.
     *  @param EducationItemBody|null $value Value to set for the description property.
    */
    public function setDescription(?EducationItemBody $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The name of this rubric quality.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the qualityId property value. The ID of this resource.
     *  @param string|null $value Value to set for the qualityId property.
    */
    public function setQualityId(?string $value ): void {
        $this->qualityId = $value;
    }

    /**
     * Sets the weight property value. If present, a numerical weight for this quality.  Weights must add up to 100.
     *  @param float|null $value Value to set for the weight property.
    */
    public function setWeight(?float $value ): void {
        $this->weight = $value;
    }

}
