<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;

class EducationStudent implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new educationStudent and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.educationStudent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationStudent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationStudent {
        return new EducationStudent();
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
     * Gets the birthDate property value. Birth date of the student.
     * @return Date|null
    */
    public function getBirthDate(): ?Date {
        return $this->getBackingStore()->get('birthDate');
    }

    /**
     * Gets the externalId property value. ID of the student in the source system.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->getBackingStore()->get('externalId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'birthDate' => fn(ParseNode $n) => $o->setBirthDate($n->getDateValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'gender' => fn(ParseNode $n) => $o->setGender($n->getEnumValue(EducationGender::class)),
            'grade' => fn(ParseNode $n) => $o->setGrade($n->getStringValue()),
            'graduationYear' => fn(ParseNode $n) => $o->setGraduationYear($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'studentNumber' => fn(ParseNode $n) => $o->setStudentNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the gender property value. The possible values are: female, male, other, unknownFutureValue.
     * @return EducationGender|null
    */
    public function getGender(): ?EducationGender {
        return $this->getBackingStore()->get('gender');
    }

    /**
     * Gets the grade property value. Current grade level of the student.
     * @return string|null
    */
    public function getGrade(): ?string {
        return $this->getBackingStore()->get('grade');
    }

    /**
     * Gets the graduationYear property value. Year the student is graduating from the school.
     * @return string|null
    */
    public function getGraduationYear(): ?string {
        return $this->getBackingStore()->get('graduationYear');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the studentNumber property value. Student Number.
     * @return string|null
    */
    public function getStudentNumber(): ?string {
        return $this->getBackingStore()->get('studentNumber');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateValue('birthDate', $this->getBirthDate());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeEnumValue('gender', $this->getGender());
        $writer->writeStringValue('grade', $this->getGrade());
        $writer->writeStringValue('graduationYear', $this->getGraduationYear());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('studentNumber', $this->getStudentNumber());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the birthDate property value. Birth date of the student.
     *  @param Date|null $value Value to set for the birthDate property.
    */
    public function setBirthDate(?Date $value): void {
        $this->getBackingStore()->set('birthDate', $value);
    }

    /**
     * Sets the externalId property value. ID of the student in the source system.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the gender property value. The possible values are: female, male, other, unknownFutureValue.
     *  @param EducationGender|null $value Value to set for the gender property.
    */
    public function setGender(?EducationGender $value): void {
        $this->getBackingStore()->set('gender', $value);
    }

    /**
     * Sets the grade property value. Current grade level of the student.
     *  @param string|null $value Value to set for the grade property.
    */
    public function setGrade(?string $value): void {
        $this->getBackingStore()->set('grade', $value);
    }

    /**
     * Sets the graduationYear property value. Year the student is graduating from the school.
     *  @param string|null $value Value to set for the graduationYear property.
    */
    public function setGraduationYear(?string $value): void {
        $this->getBackingStore()->set('graduationYear', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the studentNumber property value. Student Number.
     *  @param string|null $value Value to set for the studentNumber property.
    */
    public function setStudentNumber(?string $value): void {
        $this->getBackingStore()->set('studentNumber', $value);
    }

}
