<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents a customer of the business.
*/
class BookingCustomer extends BookingCustomerBase implements Parsable 
{
    /**
     * Instantiates a new BookingCustomer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.bookingCustomer');
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
     * Gets the addresses property value. Addresses associated with the customer. The attribute type of physicalAddress isn't supported in v1.0. Internally we map the addresses to the type others.
     * @return array<PhysicalAddress>|null
    */
    public function getAddresses(): ?array {
        $val = $this->getBackingStore()->get('addresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PhysicalAddress::class);
            /** @var array<PhysicalAddress>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addresses'");
    }

    /**
     * Gets the createdDateTime property value. The date, time, and time zone when the customer was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. The name of the customer.
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
     * Gets the emailAddress property value. The SMTP address of the customer.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('emailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailAddress'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addresses' => fn(ParseNode $n) => $o->setAddresses($n->getCollectionOfObjectValues([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'phones' => fn(ParseNode $n) => $o->setPhones($n->getCollectionOfObjectValues([Phone::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The date, time, and time zone when the customer was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the phones property value. Phone numbers associated with the customer, including home, business, and mobile numbers.
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        $val = $this->getBackingStore()->get('phones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Phone::class);
            /** @var array<Phone>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phones'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('addresses', $this->getAddresses());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('emailAddress', $this->getEmailAddress());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeCollectionOfObjectValues('phones', $this->getPhones());
    }

    /**
     * Sets the addresses property value. Addresses associated with the customer. The attribute type of physicalAddress isn't supported in v1.0. Internally we map the addresses to the type others.
     * @param array<PhysicalAddress>|null $value Value to set for the addresses property.
    */
    public function setAddresses(?array $value): void {
        $this->getBackingStore()->set('addresses', $value);
    }

    /**
     * Sets the createdDateTime property value. The date, time, and time zone when the customer was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The name of the customer.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the emailAddress property value. The SMTP address of the customer.
     * @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The date, time, and time zone when the customer was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the phones property value. Phone numbers associated with the customer, including home, business, and mobile numbers.
     * @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value): void {
        $this->getBackingStore()->set('phones', $value);
    }

}
