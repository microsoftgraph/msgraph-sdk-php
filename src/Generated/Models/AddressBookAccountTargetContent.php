<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AddressBookAccountTargetContent extends AccountTargetContent implements Parsable 
{
    /**
     * Instantiates a new AddressBookAccountTargetContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.addressBookAccountTargetContent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddressBookAccountTargetContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddressBookAccountTargetContent {
        return new AddressBookAccountTargetContent();
    }

    /**
     * Gets the accountTargetEmails property value. List of user emails targeted for an attack simulation training campaign.
     * @return array<string>|null
    */
    public function getAccountTargetEmails(): ?array {
        $val = $this->getBackingStore()->get('accountTargetEmails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountTargetEmails'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountTargetEmails' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAccountTargetEmails($val);
            },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('accountTargetEmails', $this->getAccountTargetEmails());
    }

    /**
     * Sets the accountTargetEmails property value. List of user emails targeted for an attack simulation training campaign.
     * @param array<string>|null $value Value to set for the accountTargetEmails property.
    */
    public function setAccountTargetEmails(?array $value): void {
        $this->getBackingStore()->set('accountTargetEmails', $value);
    }

}
