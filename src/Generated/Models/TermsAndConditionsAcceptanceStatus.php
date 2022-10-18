<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TermsAndConditionsAcceptanceStatus extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $acceptedDateTime DateTime when the terms were last accepted by the user.
    */
    private ?DateTime $acceptedDateTime = null;
    
    /**
     * @var int|null $acceptedVersion Most recent version number of the T&C accepted by the user.
    */
    private ?int $acceptedVersion = null;
    
    /**
     * @var TermsAndConditions|null $termsAndConditions Navigation link to the terms and conditions that are assigned.
    */
    private ?TermsAndConditions $termsAndConditions = null;
    
    /**
     * @var string|null $userDisplayName Display name of the user whose acceptance the entity represents.
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userPrincipalName The userPrincipalName of the User that accepted the term.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new termsAndConditionsAcceptanceStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.termsAndConditionsAcceptanceStatus');
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
        return $this->acceptedDateTime;
    }

    /**
     * Gets the acceptedVersion property value. Most recent version number of the T&C accepted by the user.
     * @return int|null
    */
    public function getAcceptedVersion(): ?int {
        return $this->acceptedVersion;
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
        return $this->termsAndConditions;
    }

    /**
     * Gets the userDisplayName property value. Display name of the user whose acceptance the entity represents.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName of the User that accepted the term.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('acceptedDateTime', $this->acceptedDateTime);
        $writer->writeIntegerValue('acceptedVersion', $this->acceptedVersion);
        $writer->writeObjectValue('termsAndConditions', $this->termsAndConditions);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the acceptedDateTime property value. DateTime when the terms were last accepted by the user.
     *  @param DateTime|null $value Value to set for the acceptedDateTime property.
    */
    public function setAcceptedDateTime(?DateTime $value ): void {
        $this->acceptedDateTime = $value;
    }

    /**
     * Sets the acceptedVersion property value. Most recent version number of the T&C accepted by the user.
     *  @param int|null $value Value to set for the acceptedVersion property.
    */
    public function setAcceptedVersion(?int $value ): void {
        $this->acceptedVersion = $value;
    }

    /**
     * Sets the termsAndConditions property value. Navigation link to the terms and conditions that are assigned.
     *  @param TermsAndConditions|null $value Value to set for the termsAndConditions property.
    */
    public function setTermsAndConditions(?TermsAndConditions $value ): void {
        $this->termsAndConditions = $value;
    }

    /**
     * Sets the userDisplayName property value. Display name of the user whose acceptance the entity represents.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName of the User that accepted the term.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
