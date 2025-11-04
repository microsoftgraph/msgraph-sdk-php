<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailboxProtectionRule extends ProtectionRuleBase implements Parsable 
{
    /**
     * Instantiates a new MailboxProtectionRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mailboxProtectionRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailboxProtectionRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailboxProtectionRule {
        return new MailboxProtectionRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mailboxExpression' => fn(ParseNode $n) => $o->setMailboxExpression($n->getStringValue()),
        ]);
    }

    /**
     * Gets the mailboxExpression property value. Contains a mailbox expression. For examples, see mailboxExpression examples.
     * @return string|null
    */
    public function getMailboxExpression(): ?string {
        $val = $this->getBackingStore()->get('mailboxExpression');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxExpression'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('mailboxExpression', $this->getMailboxExpression());
    }

    /**
     * Sets the mailboxExpression property value. Contains a mailbox expression. For examples, see mailboxExpression examples.
     * @param string|null $value Value to set for the mailboxExpression property.
    */
    public function setMailboxExpression(?string $value): void {
        $this->getBackingStore()->set('mailboxExpression', $value);
    }

}
