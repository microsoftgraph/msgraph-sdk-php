<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccountSidAction extends AutomatedAction implements Parsable 
{
    /**
     * Instantiates a new AccountSidAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.accountSidAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccountSidAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccountSidAction {
        return new AccountSidAction();
    }

    /**
     * Gets the accountSidColumn property value. Name of the hunting-query result column that contains the SID of the targeted account.
     * @return string|null
    */
    public function getAccountSidColumn(): ?string {
        $val = $this->getBackingStore()->get('accountSidColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountSidColumn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountSidColumn' => fn(ParseNode $n) => $o->setAccountSidColumn($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountSidColumn', $this->getAccountSidColumn());
    }

    /**
     * Sets the accountSidColumn property value. Name of the hunting-query result column that contains the SID of the targeted account.
     * @param string|null $value Value to set for the accountSidColumn property.
    */
    public function setAccountSidColumn(?string $value): void {
        $this->getBackingStore()->set('accountSidColumn', $value);
    }

}
