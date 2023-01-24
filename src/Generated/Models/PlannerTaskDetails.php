<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerTaskDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new plannerTaskDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTaskDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTaskDetails {
        return new PlannerTaskDetails();
    }

    /**
     * Gets the checklist property value. The collection of checklist items on the task.
     * @return PlannerChecklistItems|null
    */
    public function getChecklist(): ?PlannerChecklistItems {
        return $this->getBackingStore()->get('checklist');
    }

    /**
     * Gets the description property value. Description of the task.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'checklist' => fn(ParseNode $n) => $o->setChecklist($n->getObjectValue([PlannerChecklistItems::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'previewType' => fn(ParseNode $n) => $o->setPreviewType($n->getEnumValue(PlannerPreviewType::class)),
            'references' => fn(ParseNode $n) => $o->setReferences($n->getObjectValue([PlannerExternalReferences::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the previewType property value. This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
     * @return PlannerPreviewType|null
    */
    public function getPreviewType(): ?PlannerPreviewType {
        return $this->getBackingStore()->get('previewType');
    }

    /**
     * Gets the references property value. The collection of references on the task.
     * @return PlannerExternalReferences|null
    */
    public function getReferences(): ?PlannerExternalReferences {
        return $this->getBackingStore()->get('references');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('checklist', $this->getChecklist());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('previewType', $this->getPreviewType());
        $writer->writeObjectValue('references', $this->getReferences());
    }

    /**
     * Sets the checklist property value. The collection of checklist items on the task.
     * @param PlannerChecklistItems|null $value Value to set for the checklist property.
    */
    public function setChecklist(?PlannerChecklistItems $value): void {
        $this->getBackingStore()->set('checklist', $value);
    }

    /**
     * Sets the description property value. Description of the task.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the previewType property value. This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
     * @param PlannerPreviewType|null $value Value to set for the previewType property.
    */
    public function setPreviewType(?PlannerPreviewType $value): void {
        $this->getBackingStore()->set('previewType', $value);
    }

    /**
     * Sets the references property value. The collection of references on the task.
     * @param PlannerExternalReferences|null $value Value to set for the references property.
    */
    public function setReferences(?PlannerExternalReferences $value): void {
        $this->getBackingStore()->set('references', $value);
    }

}
