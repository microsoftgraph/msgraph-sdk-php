<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSubmissionResource extends Entity implements Parsable 
{
    /**
     * Instantiates a new EducationSubmissionResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSubmissionResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSubmissionResource {
        return new EducationSubmissionResource();
    }

    /**
     * Gets the assignmentResourceUrl property value. Pointer to the assignment from which the resource was copied, and if null, the student uploaded the resource.
     * @return string|null
    */
    public function getAssignmentResourceUrl(): ?string {
        $val = $this->getBackingStore()->get('assignmentResourceUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentResourceUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentResourceUrl' => fn(ParseNode $n) => $o->setAssignmentResourceUrl($n->getStringValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([EducationResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resource property value. Resource object.
     * @return EducationResource|null
    */
    public function getResource(): ?EducationResource {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof EducationResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignmentResourceUrl', $this->getAssignmentResourceUrl());
        $writer->writeObjectValue('resource', $this->getResource());
    }

    /**
     * Sets the assignmentResourceUrl property value. Pointer to the assignment from which the resource was copied, and if null, the student uploaded the resource.
     * @param string|null $value Value to set for the assignmentResourceUrl property.
    */
    public function setAssignmentResourceUrl(?string $value): void {
        $this->getBackingStore()->set('assignmentResourceUrl', $value);
    }

    /**
     * Sets the resource property value. Resource object.
     * @param EducationResource|null $value Value to set for the resource property.
    */
    public function setResource(?EducationResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
