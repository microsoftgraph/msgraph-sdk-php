<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttributeRuleMembers extends SubjectSet implements Parsable 
{
    /**
     * @var string|null $description A description of the membership rule.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $membershipRule Determines the allowed target users for this policy. For more information about the syntax of the membership rule, see Membership Rules syntax.
    */
    private ?string $membershipRule = null;
    
    /**
     * Instantiates a new AttributeRuleMembers and sets the default values.
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
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'membershipRule' => function (ParseNode $n) use ($o) { $o->setMembershipRule($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the membershipRule property value. Determines the allowed target users for this policy. For more information about the syntax of the membership rule, see Membership Rules syntax.
     * @return string|null
    */
    public function getMembershipRule(): ?string {
        return $this->membershipRule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('membershipRule', $this->membershipRule);
    }

    /**
     * Sets the description property value. A description of the membership rule.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the membershipRule property value. Determines the allowed target users for this policy. For more information about the syntax of the membership rule, see Membership Rules syntax.
     *  @param string|null $value Value to set for the membershipRule property.
    */
    public function setMembershipRule(?string $value ): void {
        $this->membershipRule = $value;
    }

}
