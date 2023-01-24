<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A termsAndConditionsAcceptanceStatus entity represents the acceptance status of a given Terms and Conditions (T&C) policy by a given user. Users must accept the most up-to-date version of the terms in order to retain access to the Company Portal.
*/
class TermsAndConditionsAcceptanceStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new termsAndConditionsAcceptanceStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TermsAndConditionsAcceptanceStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TermsAndConditionsAcceptanceStatus {
        return new TermsAndConditionsAcceptanceStatus();
    }

    /**
     * Gets the acceptedDateTime property value. DateTime when the terms were last accepted by the user.
     * @return DateTime|null
    */
    public function getAcceptedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('acceptedDateTime');
    }

    /**
     * Gets the acceptedVersion property value. Most recent version number of the T&C accepted by the user.
     * @return int|null
    */
    public function getAcceptedVersion(): ?int {
        return $this->getBackingStore()->get('acceptedVersion');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acceptedDateTime' => fn(ParseNode $n) => $o->setAcceptedDateTime($n->getDateTimeValue()),
            'acceptedVersion' => fn(ParseNode $n) => $o->setAcceptedVersion($n->getIntegerValue()),
            'termsAndConditions' => fn(ParseNode $n) => $o->setTermsAndConditions($n->getObjectValue([TermsAndConditions::class, 'createFromDiscriminatorValue'])),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the termsAndConditions property value. Navigation link to the terms and conditions that are assigned.
     * @return TermsAndConditions|null
    */
    public function getTermsAndConditions(): ?TermsAndConditions {
        return $this->getBackingStore()->get('termsAndConditions');
    }

    /**
     * Gets the userDisplayName property value. Display name of the user whose acceptance the entity represents.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->getBackingStore()->get('userDisplayName');
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName of the User that accepted the term.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('acceptedDateTime', $this->getAcceptedDateTime());
        $writer->writeIntegerValue('acceptedVersion', $this->getAcceptedVersion());
        $writer->writeObjectValue('termsAndConditions', $this->getTermsAndConditions());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the acceptedDateTime property value. DateTime when the terms were last accepted by the user.
     * @param DateTime|null $value Value to set for the acceptedDateTime property.
    */
    public function setAcceptedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('acceptedDateTime', $value);
    }

    /**
     * Sets the acceptedVersion property value. Most recent version number of the T&C accepted by the user.
     * @param int|null $value Value to set for the acceptedVersion property.
    */
    public function setAcceptedVersion(?int $value): void {
        $this->getBackingStore()->set('acceptedVersion', $value);
    }

    /**
     * Sets the termsAndConditions property value. Navigation link to the terms and conditions that are assigned.
     * @param TermsAndConditions|null $value Value to set for the termsAndConditions property.
    */
    public function setTermsAndConditions(?TermsAndConditions $value): void {
        $this->getBackingStore()->set('termsAndConditions', $value);
    }

    /**
     * Sets the userDisplayName property value. Display name of the user whose acceptance the entity represents.
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName of the User that accepted the term.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
