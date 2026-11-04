<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccountObjectIdAction extends AutomatedAction implements Parsable 
{
    /**
     * Instantiates a new AccountObjectIdAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.accountObjectIdAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccountObjectIdAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccountObjectIdAction {
        return new AccountObjectIdAction();
    }

    /**
     * Gets the accountObjectIdColumn property value. Name of the hunting-query result column that contains the Microsoft Entra object ID of the targeted account.
     * @return string|null
    */
    public function getAccountObjectIdColumn(): ?string {
        $val = $this->getBackingStore()->get('accountObjectIdColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountObjectIdColumn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountObjectIdColumn' => fn(ParseNode $n) => $o->setAccountObjectIdColumn($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountObjectIdColumn', $this->getAccountObjectIdColumn());
    }

    /**
     * Sets the accountObjectIdColumn property value. Name of the hunting-query result column that contains the Microsoft Entra object ID of the targeted account.
     * @param string|null $value Value to set for the accountObjectIdColumn property.
    */
    public function setAccountObjectIdColumn(?string $value): void {
        $this->getBackingStore()->set('accountObjectIdColumn', $value);
    }

}
