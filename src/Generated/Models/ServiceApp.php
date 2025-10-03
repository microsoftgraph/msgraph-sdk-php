<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceApp extends Entity implements Parsable 
{
    /**
     * Instantiates a new ServiceApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceApp {
        return new ServiceApp();
    }

    /**
     * Gets the application property value. The Entra ID application ID.
     * @return Identity|null
    */
    public function getApplication(): ?Identity {
        $val = $this->getBackingStore()->get('application');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'application'");
    }

    /**
     * Gets the effectiveDateTime property value. Timestamp of the effective activation of the service app.
     * @return DateTime|null
    */
    public function getEffectiveDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('effectiveDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'effectiveDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'application' => fn(ParseNode $n) => $o->setApplication($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'effectiveDateTime' => fn(ParseNode $n) => $o->setEffectiveDateTime($n->getDateTimeValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'registrationDateTime' => fn(ParseNode $n) => $o->setRegistrationDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ServiceAppStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the person who last modified the entity.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Timestamp of the last modification of the entity.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the registrationDateTime property value. Timestamp of the creation of the service app entity.
     * @return DateTime|null
    */
    public function getRegistrationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('registrationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationDateTime'");
    }

    /**
     * Gets the status property value. The status of the service app. This value indicates whether or not the application can be used to control the backup service. The possible values are: inactive, active, pendingActive, pendingInactive, unknownFutureValue.
     * @return ServiceAppStatus|null
    */
    public function getStatus(): ?ServiceAppStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ServiceAppStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('application', $this->getApplication());
        $writer->writeDateTimeValue('effectiveDateTime', $this->getEffectiveDateTime());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('registrationDateTime', $this->getRegistrationDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the application property value. The Entra ID application ID.
     * @param Identity|null $value Value to set for the application property.
    */
    public function setApplication(?Identity $value): void {
        $this->getBackingStore()->set('application', $value);
    }

    /**
     * Sets the effectiveDateTime property value. Timestamp of the effective activation of the service app.
     * @param DateTime|null $value Value to set for the effectiveDateTime property.
    */
    public function setEffectiveDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('effectiveDateTime', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the person who last modified the entity.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Timestamp of the last modification of the entity.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the registrationDateTime property value. Timestamp of the creation of the service app entity.
     * @param DateTime|null $value Value to set for the registrationDateTime property.
    */
    public function setRegistrationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('registrationDateTime', $value);
    }

    /**
     * Sets the status property value. The status of the service app. This value indicates whether or not the application can be used to control the backup service. The possible values are: inactive, active, pendingActive, pendingInactive, unknownFutureValue.
     * @param ServiceAppStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ServiceAppStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
