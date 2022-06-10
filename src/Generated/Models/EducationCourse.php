<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationCourse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $courseNumber Unique identifier for the course.
    */
    private ?string $courseNumber = null;
    
    /**
     * @var string|null $description Description of the course.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Name of the course.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $externalId ID of the course from the syncing system.
    */
    private ?string $externalId = null;
    
    /**
     * @var string|null $subject Subject of the course.
    */
    private ?string $subject = null;
    
    /**
     * Instantiates a new educationCourse and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationCourse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationCourse {
        return new EducationCourse();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the courseNumber property value. Unique identifier for the course.
     * @return string|null
    */
    public function getCourseNumber(): ?string {
        return $this->courseNumber;
    }

    /**
     * Gets the description property value. Description of the course.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Name of the course.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the externalId property value. ID of the course from the syncing system.
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
            'courseNumber' => function (ParseNode $n) use ($o) { $o->setCourseNumber($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'externalId' => function (ParseNode $n) use ($o) { $o->setExternalId($n->getStringValue()); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
        ];
    }

    /**
     * Gets the subject property value. Subject of the course.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('courseNumber', $this->courseNumber);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeStringValue('subject', $this->subject);
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
     * Sets the courseNumber property value. Unique identifier for the course.
     *  @param string|null $value Value to set for the courseNumber property.
    */
    public function setCourseNumber(?string $value ): void {
        $this->courseNumber = $value;
    }

    /**
     * Sets the description property value. Description of the course.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Name of the course.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the externalId property value. ID of the course from the syncing system.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the subject property value. Subject of the course.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

}
