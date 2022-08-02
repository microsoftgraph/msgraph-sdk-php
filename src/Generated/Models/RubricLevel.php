<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RubricLevel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var EducationItemBody|null $description The description of this rubric level.
    */
    private ?EducationItemBody $description = null;
    
    /**
     * @var string|null $displayName The name of this rubric level.
    */
    private ?string $displayName = null;
    
    /**
     * @var EducationAssignmentGradeType|null $grading Null if this is a no-points rubric; educationAssignmentPointsGradeType if it is a points rubric.
    */
    private ?EducationAssignmentGradeType $grading = null;
    
    /**
     * @var string|null $levelId The ID of this resource.
    */
    private ?string $levelId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new rubricLevel and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.rubricLevel');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RubricLevel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RubricLevel {
        return new RubricLevel();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The description of this rubric level.
     * @return EducationItemBody|null
    */
    public function getDescription(): ?EducationItemBody {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The name of this rubric level.
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
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getObjectValue(array(EducationItemBody::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'grading' => function (ParseNode $n) use ($o) { $o->setGrading($n->getObjectValue(array(EducationAssignmentGradeType::class, 'createFromDiscriminatorValue'))); },
            'levelId' => function (ParseNode $n) use ($o) { $o->setLevelId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the grading property value. Null if this is a no-points rubric; educationAssignmentPointsGradeType if it is a points rubric.
     * @return EducationAssignmentGradeType|null
    */
    public function getGrading(): ?EducationAssignmentGradeType {
        return $this->grading;
    }

    /**
     * Gets the levelId property value. The ID of this resource.
     * @return string|null
    */
    public function getLevelId(): ?string {
        return $this->levelId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('grading', $this->grading);
        $writer->writeStringValue('levelId', $this->levelId);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the description property value. The description of this rubric level.
     *  @param EducationItemBody|null $value Value to set for the description property.
    */
    public function setDescription(?EducationItemBody $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The name of this rubric level.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the grading property value. Null if this is a no-points rubric; educationAssignmentPointsGradeType if it is a points rubric.
     *  @param EducationAssignmentGradeType|null $value Value to set for the grading property.
    */
    public function setGrading(?EducationAssignmentGradeType $value ): void {
        $this->grading = $value;
    }

    /**
     * Sets the levelId property value. The ID of this resource.
     *  @param string|null $value Value to set for the levelId property.
    */
    public function setLevelId(?string $value ): void {
        $this->levelId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
