<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\SubjectSet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RuleBasedSubjectSet extends SubjectSet implements Parsable 
{
    /**
     * Instantiates a new RuleBasedSubjectSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.ruleBasedSubjectSet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RuleBasedSubjectSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RuleBasedSubjectSet {
        return new RuleBasedSubjectSet();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'rule' => fn(ParseNode $n) => $o->setRule($n->getStringValue()),
        ]);
    }

    /**
     * Gets the rule property value. The rule for the subject set. Lifecycle Workflows supports a rich set of user properties for configuring the rules using $filter query expressions. For more information, see supported user and query parameters.
     * @return string|null
    */
    public function getRule(): ?string {
        return $this->getBackingStore()->get('rule');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('rule', $this->getRule());
    }

    /**
     * Sets the rule property value. The rule for the subject set. Lifecycle Workflows supports a rich set of user properties for configuring the rules using $filter query expressions. For more information, see supported user and query parameters.
     * @param string|null $value Value to set for the rule property.
    */
    public function setRule(?string $value): void {
        $this->getBackingStore()->set('rule', $value);
    }

}
