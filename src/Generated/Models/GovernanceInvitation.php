<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceInvitation extends Entity implements Parsable 
{
    /**
     * Instantiates a new GovernanceInvitation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceInvitation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceInvitation {
        return new GovernanceInvitation();
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
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
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'governedTenantId' => fn(ParseNode $n) => $o->setGovernedTenantId($n->getStringValue()),
            'governedTenantName' => fn(ParseNode $n) => $o->setGovernedTenantName($n->getStringValue()),
            'governingTenantId' => fn(ParseNode $n) => $o->setGoverningTenantId($n->getStringValue()),
            'governingTenantName' => fn(ParseNode $n) => $o->setGoverningTenantName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the governedTenantId property value. The governedTenantId property
     * @return string|null
    */
    public function getGovernedTenantId(): ?string {
        $val = $this->getBackingStore()->get('governedTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governedTenantId'");
    }

    /**
     * Gets the governedTenantName property value. The governedTenantName property
     * @return string|null
    */
    public function getGovernedTenantName(): ?string {
        $val = $this->getBackingStore()->get('governedTenantName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governedTenantName'");
    }

    /**
     * Gets the governingTenantId property value. The governingTenantId property
     * @return string|null
    */
    public function getGoverningTenantId(): ?string {
        $val = $this->getBackingStore()->get('governingTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governingTenantId'");
    }

    /**
     * Gets the governingTenantName property value. The governingTenantName property
     * @return string|null
    */
    public function getGoverningTenantName(): ?string {
        $val = $this->getBackingStore()->get('governingTenantName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governingTenantName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('governedTenantId', $this->getGovernedTenantId());
        $writer->writeStringValue('governedTenantName', $this->getGovernedTenantName());
        $writer->writeStringValue('governingTenantId', $this->getGoverningTenantId());
        $writer->writeStringValue('governingTenantName', $this->getGoverningTenantName());
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expirationDateTime property
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the governedTenantId property value. The governedTenantId property
     * @param string|null $value Value to set for the governedTenantId property.
    */
    public function setGovernedTenantId(?string $value): void {
        $this->getBackingStore()->set('governedTenantId', $value);
    }

    /**
     * Sets the governedTenantName property value. The governedTenantName property
     * @param string|null $value Value to set for the governedTenantName property.
    */
    public function setGovernedTenantName(?string $value): void {
        $this->getBackingStore()->set('governedTenantName', $value);
    }

    /**
     * Sets the governingTenantId property value. The governingTenantId property
     * @param string|null $value Value to set for the governingTenantId property.
    */
    public function setGoverningTenantId(?string $value): void {
        $this->getBackingStore()->set('governingTenantId', $value);
    }

    /**
     * Sets the governingTenantName property value. The governingTenantName property
     * @param string|null $value Value to set for the governingTenantName property.
    */
    public function setGoverningTenantName(?string $value): void {
        $this->getBackingStore()->set('governingTenantName', $value);
    }

}
