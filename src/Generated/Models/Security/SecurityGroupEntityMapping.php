<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityGroupEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new SecurityGroupEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.securityGroupEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityGroupEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityGroupEntityMapping {
        return new SecurityGroupEntityMapping();
    }

    /**
     * Gets the distinguishedNameColumn property value. Name of the detection query column that maps to the distinguished name of the alert entity.
     * @return string|null
    */
    public function getDistinguishedNameColumn(): ?string {
        $val = $this->getBackingStore()->get('distinguishedNameColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'distinguishedNameColumn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'distinguishedNameColumn' => fn(ParseNode $n) => $o->setDistinguishedNameColumn($n->getStringValue()),
            'objectIdColumn' => fn(ParseNode $n) => $o->setObjectIdColumn($n->getStringValue()),
            'sidColumn' => fn(ParseNode $n) => $o->setSidColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the objectIdColumn property value. Name of the detection query column that maps to the object ID of the alert entity.
     * @return string|null
    */
    public function getObjectIdColumn(): ?string {
        $val = $this->getBackingStore()->get('objectIdColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectIdColumn'");
    }

    /**
     * Gets the sidColumn property value. Name of the detection query column that maps to the security identifier (SID) of the alert entity.
     * @return string|null
    */
    public function getSidColumn(): ?string {
        $val = $this->getBackingStore()->get('sidColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sidColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('distinguishedNameColumn', $this->getDistinguishedNameColumn());
        $writer->writeStringValue('objectIdColumn', $this->getObjectIdColumn());
        $writer->writeStringValue('sidColumn', $this->getSidColumn());
    }

    /**
     * Sets the distinguishedNameColumn property value. Name of the detection query column that maps to the distinguished name of the alert entity.
     * @param string|null $value Value to set for the distinguishedNameColumn property.
    */
    public function setDistinguishedNameColumn(?string $value): void {
        $this->getBackingStore()->set('distinguishedNameColumn', $value);
    }

    /**
     * Sets the objectIdColumn property value. Name of the detection query column that maps to the object ID of the alert entity.
     * @param string|null $value Value to set for the objectIdColumn property.
    */
    public function setObjectIdColumn(?string $value): void {
        $this->getBackingStore()->set('objectIdColumn', $value);
    }

    /**
     * Sets the sidColumn property value. Name of the detection query column that maps to the security identifier (SID) of the alert entity.
     * @param string|null $value Value to set for the sidColumn property.
    */
    public function setSidColumn(?string $value): void {
        $this->getBackingStore()->set('sidColumn', $value);
    }

}
