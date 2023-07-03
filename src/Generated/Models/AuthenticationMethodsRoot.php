<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AuthenticationMethodsRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthenticationMethodsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethodsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethodsRoot {
        return new AuthenticationMethodsRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userRegistrationDetails' => fn(ParseNode $n) => $o->setUserRegistrationDetails($n->getCollectionOfObjectValues([UserRegistrationDetails::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the userRegistrationDetails property value. The userRegistrationDetails property
     * @return array<UserRegistrationDetails>|null
    */
    public function getUserRegistrationDetails(): ?array {
        $val = $this->getBackingStore()->get('userRegistrationDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserRegistrationDetails::class);
            /** @var array<UserRegistrationDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRegistrationDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('userRegistrationDetails', $this->getUserRegistrationDetails());
    }

    /**
     * Sets the userRegistrationDetails property value. The userRegistrationDetails property
     * @param array<UserRegistrationDetails>|null $value Value to set for the userRegistrationDetails property.
    */
    public function setUserRegistrationDetails(?array $value): void {
        $this->getBackingStore()->set('userRegistrationDetails', $value);
    }

}
