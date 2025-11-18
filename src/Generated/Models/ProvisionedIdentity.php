<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProvisionedIdentity extends Identity implements Parsable 
{
    /**
     * Instantiates a new ProvisionedIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.provisionedIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisionedIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvisionedIdentity {
        return new ProvisionedIdentity();
    }

    /**
     * Gets the details property value. Details of the identity.
     * @return DetailsInfo|null
    */
    public function getDetails(): ?DetailsInfo {
        $val = $this->getBackingStore()->get('details');
        if (is_null($val) || $val instanceof DetailsInfo) {
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
            'details' => fn(ParseNode $n) => $o->setDetails($n->getObjectValue([DetailsInfo::class, 'createFromDiscriminatorValue'])),
            'identityType' => fn(ParseNode $n) => $o->setIdentityType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the identityType property value. Type of identity that has been provisioned, such as 'user' or 'group'. Supports $filter (eq, contains).
     * @return string|null
    */
    public function getIdentityType(): ?string {
        $val = $this->getBackingStore()->get('identityType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('details', $this->getDetails());
        $writer->writeStringValue('identityType', $this->getIdentityType());
    }

    /**
     * Sets the details property value. Details of the identity.
     * @param DetailsInfo|null $value Value to set for the details property.
    */
    public function setDetails(?DetailsInfo $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the identityType property value. Type of identity that has been provisioned, such as 'user' or 'group'. Supports $filter (eq, contains).
     * @param string|null $value Value to set for the identityType property.
    */
    public function setIdentityType(?string $value): void {
        $this->getBackingStore()->set('identityType', $value);
    }

}
