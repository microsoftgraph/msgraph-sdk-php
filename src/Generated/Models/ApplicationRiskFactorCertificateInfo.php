<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApplicationRiskFactorCertificateInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplicationRiskFactorCertificateInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationRiskFactorCertificateInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationRiskFactorCertificateInfo {
        return new ApplicationRiskFactorCertificateInfo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hasBadCommonName' => fn(ParseNode $n) => $o->setHasBadCommonName($n->getBooleanValue()),
            'hasInsecureSignature' => fn(ParseNode $n) => $o->setHasInsecureSignature($n->getBooleanValue()),
            'hasNoChainOfTrust' => fn(ParseNode $n) => $o->setHasNoChainOfTrust($n->getBooleanValue()),
            'isDenylisted' => fn(ParseNode $n) => $o->setIsDenylisted($n->getBooleanValue()),
            'isHostnameMismatch' => fn(ParseNode $n) => $o->setIsHostnameMismatch($n->getBooleanValue()),
            'isNotAfter' => fn(ParseNode $n) => $o->setIsNotAfter($n->getBooleanValue()),
            'isNotBefore' => fn(ParseNode $n) => $o->setIsNotBefore($n->getBooleanValue()),
            'isRevoked' => fn(ParseNode $n) => $o->setIsRevoked($n->getBooleanValue()),
            'isSelfSigned' => fn(ParseNode $n) => $o->setIsSelfSigned($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the hasBadCommonName property value. Indicates whether the certificate's common name doesn't match the expected domain name.
     * @return bool|null
    */
    public function getHasBadCommonName(): ?bool {
        $val = $this->getBackingStore()->get('hasBadCommonName');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasBadCommonName'");
    }

    /**
     * Gets the hasInsecureSignature property value. Indicates whether the certificate uses a weak or insecure signature algorithm (for example, MD5 or SHA-1).
     * @return bool|null
    */
    public function getHasInsecureSignature(): ?bool {
        $val = $this->getBackingStore()->get('hasInsecureSignature');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasInsecureSignature'");
    }

    /**
     * Gets the hasNoChainOfTrust property value. Indicates whether the certificate chain of trust is incomplete or invalid.
     * @return bool|null
    */
    public function getHasNoChainOfTrust(): ?bool {
        $val = $this->getBackingStore()->get('hasNoChainOfTrust');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasNoChainOfTrust'");
    }

    /**
     * Gets the isDenylisted property value. Indicates whether the certificate is on a known denylist or associated with compromised issuers.
     * @return bool|null
    */
    public function getIsDenylisted(): ?bool {
        $val = $this->getBackingStore()->get('isDenylisted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDenylisted'");
    }

    /**
     * Gets the isHostnameMismatch property value. Indicates whether the certificate's hostname doesn't match the domain it was issued for.
     * @return bool|null
    */
    public function getIsHostnameMismatch(): ?bool {
        $val = $this->getBackingStore()->get('isHostnameMismatch');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHostnameMismatch'");
    }

    /**
     * Gets the isNotAfter property value. Indicates whether the certificate is expired and no longer valid.
     * @return bool|null
    */
    public function getIsNotAfter(): ?bool {
        $val = $this->getBackingStore()->get('isNotAfter');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isNotAfter'");
    }

    /**
     * Gets the isNotBefore property value. Indicates whether the certificate isn't yet valid based on its activation date.
     * @return bool|null
    */
    public function getIsNotBefore(): ?bool {
        $val = $this->getBackingStore()->get('isNotBefore');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isNotBefore'");
    }

    /**
     * Gets the isRevoked property value. Indicates whether the issuing certificate authority revoked the certificate.
     * @return bool|null
    */
    public function getIsRevoked(): ?bool {
        $val = $this->getBackingStore()->get('isRevoked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRevoked'");
    }

    /**
     * Gets the isSelfSigned property value. Indicates whether the certificate is self-signed rather than issued by a trusted certificate authority.
     * @return bool|null
    */
    public function getIsSelfSigned(): ?bool {
        $val = $this->getBackingStore()->get('isSelfSigned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSelfSigned'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('hasBadCommonName', $this->getHasBadCommonName());
        $writer->writeBooleanValue('hasInsecureSignature', $this->getHasInsecureSignature());
        $writer->writeBooleanValue('hasNoChainOfTrust', $this->getHasNoChainOfTrust());
        $writer->writeBooleanValue('isDenylisted', $this->getIsDenylisted());
        $writer->writeBooleanValue('isHostnameMismatch', $this->getIsHostnameMismatch());
        $writer->writeBooleanValue('isNotAfter', $this->getIsNotAfter());
        $writer->writeBooleanValue('isNotBefore', $this->getIsNotBefore());
        $writer->writeBooleanValue('isRevoked', $this->getIsRevoked());
        $writer->writeBooleanValue('isSelfSigned', $this->getIsSelfSigned());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the hasBadCommonName property value. Indicates whether the certificate's common name doesn't match the expected domain name.
     * @param bool|null $value Value to set for the hasBadCommonName property.
    */
    public function setHasBadCommonName(?bool $value): void {
        $this->getBackingStore()->set('hasBadCommonName', $value);
    }

    /**
     * Sets the hasInsecureSignature property value. Indicates whether the certificate uses a weak or insecure signature algorithm (for example, MD5 or SHA-1).
     * @param bool|null $value Value to set for the hasInsecureSignature property.
    */
    public function setHasInsecureSignature(?bool $value): void {
        $this->getBackingStore()->set('hasInsecureSignature', $value);
    }

    /**
     * Sets the hasNoChainOfTrust property value. Indicates whether the certificate chain of trust is incomplete or invalid.
     * @param bool|null $value Value to set for the hasNoChainOfTrust property.
    */
    public function setHasNoChainOfTrust(?bool $value): void {
        $this->getBackingStore()->set('hasNoChainOfTrust', $value);
    }

    /**
     * Sets the isDenylisted property value. Indicates whether the certificate is on a known denylist or associated with compromised issuers.
     * @param bool|null $value Value to set for the isDenylisted property.
    */
    public function setIsDenylisted(?bool $value): void {
        $this->getBackingStore()->set('isDenylisted', $value);
    }

    /**
     * Sets the isHostnameMismatch property value. Indicates whether the certificate's hostname doesn't match the domain it was issued for.
     * @param bool|null $value Value to set for the isHostnameMismatch property.
    */
    public function setIsHostnameMismatch(?bool $value): void {
        $this->getBackingStore()->set('isHostnameMismatch', $value);
    }

    /**
     * Sets the isNotAfter property value. Indicates whether the certificate is expired and no longer valid.
     * @param bool|null $value Value to set for the isNotAfter property.
    */
    public function setIsNotAfter(?bool $value): void {
        $this->getBackingStore()->set('isNotAfter', $value);
    }

    /**
     * Sets the isNotBefore property value. Indicates whether the certificate isn't yet valid based on its activation date.
     * @param bool|null $value Value to set for the isNotBefore property.
    */
    public function setIsNotBefore(?bool $value): void {
        $this->getBackingStore()->set('isNotBefore', $value);
    }

    /**
     * Sets the isRevoked property value. Indicates whether the issuing certificate authority revoked the certificate.
     * @param bool|null $value Value to set for the isRevoked property.
    */
    public function setIsRevoked(?bool $value): void {
        $this->getBackingStore()->set('isRevoked', $value);
    }

    /**
     * Sets the isSelfSigned property value. Indicates whether the certificate is self-signed rather than issued by a trusted certificate authority.
     * @param bool|null $value Value to set for the isSelfSigned property.
    */
    public function setIsSelfSigned(?bool $value): void {
        $this->getBackingStore()->set('isSelfSigned', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
