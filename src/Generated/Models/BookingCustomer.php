<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingCustomer extends BookingCustomerBase implements Parsable 
{
    /**
     * @var array<PhysicalAddress>|null $addresses Addresses associated with the customer, including home, business and other addresses.
    */
    private ?array $addresses = null;
    
    /**
     * @var string|null $displayName The name of the customer.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $emailAddress The SMTP address of the customer.
    */
    private ?string $emailAddress = null;
    
    /**
     * @var array<Phone>|null $phones Phone numbers associated with the customer, including home, business and mobile numbers.
    */
    private ?array $phones = null;
    
    /**
     * Instantiates a new BookingCustomer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingCustomer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingCustomer {
        return new BookingCustomer();
    }

    /**
     * Gets the addresses property value. Addresses associated with the customer, including home, business and other addresses.
     * @return array<PhysicalAddress>|null
    */
    public function getAddresses(): ?array {
        return $this->addresses;
    }

    /**
     * Gets the displayName property value. The name of the customer.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the emailAddress property value. The SMTP address of the customer.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addresses' => function (ParseNode $n) use ($o) { $o->setAddresses($n->getCollectionOfObjectValues(array(PhysicalAddress::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'emailAddress' => function (ParseNode $n) use ($o) { $o->setEmailAddress($n->getStringValue()); },
            'phones' => function (ParseNode $n) use ($o) { $o->setPhones($n->getCollectionOfObjectValues(array(Phone::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the phones property value. Phone numbers associated with the customer, including home, business and mobile numbers.
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        return $this->phones;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('addresses', $this->addresses);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('emailAddress', $this->emailAddress);
        $writer->writeCollectionOfObjectValues('phones', $this->phones);
    }

    /**
     * Sets the addresses property value. Addresses associated with the customer, including home, business and other addresses.
     *  @param array<PhysicalAddress>|null $value Value to set for the addresses property.
    */
    public function setAddresses(?array $value ): void {
        $this->addresses = $value;
    }

    /**
     * Sets the displayName property value. The name of the customer.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the emailAddress property value. The SMTP address of the customer.
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value ): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the phones property value. Phone numbers associated with the customer, including home, business and mobile numbers.
     *  @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value ): void {
        $this->phones = $value;
    }

}
