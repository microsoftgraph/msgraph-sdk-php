<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttributeRuleMembers extends SubjectSet implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new attributeRuleMembers and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.attributeRuleMembers');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttributeRuleMembers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttributeRuleMembers {
        return new AttributeRuleMembers();
    }

    /**
     * Gets the description property value. A description of the membership rule.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'membershipRule' => fn(ParseNode $n) => $o->setMembershipRule($n->getStringValue()),
        ]);
    }

    /**
     * Gets the membershipRule property value. Determines the allowed target users for this policy. For more information about the syntax of the membership rule, see Membership Rules syntax.
     * @return string|null
    */
    public function getMembershipRule(): ?string {
        $val = $this->getBackingStore()->get('membershipRule');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipRule'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('membershipRule', $this->getMembershipRule());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the description property value. A description of the membership rule.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the membershipRule property value. Determines the allowed target users for this policy. For more information about the syntax of the membership rule, see Membership Rules syntax.
     * @param string|null $value Value to set for the membershipRule property.
    */
    public function setMembershipRule(?string $value): void {
        $this->getBackingStore()->set('membershipRule', $value);
    }

}
