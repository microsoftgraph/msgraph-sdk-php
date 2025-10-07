<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserActionContext extends SignInContext implements Parsable 
{
    /**
     * Instantiates a new UserActionContext and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userActionContext');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserActionContext
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserActionContext {
        return new UserActionContext();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userAction' => fn(ParseNode $n) => $o->setUserAction($n->getEnumValue(UserAction::class)),
        ]);
    }

    /**
     * Gets the userAction property value. Represents the user action that the authenticating identity is performing. The possible values are: registerSecurityInformation, registerOrJoinDevices, unknownFutureValue.
     * @return UserAction|null
    */
    public function getUserAction(): ?UserAction {
        $val = $this->getBackingStore()->get('userAction');
        if (is_null($val) || $val instanceof UserAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('userAction', $this->getUserAction());
    }

    /**
     * Sets the userAction property value. Represents the user action that the authenticating identity is performing. The possible values are: registerSecurityInformation, registerOrJoinDevices, unknownFutureValue.
     * @param UserAction|null $value Value to set for the userAction property.
    */
    public function setUserAction(?UserAction $value): void {
        $this->getBackingStore()->set('userAction', $value);
    }

}
