<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationAssignmentResource extends Entity implements Parsable 
{
    /**
     * @var bool|null $distributeForStudentWork Indicates whether this resource should be copied to each student submission for modification and submission. Required
    */
    private ?bool $distributeForStudentWork = null;
    
    /**
     * @var EducationResource|null $resource Resource object that has been associated with this assignment.
    */
    private ?EducationResource $resource = null;
    
    /**
     * Instantiates a new educationAssignmentResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAssignmentResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAssignmentResource {
        return new EducationAssignmentResource();
    }

    /**
     * Gets the distributeForStudentWork property value. Indicates whether this resource should be copied to each student submission for modification and submission. Required
     * @return bool|null
    */
    public function getDistributeForStudentWork(): ?bool {
        return $this->distributeForStudentWork;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'distributeForStudentWork' => function (ParseNode $n) use ($o) { $o->setDistributeForStudentWork($n->getBooleanValue()); },
            'resource' => function (ParseNode $n) use ($o) { $o->setResource($n->getObjectValue(array(EducationResource::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the resource property value. Resource object that has been associated with this assignment.
     * @return EducationResource|null
    */
    public function getResource(): ?EducationResource {
        return $this->resource;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('distributeForStudentWork', $this->distributeForStudentWork);
        $writer->writeObjectValue('resource', $this->resource);
    }

    /**
     * Sets the distributeForStudentWork property value. Indicates whether this resource should be copied to each student submission for modification and submission. Required
     *  @param bool|null $value Value to set for the distributeForStudentWork property.
    */
    public function setDistributeForStudentWork(?bool $value ): void {
        $this->distributeForStudentWork = $value;
    }

    /**
     * Sets the resource property value. Resource object that has been associated with this assignment.
     *  @param EducationResource|null $value Value to set for the resource property.
    */
    public function setResource(?EducationResource $value ): void {
        $this->resource = $value;
    }

}
