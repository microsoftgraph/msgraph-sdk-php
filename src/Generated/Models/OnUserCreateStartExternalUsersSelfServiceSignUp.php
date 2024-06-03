<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnUserCreateStartExternalUsersSelfServiceSignUp extends OnUserCreateStartHandler implements Parsable 
{
    /**
     * Instantiates a new OnUserCreateStartExternalUsersSelfServiceSignUp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onUserCreateStartExternalUsersSelfServiceSignUp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnUserCreateStartExternalUsersSelfServiceSignUp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnUserCreateStartExternalUsersSelfServiceSignUp {
        return new OnUserCreateStartExternalUsersSelfServiceSignUp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userTypeToCreate' => fn(ParseNode $n) => $o->setUserTypeToCreate($n->getEnumValue(UserType::class)),
        ]);
    }

    /**
     * Gets the userTypeToCreate property value. The type of user to create. Maps to userType property of user object. The possible values are: member, guest, unknownFutureValue.
     * @return UserType|null
    */
    public function getUserTypeToCreate(): ?UserType {
        $val = $this->getBackingStore()->get('userTypeToCreate');
        if (is_null($val) || $val instanceof UserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userTypeToCreate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('userTypeToCreate', $this->getUserTypeToCreate());
    }

    /**
     * Sets the userTypeToCreate property value. The type of user to create. Maps to userType property of user object. The possible values are: member, guest, unknownFutureValue.
     * @param UserType|null $value Value to set for the userTypeToCreate property.
    */
    public function setUserTypeToCreate(?UserType $value): void {
        $this->getBackingStore()->set('userTypeToCreate', $value);
    }

}
