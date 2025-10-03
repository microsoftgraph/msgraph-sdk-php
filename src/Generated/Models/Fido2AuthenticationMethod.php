<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Fido2AuthenticationMethod extends AuthenticationMethod implements Parsable 
{
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
        $val = $this->getBackingStore()->get('aaGuid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aaGuid'");
    }

    /**
     * Gets the attestationCertificates property value. The attestation certificate(s) attached to this security key.
     * @return array<string>|null
    */
    public function getAttestationCertificates(): ?array {
        $val = $this->getBackingStore()->get('attestationCertificates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attestationCertificates'");
    }

    /**
     * Gets the attestationLevel property value. The attestation level of this FIDO2 security key. Possible values are: attested, or notAttested.
     * @return AttestationLevel|null
    */
    public function getAttestationLevel(): ?AttestationLevel {
        $val = $this->getBackingStore()->get('attestationLevel');
        if (is_null($val) || $val instanceof AttestationLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attestationLevel'");
    }

    /**
     * Gets the createdDateTime property value. The timestamp when this key was registered to the user.
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
     * Gets the displayName property value. The display name of the key as given by the user.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aaGuid' => fn(ParseNode $n) => $o->setAaGuid($n->getStringValue()),
            'attestationCertificates' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAttestationCertificates($val);
            },
            'attestationLevel' => fn(ParseNode $n) => $o->setAttestationLevel($n->getEnumValue(AttestationLevel::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
        ]);
    }

    /**
     * Gets the model property value. The manufacturer-assigned model of the FIDO2 security key.
     * @return string|null
    */
    public function getModel(): ?string {
        $val = $this->getBackingStore()->get('model');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'model'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('aaGuid', $this->getAaGuid());
        $writer->writeCollectionOfPrimitiveValues('attestationCertificates', $this->getAttestationCertificates());
        $writer->writeEnumValue('attestationLevel', $this->getAttestationLevel());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('model', $this->getModel());
    }

    /**
     * Sets the aaGuid property value. Authenticator Attestation GUID, an identifier that indicates the type (e.g. make and model) of the authenticator.
     * @param string|null $value Value to set for the aaGuid property.
    */
    public function setAaGuid(?string $value): void {
        $this->getBackingStore()->set('aaGuid', $value);
    }

    /**
     * Sets the attestationCertificates property value. The attestation certificate(s) attached to this security key.
     * @param array<string>|null $value Value to set for the attestationCertificates property.
    */
    public function setAttestationCertificates(?array $value): void {
        $this->getBackingStore()->set('attestationCertificates', $value);
    }

    /**
     * Sets the attestationLevel property value. The attestation level of this FIDO2 security key. Possible values are: attested, or notAttested.
     * @param AttestationLevel|null $value Value to set for the attestationLevel property.
    */
    public function setAttestationLevel(?AttestationLevel $value): void {
        $this->getBackingStore()->set('attestationLevel', $value);
    }

    /**
     * Sets the createdDateTime property value. The timestamp when this key was registered to the user.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The display name of the key as given by the user.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the model property value. The manufacturer-assigned model of the FIDO2 security key.
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

}
