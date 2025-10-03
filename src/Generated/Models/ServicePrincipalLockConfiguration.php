<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ServicePrincipalLockConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ServicePrincipalLockConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServicePrincipalLockConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServicePrincipalLockConfiguration {
        return new ServicePrincipalLockConfiguration();
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
     * Gets the allProperties property value. Enables locking all sensitive properties. The sensitive properties are keyCredentials, passwordCredentials, and tokenEncryptionKeyId.
     * @return bool|null
    */
    public function getAllProperties(): ?bool {
        $val = $this->getBackingStore()->get('allProperties');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allProperties'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the credentialsWithUsageSign property value. Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Sign.
     * @return bool|null
    */
    public function getCredentialsWithUsageSign(): ?bool {
        $val = $this->getBackingStore()->get('credentialsWithUsageSign');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'credentialsWithUsageSign'");
    }

    /**
     * Gets the credentialsWithUsageVerify property value. Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Verify. This locks OAuth service principals.
     * @return bool|null
    */
    public function getCredentialsWithUsageVerify(): ?bool {
        $val = $this->getBackingStore()->get('credentialsWithUsageVerify');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'credentialsWithUsageVerify'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allProperties' => fn(ParseNode $n) => $o->setAllProperties($n->getBooleanValue()),
            'credentialsWithUsageSign' => fn(ParseNode $n) => $o->setCredentialsWithUsageSign($n->getBooleanValue()),
            'credentialsWithUsageVerify' => fn(ParseNode $n) => $o->setCredentialsWithUsageVerify($n->getBooleanValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tokenEncryptionKeyId' => fn(ParseNode $n) => $o->setTokenEncryptionKeyId($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the isEnabled property value. Enables or disables service principal lock configuration. To allow the sensitive properties to be updated, update this property to false to disable the lock on the service principal.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
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
     * Gets the tokenEncryptionKeyId property value. Locks the tokenEncryptionKeyId property for modification on the service principal.
     * @return bool|null
    */
    public function getTokenEncryptionKeyId(): ?bool {
        $val = $this->getBackingStore()->get('tokenEncryptionKeyId');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenEncryptionKeyId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allProperties', $this->getAllProperties());
        $writer->writeBooleanValue('credentialsWithUsageSign', $this->getCredentialsWithUsageSign());
        $writer->writeBooleanValue('credentialsWithUsageVerify', $this->getCredentialsWithUsageVerify());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('tokenEncryptionKeyId', $this->getTokenEncryptionKeyId());
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
     * Sets the allProperties property value. Enables locking all sensitive properties. The sensitive properties are keyCredentials, passwordCredentials, and tokenEncryptionKeyId.
     * @param bool|null $value Value to set for the allProperties property.
    */
    public function setAllProperties(?bool $value): void {
        $this->getBackingStore()->set('allProperties', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the credentialsWithUsageSign property value. Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Sign.
     * @param bool|null $value Value to set for the credentialsWithUsageSign property.
    */
    public function setCredentialsWithUsageSign(?bool $value): void {
        $this->getBackingStore()->set('credentialsWithUsageSign', $value);
    }

    /**
     * Sets the credentialsWithUsageVerify property value. Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Verify. This locks OAuth service principals.
     * @param bool|null $value Value to set for the credentialsWithUsageVerify property.
    */
    public function setCredentialsWithUsageVerify(?bool $value): void {
        $this->getBackingStore()->set('credentialsWithUsageVerify', $value);
    }

    /**
     * Sets the isEnabled property value. Enables or disables service principal lock configuration. To allow the sensitive properties to be updated, update this property to false to disable the lock on the service principal.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tokenEncryptionKeyId property value. Locks the tokenEncryptionKeyId property for modification on the service principal.
     * @param bool|null $value Value to set for the tokenEncryptionKeyId property.
    */
    public function setTokenEncryptionKeyId(?bool $value): void {
        $this->getBackingStore()->set('tokenEncryptionKeyId', $value);
    }

}
