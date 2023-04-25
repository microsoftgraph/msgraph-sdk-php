<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomSecurityAttributeDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new customSecurityAttributeDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomSecurityAttributeDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomSecurityAttributeDefinition {
        return new CustomSecurityAttributeDefinition();
    }

    /**
     * Gets the allowedValues property value. The allowedValues property
     * @return array<AllowedValue>|null
    */
    public function getAllowedValues(): ?array {
        return $this->getBackingStore()->get('allowedValues');
    }

    /**
     * Gets the attributeSet property value. The attributeSet property
     * @return string|null
    */
    public function getAttributeSet(): ?string {
        return $this->getBackingStore()->get('attributeSet');
    }

    /**
     * Gets the description property value. The description property
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
            'allowedValues' => fn(ParseNode $n) => $o->setAllowedValues($n->getCollectionOfObjectValues([AllowedValue::class, 'createFromDiscriminatorValue'])),
            'attributeSet' => fn(ParseNode $n) => $o->setAttributeSet($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'isCollection' => fn(ParseNode $n) => $o->setIsCollection($n->getBooleanValue()),
            'isSearchable' => fn(ParseNode $n) => $o->setIsSearchable($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'usePreDefinedValuesOnly' => fn(ParseNode $n) => $o->setUsePreDefinedValuesOnly($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isCollection property value. The isCollection property
     * @return bool|null
    */
    public function getIsCollection(): ?bool {
        return $this->getBackingStore()->get('isCollection');
    }

    /**
     * Gets the isSearchable property value. The isSearchable property
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->getBackingStore()->get('isSearchable');
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the usePreDefinedValuesOnly property value. The usePreDefinedValuesOnly property
     * @return bool|null
    */
    public function getUsePreDefinedValuesOnly(): ?bool {
        return $this->getBackingStore()->get('usePreDefinedValuesOnly');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('allowedValues', $this->getAllowedValues());
        $writer->writeStringValue('attributeSet', $this->getAttributeSet());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('isCollection', $this->getIsCollection());
        $writer->writeBooleanValue('isSearchable', $this->getIsSearchable());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeBooleanValue('usePreDefinedValuesOnly', $this->getUsePreDefinedValuesOnly());
    }

    /**
     * Sets the allowedValues property value. The allowedValues property
     * @param array<AllowedValue>|null $value Value to set for the allowedValues property.
    */
    public function setAllowedValues(?array $value): void {
        $this->getBackingStore()->set('allowedValues', $value);
    }

    /**
     * Sets the attributeSet property value. The attributeSet property
     * @param string|null $value Value to set for the attributeSet property.
    */
    public function setAttributeSet(?string $value): void {
        $this->getBackingStore()->set('attributeSet', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the isCollection property value. The isCollection property
     * @param bool|null $value Value to set for the isCollection property.
    */
    public function setIsCollection(?bool $value): void {
        $this->getBackingStore()->set('isCollection', $value);
    }

    /**
     * Sets the isSearchable property value. The isSearchable property
     * @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value): void {
        $this->getBackingStore()->set('isSearchable', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the usePreDefinedValuesOnly property value. The usePreDefinedValuesOnly property
     * @param bool|null $value Value to set for the usePreDefinedValuesOnly property.
    */
    public function setUsePreDefinedValuesOnly(?bool $value): void {
        $this->getBackingStore()->set('usePreDefinedValuesOnly', $value);
    }

}
