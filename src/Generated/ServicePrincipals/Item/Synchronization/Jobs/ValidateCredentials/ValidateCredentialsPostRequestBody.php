<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\Synchronization\Jobs\ValidateCredentials;

use Microsoft\Graph\Generated\Models\SynchronizationSecretKeyStringValuePair;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ValidateCredentialsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new validateCredentialsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidateCredentialsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidateCredentialsPostRequestBody {
        return new ValidateCredentialsPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the applicationIdentifier property value. The applicationIdentifier property
     * @return string|null
    */
    public function getApplicationIdentifier(): ?string {
        $val = $this->getBackingStore()->get('applicationIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationIdentifier'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the credentials property value. The credentials property
     * @return array<SynchronizationSecretKeyStringValuePair>|null
    */
    public function getCredentials(): ?array {
        $val = $this->getBackingStore()->get('credentials');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SynchronizationSecretKeyStringValuePair::class);
            /** @var array<SynchronizationSecretKeyStringValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'credentials'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationIdentifier' => fn(ParseNode $n) => $o->setApplicationIdentifier($n->getStringValue()),
            'credentials' => fn(ParseNode $n) => $o->setCredentials($n->getCollectionOfObjectValues([SynchronizationSecretKeyStringValuePair::class, 'createFromDiscriminatorValue'])),
            'templateId' => fn(ParseNode $n) => $o->setTemplateId($n->getStringValue()),
            'useSavedCredentials' => fn(ParseNode $n) => $o->setUseSavedCredentials($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the templateId property value. The templateId property
     * @return string|null
    */
    public function getTemplateId(): ?string {
        $val = $this->getBackingStore()->get('templateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateId'");
    }

    /**
     * Gets the useSavedCredentials property value. The useSavedCredentials property
     * @return bool|null
    */
    public function getUseSavedCredentials(): ?bool {
        $val = $this->getBackingStore()->get('useSavedCredentials');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useSavedCredentials'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationIdentifier', $this->getApplicationIdentifier());
        $writer->writeCollectionOfObjectValues('credentials', $this->getCredentials());
        $writer->writeStringValue('templateId', $this->getTemplateId());
        $writer->writeBooleanValue('useSavedCredentials', $this->getUseSavedCredentials());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applicationIdentifier property value. The applicationIdentifier property
     * @param string|null $value Value to set for the applicationIdentifier property.
    */
    public function setApplicationIdentifier(?string $value): void {
        $this->getBackingStore()->set('applicationIdentifier', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the credentials property value. The credentials property
     * @param array<SynchronizationSecretKeyStringValuePair>|null $value Value to set for the credentials property.
    */
    public function setCredentials(?array $value): void {
        $this->getBackingStore()->set('credentials', $value);
    }

    /**
     * Sets the templateId property value. The templateId property
     * @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value): void {
        $this->getBackingStore()->set('templateId', $value);
    }

    /**
     * Sets the useSavedCredentials property value. The useSavedCredentials property
     * @param bool|null $value Value to set for the useSavedCredentials property.
    */
    public function setUseSavedCredentials(?bool $value): void {
        $this->getBackingStore()->set('useSavedCredentials', $value);
    }

}
