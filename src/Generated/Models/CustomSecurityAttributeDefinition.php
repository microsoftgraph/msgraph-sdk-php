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
     * Gets the allowedValues property value. Values that are predefined for this custom security attribute. This navigation property is not returned by default and must be specified in an $expand query. For example, /directory/customSecurityAttributeDefinitions?$expand=allowedValues.
     * @return array<AllowedValue>|null
    */
    public function getAllowedValues(): ?array {
        return $this->getBackingStore()->get('allowedValues');
    }

    /**
     * Gets the attributeSet property value. Name of the attribute set. Case insensitive.
     * @return string|null
    */
    public function getAttributeSet(): ?string {
        return $this->getBackingStore()->get('attributeSet');
    }

    /**
     * Gets the description property value. Description of the custom security attribute. Can be up to 128 characters long and include Unicode characters. Can be changed later.
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
     * Gets the isCollection property value. Indicates whether multiple values can be assigned to the custom security attribute. Cannot be changed later. If type is set to Boolean, isCollection cannot be set to true.
     * @return bool|null
    */
    public function getIsCollection(): ?bool {
        return $this->getBackingStore()->get('isCollection');
    }

    /**
     * Gets the isSearchable property value. Indicates whether custom security attribute values are indexed for searching on objects that are assigned attribute values. Cannot be changed later.
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->getBackingStore()->get('isSearchable');
    }

    /**
     * Gets the name property value. Name of the custom security attribute. Must be unique within an attribute set. Can be up to 32 characters long and include Unicode characters. Cannot contain spaces or special characters. Cannot be changed later. Case insensitive.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the status property value. Specifies whether the custom security attribute is active or deactivated. Acceptable values are: Available and Deprecated. Can be changed later.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the type property value. Data type for the custom security attribute values. Supported types are: Boolean, Integer, and String. Cannot be changed later.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the usePreDefinedValuesOnly property value. Indicates whether only predefined values can be assigned to the custom security attribute. If set to false, free-form values are allowed. Can later be changed from true to false, but cannot be changed from false to true. If type is set to Boolean, usePreDefinedValuesOnly cannot be set to true.
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
     * Sets the allowedValues property value. Values that are predefined for this custom security attribute. This navigation property is not returned by default and must be specified in an $expand query. For example, /directory/customSecurityAttributeDefinitions?$expand=allowedValues.
     * @param array<AllowedValue>|null $value Value to set for the allowedValues property.
    */
    public function setAllowedValues(?array $value): void {
        $this->getBackingStore()->set('allowedValues', $value);
    }

    /**
     * Sets the attributeSet property value. Name of the attribute set. Case insensitive.
     * @param string|null $value Value to set for the attributeSet property.
    */
    public function setAttributeSet(?string $value): void {
        $this->getBackingStore()->set('attributeSet', $value);
    }

    /**
     * Sets the description property value. Description of the custom security attribute. Can be up to 128 characters long and include Unicode characters. Can be changed later.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the isCollection property value. Indicates whether multiple values can be assigned to the custom security attribute. Cannot be changed later. If type is set to Boolean, isCollection cannot be set to true.
     * @param bool|null $value Value to set for the isCollection property.
    */
    public function setIsCollection(?bool $value): void {
        $this->getBackingStore()->set('isCollection', $value);
    }

    /**
     * Sets the isSearchable property value. Indicates whether custom security attribute values are indexed for searching on objects that are assigned attribute values. Cannot be changed later.
     * @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value): void {
        $this->getBackingStore()->set('isSearchable', $value);
    }

    /**
     * Sets the name property value. Name of the custom security attribute. Must be unique within an attribute set. Can be up to 32 characters long and include Unicode characters. Cannot contain spaces or special characters. Cannot be changed later. Case insensitive.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the status property value. Specifies whether the custom security attribute is active or deactivated. Acceptable values are: Available and Deprecated. Can be changed later.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the type property value. Data type for the custom security attribute values. Supported types are: Boolean, Integer, and String. Cannot be changed later.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the usePreDefinedValuesOnly property value. Indicates whether only predefined values can be assigned to the custom security attribute. If set to false, free-form values are allowed. Can later be changed from true to false, but cannot be changed from false to true. If type is set to Boolean, usePreDefinedValuesOnly cannot be set to true.
     * @param bool|null $value Value to set for the usePreDefinedValuesOnly property.
    */
    public function setUsePreDefinedValuesOnly(?bool $value): void {
        $this->getBackingStore()->set('usePreDefinedValuesOnly', $value);
    }

}
