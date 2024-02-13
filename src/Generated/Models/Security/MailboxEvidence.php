<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailboxEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new MailboxEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.mailboxEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailboxEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailboxEvidence {
        return new MailboxEvidence();
    }

    /**
     * Gets the displayName property value. The name associated with the mailbox.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'primaryAddress' => fn(ParseNode $n) => $o->setPrimaryAddress($n->getStringValue()),
            'userAccount' => fn(ParseNode $n) => $o->setUserAccount($n->getObjectValue([UserAccount::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the primaryAddress property value. The primary email address of the mailbox.
     * @return string|null
    */
    public function getPrimaryAddress(): ?string {
        $val = $this->getBackingStore()->get('primaryAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryAddress'");
    }

    /**
     * Gets the userAccount property value. The user account of the mailbox.
     * @return UserAccount|null
    */
    public function getUserAccount(): ?UserAccount {
        $val = $this->getBackingStore()->get('userAccount');
        if (is_null($val) || $val instanceof UserAccount) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAccount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('primaryAddress', $this->getPrimaryAddress());
        $writer->writeObjectValue('userAccount', $this->getUserAccount());
    }

    /**
     * Sets the displayName property value. The name associated with the mailbox.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the primaryAddress property value. The primary email address of the mailbox.
     * @param string|null $value Value to set for the primaryAddress property.
    */
    public function setPrimaryAddress(?string $value): void {
        $this->getBackingStore()->set('primaryAddress', $value);
    }

    /**
     * Sets the userAccount property value. The user account of the mailbox.
     * @param UserAccount|null $value Value to set for the userAccount property.
    */
    public function setUserAccount(?UserAccount $value): void {
        $this->getBackingStore()->set('userAccount', $value);
    }

}
