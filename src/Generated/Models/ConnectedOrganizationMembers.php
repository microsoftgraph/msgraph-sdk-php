<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConnectedOrganizationMembers extends SubjectSet implements Parsable 
{
    /**
     * Instantiates a new ConnectedOrganizationMembers and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.connectedOrganizationMembers');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectedOrganizationMembers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConnectedOrganizationMembers {
        return new ConnectedOrganizationMembers();
    }

    /**
     * Gets the connectedOrganizationId property value. The ID of the connected organization in entitlement management.
     * @return string|null
    */
    public function getConnectedOrganizationId(): ?string {
        $val = $this->getBackingStore()->get('connectedOrganizationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectedOrganizationId'");
    }

    /**
     * Gets the description property value. The name of the connected organization.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectedOrganizationId' => fn(ParseNode $n) => $o->setConnectedOrganizationId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('connectedOrganizationId', $this->getConnectedOrganizationId());
        $writer->writeStringValue('description', $this->getDescription());
    }

    /**
     * Sets the connectedOrganizationId property value. The ID of the connected organization in entitlement management.
     * @param string|null $value Value to set for the connectedOrganizationId property.
    */
    public function setConnectedOrganizationId(?string $value): void {
        $this->getBackingStore()->set('connectedOrganizationId', $value);
    }

    /**
     * Sets the description property value. The name of the connected organization.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

}
