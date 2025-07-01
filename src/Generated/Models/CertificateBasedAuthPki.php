<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CertificateBasedAuthPki extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new CertificateBasedAuthPki and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.certificateBasedAuthPki');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CertificateBasedAuthPki
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CertificateBasedAuthPki {
        return new CertificateBasedAuthPki();
    }

    /**
     * Gets the certificateAuthorities property value. The collection of certificate authorities contained in this public key infrastructure resource.
     * @return array<CertificateAuthorityDetail>|null
    */
    public function getCertificateAuthorities(): ?array {
        $val = $this->getBackingStore()->get('certificateAuthorities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CertificateAuthorityDetail::class);
            /** @var array<CertificateAuthorityDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateAuthorities'");
    }

    /**
     * Gets the displayName property value. The name of the object. Maximum length is 256 characters.
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
            'certificateAuthorities' => fn(ParseNode $n) => $o->setCertificateAuthorities($n->getCollectionOfObjectValues([CertificateAuthorityDetail::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'statusDetails' => fn(ParseNode $n) => $o->setStatusDetails($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the object was created or last modified.
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
     * Gets the status property value. The status of any asynchronous jobs runs on the object which can be upload or delete.
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the statusDetails property value. The status details of the upload/deleted operation of PKI (Public Key Infrastructure).
     * @return string|null
    */
    public function getStatusDetails(): ?string {
        $val = $this->getBackingStore()->get('statusDetails');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('certificateAuthorities', $this->getCertificateAuthorities());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('statusDetails', $this->getStatusDetails());
    }

    /**
     * Sets the certificateAuthorities property value. The collection of certificate authorities contained in this public key infrastructure resource.
     * @param array<CertificateAuthorityDetail>|null $value Value to set for the certificateAuthorities property.
    */
    public function setCertificateAuthorities(?array $value): void {
        $this->getBackingStore()->set('certificateAuthorities', $value);
    }

    /**
     * Sets the displayName property value. The name of the object. Maximum length is 256 characters.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the object was created or last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the status property value. The status of any asynchronous jobs runs on the object which can be upload or delete.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the statusDetails property value. The status details of the upload/deleted operation of PKI (Public Key Infrastructure).
     * @param string|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?string $value): void {
        $this->getBackingStore()->set('statusDetails', $value);
    }

}
