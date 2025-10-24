<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationOrganization extends Entity implements Parsable 
{
    /**
     * Instantiates a new EducationOrganization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationOrganization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationOrganization {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.educationSchool': return new EducationSchool();
            }
        }
        return new EducationOrganization();
    }

    /**
     * Gets the description property value. Organization description.
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
     * Gets the displayName property value. Organization display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the externalSource property value. Source where this organization was created from. Possible values are: sis, manual.
     * @return EducationExternalSource|null
    */
    public function getExternalSource(): ?EducationExternalSource {
        $val = $this->getBackingStore()->get('externalSource');
        if (is_null($val) || $val instanceof EducationExternalSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalSource'");
    }

    /**
     * Gets the externalSourceDetail property value. The name of the external source this resource was generated from.
     * @return string|null
    */
    public function getExternalSourceDetail(): ?string {
        $val = $this->getBackingStore()->get('externalSourceDetail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalSourceDetail'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalSource' => fn(ParseNode $n) => $o->setExternalSource($n->getEnumValue(EducationExternalSource::class)),
            'externalSourceDetail' => fn(ParseNode $n) => $o->setExternalSourceDetail($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('externalSource', $this->getExternalSource());
        $writer->writeStringValue('externalSourceDetail', $this->getExternalSourceDetail());
    }

    /**
     * Sets the description property value. Organization description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Organization display name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalSource property value. Source where this organization was created from. Possible values are: sis, manual.
     * @param EducationExternalSource|null $value Value to set for the externalSource property.
    */
    public function setExternalSource(?EducationExternalSource $value): void {
        $this->getBackingStore()->set('externalSource', $value);
    }

    /**
     * Sets the externalSourceDetail property value. The name of the external source this resource was generated from.
     * @param string|null $value Value to set for the externalSourceDetail property.
    */
    public function setExternalSourceDetail(?string $value): void {
        $this->getBackingStore()->set('externalSourceDetail', $value);
    }

}
