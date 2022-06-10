<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationTeacher implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $externalId Id of the Teacher in external source system.
    */
    private ?string $externalId = null;
    
    /**
     * @var string|null $teacherNumber Teacher number.
    */
    private ?string $teacherNumber = null;
    
    /**
     * Instantiates a new educationTeacher and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationTeacher
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationTeacher {
        return new EducationTeacher();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the externalId property value. Id of the Teacher in external source system.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'externalId' => function (ParseNode $n) use ($o) { $o->setExternalId($n->getStringValue()); },
            'teacherNumber' => function (ParseNode $n) use ($o) { $o->setTeacherNumber($n->getStringValue()); },
        ];
    }

    /**
     * Gets the teacherNumber property value. Teacher number.
     * @return string|null
    */
    public function getTeacherNumber(): ?string {
        return $this->teacherNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeStringValue('teacherNumber', $this->teacherNumber);
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
     * Sets the externalId property value. Id of the Teacher in external source system.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the teacherNumber property value. Teacher number.
     *  @param string|null $value Value to set for the teacherNumber property.
    */
    public function setTeacherNumber(?string $value ): void {
        $this->teacherNumber = $value;
    }

}
