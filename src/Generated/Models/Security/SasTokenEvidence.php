<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SasTokenEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new SasTokenEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.sasTokenEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SasTokenEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SasTokenEvidence {
        return new SasTokenEvidence();
    }

    /**
     * Gets the allowedIpAddresses property value. All IP addresses accessible with this SAS. The default value is Allows all IP addresses.
     * @return string|null
    */
    public function getAllowedIpAddresses(): ?string {
        $val = $this->getBackingStore()->get('allowedIpAddresses');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedIpAddresses'");
    }

    /**
     * Gets the allowedResourceTypes property value. All resource types accessible with this SAS.
     * @return array<string>|null
    */
    public function getAllowedResourceTypes(): ?array {
        $val = $this->getBackingStore()->get('allowedResourceTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedResourceTypes'");
    }

    /**
     * Gets the allowedServices property value. All services accessible with this SAS.
     * @return array<string>|null
    */
    public function getAllowedServices(): ?array {
        $val = $this->getBackingStore()->get('allowedServices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedServices'");
    }

    /**
     * Gets the expiryDateTime property value. The SAS expiration time. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024 is 2024-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getExpiryDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expiryDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expiryDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedIpAddresses' => fn(ParseNode $n) => $o->setAllowedIpAddresses($n->getStringValue()),
            'allowedResourceTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedResourceTypes($val);
            },
            'allowedServices' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedServices($val);
            },
            'expiryDateTime' => fn(ParseNode $n) => $o->setExpiryDateTime($n->getDateTimeValue()),
            'permissions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPermissions($val);
            },
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getStringValue()),
            'signatureHash' => fn(ParseNode $n) => $o->setSignatureHash($n->getStringValue()),
            'signedWith' => fn(ParseNode $n) => $o->setSignedWith($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'storageResource' => fn(ParseNode $n) => $o->setStorageResource($n->getObjectValue([AzureResourceEvidence::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the permissions property value. All permissions granted to this SAS.
     * @return array<string>|null
    */
    public function getPermissions(): ?array {
        $val = $this->getBackingStore()->get('permissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissions'");
    }

    /**
     * Gets the protocol property value. The protocol that is allowed with this SAS.
     * @return string|null
    */
    public function getProtocol(): ?string {
        $val = $this->getBackingStore()->get('protocol');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protocol'");
    }

    /**
     * Gets the signatureHash property value. The SAS signature hash, which is a unique identifier for each SAS.
     * @return string|null
    */
    public function getSignatureHash(): ?string {
        $val = $this->getBackingStore()->get('signatureHash');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signatureHash'");
    }

    /**
     * Gets the signedWith property value. The storage key that was used to generate the SAS.
     * @return string|null
    */
    public function getSignedWith(): ?string {
        $val = $this->getBackingStore()->get('signedWith');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signedWith'");
    }

    /**
     * Gets the startDateTime property value. The SAS activation time. This property can be null. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024 is 2024-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the storageResource property value. A link to the storage resource for this SAS.
     * @return AzureResourceEvidence|null
    */
    public function getStorageResource(): ?AzureResourceEvidence {
        $val = $this->getBackingStore()->get('storageResource');
        if (is_null($val) || $val instanceof AzureResourceEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageResource'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('allowedIpAddresses', $this->getAllowedIpAddresses());
        $writer->writeCollectionOfPrimitiveValues('allowedResourceTypes', $this->getAllowedResourceTypes());
        $writer->writeCollectionOfPrimitiveValues('allowedServices', $this->getAllowedServices());
        $writer->writeDateTimeValue('expiryDateTime', $this->getExpiryDateTime());
        $writer->writeCollectionOfPrimitiveValues('permissions', $this->getPermissions());
        $writer->writeStringValue('protocol', $this->getProtocol());
        $writer->writeStringValue('signatureHash', $this->getSignatureHash());
        $writer->writeStringValue('signedWith', $this->getSignedWith());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeObjectValue('storageResource', $this->getStorageResource());
    }

    /**
     * Sets the allowedIpAddresses property value. All IP addresses accessible with this SAS. The default value is Allows all IP addresses.
     * @param string|null $value Value to set for the allowedIpAddresses property.
    */
    public function setAllowedIpAddresses(?string $value): void {
        $this->getBackingStore()->set('allowedIpAddresses', $value);
    }

    /**
     * Sets the allowedResourceTypes property value. All resource types accessible with this SAS.
     * @param array<string>|null $value Value to set for the allowedResourceTypes property.
    */
    public function setAllowedResourceTypes(?array $value): void {
        $this->getBackingStore()->set('allowedResourceTypes', $value);
    }

    /**
     * Sets the allowedServices property value. All services accessible with this SAS.
     * @param array<string>|null $value Value to set for the allowedServices property.
    */
    public function setAllowedServices(?array $value): void {
        $this->getBackingStore()->set('allowedServices', $value);
    }

    /**
     * Sets the expiryDateTime property value. The SAS expiration time. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024 is 2024-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the expiryDateTime property.
    */
    public function setExpiryDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expiryDateTime', $value);
    }

    /**
     * Sets the permissions property value. All permissions granted to this SAS.
     * @param array<string>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->getBackingStore()->set('permissions', $value);
    }

    /**
     * Sets the protocol property value. The protocol that is allowed with this SAS.
     * @param string|null $value Value to set for the protocol property.
    */
    public function setProtocol(?string $value): void {
        $this->getBackingStore()->set('protocol', $value);
    }

    /**
     * Sets the signatureHash property value. The SAS signature hash, which is a unique identifier for each SAS.
     * @param string|null $value Value to set for the signatureHash property.
    */
    public function setSignatureHash(?string $value): void {
        $this->getBackingStore()->set('signatureHash', $value);
    }

    /**
     * Sets the signedWith property value. The storage key that was used to generate the SAS.
     * @param string|null $value Value to set for the signedWith property.
    */
    public function setSignedWith(?string $value): void {
        $this->getBackingStore()->set('signedWith', $value);
    }

    /**
     * Sets the startDateTime property value. The SAS activation time. This property can be null. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024 is 2024-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the storageResource property value. A link to the storage resource for this SAS.
     * @param AzureResourceEvidence|null $value Value to set for the storageResource property.
    */
    public function setStorageResource(?AzureResourceEvidence $value): void {
        $this->getBackingStore()->set('storageResource', $value);
    }

}
