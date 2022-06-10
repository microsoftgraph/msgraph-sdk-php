<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerTaskDetails extends Entity implements Parsable 
{
    /**
     * @var PlannerChecklistItems|null $checklist The collection of checklist items on the task.
    */
    private ?PlannerChecklistItems $checklist = null;
    
    /**
     * @var string|null $description Description of the task.
    */
    private ?string $description = null;
    
    /**
     * @var PlannerPreviewType|null $previewType This sets the type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
    */
    private ?PlannerPreviewType $previewType = null;
    
    /**
     * @var PlannerExternalReferences|null $references The collection of references on the task.
    */
    private ?PlannerExternalReferences $references = null;
    
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
        return $this->checklist;
    }

    /**
     * Gets the description property value. Description of the task.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'checklist' => function (ParseNode $n) use ($o) { $o->setChecklist($n->getObjectValue(array(PlannerChecklistItems::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'previewType' => function (ParseNode $n) use ($o) { $o->setPreviewType($n->getEnumValue(PlannerPreviewType::class)); },
            'references' => function (ParseNode $n) use ($o) { $o->setReferences($n->getObjectValue(array(PlannerExternalReferences::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the previewType property value. This sets the type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
     * @return PlannerPreviewType|null
    */
    public function getPreviewType(): ?PlannerPreviewType {
        return $this->previewType;
    }

    /**
     * Gets the references property value. The collection of references on the task.
     * @return PlannerExternalReferences|null
    */
    public function getReferences(): ?PlannerExternalReferences {
        return $this->references;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('checklist', $this->checklist);
        $writer->writeStringValue('description', $this->description);
        $writer->writeEnumValue('previewType', $this->previewType);
        $writer->writeObjectValue('references', $this->references);
    }

    /**
     * Sets the checklist property value. The collection of checklist items on the task.
     *  @param PlannerChecklistItems|null $value Value to set for the checklist property.
    */
    public function setChecklist(?PlannerChecklistItems $value ): void {
        $this->checklist = $value;
    }

    /**
     * Sets the description property value. Description of the task.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the previewType property value. This sets the type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
     *  @param PlannerPreviewType|null $value Value to set for the previewType property.
    */
    public function setPreviewType(?PlannerPreviewType $value ): void {
        $this->previewType = $value;
    }

    /**
     * Sets the references property value. The collection of references on the task.
     *  @param PlannerExternalReferences|null $value Value to set for the references property.
    */
    public function setReferences(?PlannerExternalReferences $value ): void {
        $this->references = $value;
    }

}
