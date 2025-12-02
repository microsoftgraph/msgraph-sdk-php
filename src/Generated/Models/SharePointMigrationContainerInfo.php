<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SharePointMigrationContainerInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SharePointMigrationContainerInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationContainerInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationContainerInfo {
        return new SharePointMigrationContainerInfo();
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
     * Gets the dataContainerUri property value. A valid URL with a SAS token for accessing the Azure blob storage container that contains the file content. Read-only.
     * @return string|null
    */
    public function getDataContainerUri(): ?string {
        $val = $this->getBackingStore()->get('dataContainerUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataContainerUri'");
    }

    /**
     * Gets the encryptionKey property value. Provides the AES-256-CBC encryption key if files stored in Azure blob containers are encrypted. The key is Base64-encoded. Read-only.
     * @return string|null
    */
    public function getEncryptionKey(): ?string {
        $val = $this->getBackingStore()->get('encryptionKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptionKey'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataContainerUri' => fn(ParseNode $n) => $o->setDataContainerUri($n->getStringValue()),
            'encryptionKey' => fn(ParseNode $n) => $o->setEncryptionKey($n->getStringValue()),
            'metadataContainerUri' => fn(ParseNode $n) => $o->setMetadataContainerUri($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the metadataContainerUri property value. A valid URL with a SAS token for accessing the Azure blob storage container that contains the file metadata. Read-only.
     * @return string|null
    */
    public function getMetadataContainerUri(): ?string {
        $val = $this->getBackingStore()->get('metadataContainerUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metadataContainerUri'");
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
        $writer->writeStringValue('dataContainerUri', $this->getDataContainerUri());
        $writer->writeStringValue('encryptionKey', $this->getEncryptionKey());
        $writer->writeStringValue('metadataContainerUri', $this->getMetadataContainerUri());
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
     * Sets the dataContainerUri property value. A valid URL with a SAS token for accessing the Azure blob storage container that contains the file content. Read-only.
     * @param string|null $value Value to set for the dataContainerUri property.
    */
    public function setDataContainerUri(?string $value): void {
        $this->getBackingStore()->set('dataContainerUri', $value);
    }

    /**
     * Sets the encryptionKey property value. Provides the AES-256-CBC encryption key if files stored in Azure blob containers are encrypted. The key is Base64-encoded. Read-only.
     * @param string|null $value Value to set for the encryptionKey property.
    */
    public function setEncryptionKey(?string $value): void {
        $this->getBackingStore()->set('encryptionKey', $value);
    }

    /**
     * Sets the metadataContainerUri property value. A valid URL with a SAS token for accessing the Azure blob storage container that contains the file metadata. Read-only.
     * @param string|null $value Value to set for the metadataContainerUri property.
    */
    public function setMetadataContainerUri(?string $value): void {
        $this->getBackingStore()->set('metadataContainerUri', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
