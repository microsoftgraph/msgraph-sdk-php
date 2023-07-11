<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new userEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserEvidence {
        return new UserEvidence();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userAccount' => fn(ParseNode $n) => $o->setUserAccount($n->getObjectValue([UserAccount::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the userAccount property value. The user account details.
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('userAccount', $this->getUserAccount());
    }

    /**
     * Sets the userAccount property value. The user account details.
     * @param UserAccount|null $value Value to set for the userAccount property.
    */
    public function setUserAccount(?UserAccount $value): void {
        $this->getBackingStore()->set('userAccount', $value);
    }

}
