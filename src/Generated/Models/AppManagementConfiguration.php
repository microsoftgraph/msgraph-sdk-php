<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AppManagementConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AppManagementConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppManagementConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppManagementConfiguration {
        return new AppManagementConfiguration();
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
            'keyCredentials' => fn(ParseNode $n) => $o->setKeyCredentials($n->getCollectionOfObjectValues([KeyCredentialConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'passwordCredentials' => fn(ParseNode $n) => $o->setPasswordCredentials($n->getCollectionOfObjectValues([PasswordCredentialConfiguration::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the keyCredentials property value. Collection of keyCredential restrictions settings to be applied to an application or service principal.
     * @return array<KeyCredentialConfiguration>|null
    */
    public function getKeyCredentials(): ?array {
        $val = $this->getBackingStore()->get('keyCredentials');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyCredentialConfiguration::class);
            /** @var array<KeyCredentialConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyCredentials'");
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
     * Gets the passwordCredentials property value. Collection of password restrictions settings to be applied to an application or service principal.
     * @return array<PasswordCredentialConfiguration>|null
    */
    public function getPasswordCredentials(): ?array {
        $val = $this->getBackingStore()->get('passwordCredentials');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PasswordCredentialConfiguration::class);
            /** @var array<PasswordCredentialConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordCredentials'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('keyCredentials', $this->getKeyCredentials());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('passwordCredentials', $this->getPasswordCredentials());
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
     * Sets the keyCredentials property value. Collection of keyCredential restrictions settings to be applied to an application or service principal.
     * @param array<KeyCredentialConfiguration>|null $value Value to set for the keyCredentials property.
    */
    public function setKeyCredentials(?array $value): void {
        $this->getBackingStore()->set('keyCredentials', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the passwordCredentials property value. Collection of password restrictions settings to be applied to an application or service principal.
     * @param array<PasswordCredentialConfiguration>|null $value Value to set for the passwordCredentials property.
    */
    public function setPasswordCredentials(?array $value): void {
        $this->getBackingStore()->set('passwordCredentials', $value);
    }

}
