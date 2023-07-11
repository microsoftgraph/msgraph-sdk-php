<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessTemplate extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new conditionalAccessTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessTemplate {
        return new ConditionalAccessTemplate();
    }

    /**
     * Gets the description property value. The user-friendly name of the template.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the details property value. The details property
     * @return ConditionalAccessPolicyDetail|null
    */
    public function getDetails(): ?ConditionalAccessPolicyDetail {
        $val = $this->getBackingStore()->get('details');
        if (is_null($val) || $val instanceof ConditionalAccessPolicyDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getObjectValue([ConditionalAccessPolicyDetail::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'scenarios' => fn(ParseNode $n) => $o->setScenarios($n->getEnumValue(TemplateScenarios::class)),
        ]);
    }

    /**
     * Gets the name property value. The user-friendly name of the template.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the scenarios property value. The scenarios property
     * @return TemplateScenarios|null
    */
    public function getScenarios(): ?TemplateScenarios {
        $val = $this->getBackingStore()->get('scenarios');
        if (is_null($val) || $val instanceof TemplateScenarios) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scenarios'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('details', $this->getDetails());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('scenarios', $this->getScenarios());
    }

    /**
     * Sets the description property value. The user-friendly name of the template.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the details property value. The details property
     * @param ConditionalAccessPolicyDetail|null $value Value to set for the details property.
    */
    public function setDetails(?ConditionalAccessPolicyDetail $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the name property value. The user-friendly name of the template.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the scenarios property value. The scenarios property
     * @param TemplateScenarios|null $value Value to set for the scenarios property.
    */
    public function setScenarios(?TemplateScenarios $value): void {
        $this->getBackingStore()->set('scenarios', $value);
    }

}
