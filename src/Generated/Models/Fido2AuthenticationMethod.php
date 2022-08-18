<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Fido2AuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * @var string|null $aaGuid Authenticator Attestation GUID, an identifier that indicates the type (e.g. make and model) of the authenticator.
    */
    private ?string $aaGuid = null;
    
    /**
     * @var array<string>|null $attestationCertificates The attestation certificate(s) attached to this security key.
    */
    private ?array $attestationCertificates = null;
    
    /**
     * @var AttestationLevel|null $attestationLevel The attestation level of this FIDO2 security key. Possible values are: attested, or notAttested.
    */
    private ?AttestationLevel $attestationLevel = null;
    
    /**
     * @var DateTime|null $createdDateTime The timestamp when this key was registered to the user.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName The display name of the key as given by the user.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $model The manufacturer-assigned model of the FIDO2 security key.
    */
    private ?string $model = null;
    
    /**
     * Instantiates a new Fido2AuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.fido2AuthenticationMethod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Fido2AuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Fido2AuthenticationMethod {
        return new Fido2AuthenticationMethod();
    }

    /**
     * Gets the aaGuid property value. Authenticator Attestation GUID, an identifier that indicates the type (e.g. make and model) of the authenticator.
     * @return string|null
    */
    public function getAaGuid(): ?string {
        return $this->aaGuid;
    }

    /**
     * Gets the attestationCertificates property value. The attestation certificate(s) attached to this security key.
     * @return array<string>|null
    */
    public function getAttestationCertificates(): ?array {
        return $this->attestationCertificates;
    }

    /**
     * Gets the attestationLevel property value. The attestation level of this FIDO2 security key. Possible values are: attested, or notAttested.
     * @return AttestationLevel|null
    */
    public function getAttestationLevel(): ?AttestationLevel {
        return $this->attestationLevel;
    }

    /**
     * Gets the createdDateTime property value. The timestamp when this key was registered to the user.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. The display name of the key as given by the user.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aaGuid' => function (ParseNode $n) use ($o) { $o->setAaGuid($n->getStringValue()); },
            'attestationCertificates' => function (ParseNode $n) use ($o) { $o->setAttestationCertificates($n->getCollectionOfPrimitiveValues()); },
            'attestationLevel' => function (ParseNode $n) use ($o) { $o->setAttestationLevel($n->getEnumValue(AttestationLevel::class)); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'model' => function (ParseNode $n) use ($o) { $o->setModel($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the model property value. The manufacturer-assigned model of the FIDO2 security key.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('aaGuid', $this->aaGuid);
        $writer->writeCollectionOfPrimitiveValues('attestationCertificates', $this->attestationCertificates);
        $writer->writeEnumValue('attestationLevel', $this->attestationLevel);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('model', $this->model);
    }

    /**
     * Sets the aaGuid property value. Authenticator Attestation GUID, an identifier that indicates the type (e.g. make and model) of the authenticator.
     *  @param string|null $value Value to set for the aaGuid property.
    */
    public function setAaGuid(?string $value ): void {
        $this->aaGuid = $value;
    }

    /**
     * Sets the attestationCertificates property value. The attestation certificate(s) attached to this security key.
     *  @param array<string>|null $value Value to set for the attestationCertificates property.
    */
    public function setAttestationCertificates(?array $value ): void {
        $this->attestationCertificates = $value;
    }

    /**
     * Sets the attestationLevel property value. The attestation level of this FIDO2 security key. Possible values are: attested, or notAttested.
     *  @param AttestationLevel|null $value Value to set for the attestationLevel property.
    */
    public function setAttestationLevel(?AttestationLevel $value ): void {
        $this->attestationLevel = $value;
    }

    /**
     * Sets the createdDateTime property value. The timestamp when this key was registered to the user.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. The display name of the key as given by the user.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the model property value. The manufacturer-assigned model of the FIDO2 security key.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

}
