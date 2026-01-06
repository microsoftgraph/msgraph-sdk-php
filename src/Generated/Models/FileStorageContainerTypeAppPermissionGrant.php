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

class FileStorageContainerTypeAppPermissionGrant implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new FileStorageContainerTypeAppPermissionGrant and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileStorageContainerTypeAppPermissionGrant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileStorageContainerTypeAppPermissionGrant {
        return new FileStorageContainerTypeAppPermissionGrant();
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
     * Gets the appId property value. Application ID to which to set permissions.
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the applicationPermissions property value. Allowed permissions when you use delegated tokens. The possible values are: none, readContent, writeContent, manageContent, create, delete, read, write, enumeratePermissions, addPermissions, updatePermissions, deletePermissions, deleteOwnPermission, managePermissions, full, unknownFutureValue.
     * @return array<FileStorageContainerTypeAppPermission>|null
    */
    public function getApplicationPermissions(): ?array {
        $val = $this->getBackingStore()->get('applicationPermissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileStorageContainerTypeAppPermission::class);
            /** @var array<FileStorageContainerTypeAppPermission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationPermissions'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the delegatedPermissions property value. Allowed permissions when you use application tokens. The possible values are: none, readContent, writeContent, manageContent, create, delete, read, write, enumeratePermissions, addPermissions, updatePermissions, deletePermissions, deleteOwnPermission, managePermissions, full, unknownFutureValue.
     * @return array<FileStorageContainerTypeAppPermission>|null
    */
    public function getDelegatedPermissions(): ?array {
        $val = $this->getBackingStore()->get('delegatedPermissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileStorageContainerTypeAppPermission::class);
            /** @var array<FileStorageContainerTypeAppPermission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegatedPermissions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'applicationPermissions' => fn(ParseNode $n) => $o->setApplicationPermissions($n->getCollectionOfEnumValues(FileStorageContainerTypeAppPermission::class)),
            'delegatedPermissions' => fn(ParseNode $n) => $o->setDelegatedPermissions($n->getCollectionOfEnumValues(FileStorageContainerTypeAppPermission::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeCollectionOfEnumValues('applicationPermissions', $this->getApplicationPermissions());
        $writer->writeCollectionOfEnumValues('delegatedPermissions', $this->getDelegatedPermissions());
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
     * Sets the appId property value. Application ID to which to set permissions.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the applicationPermissions property value. Allowed permissions when you use delegated tokens. The possible values are: none, readContent, writeContent, manageContent, create, delete, read, write, enumeratePermissions, addPermissions, updatePermissions, deletePermissions, deleteOwnPermission, managePermissions, full, unknownFutureValue.
     * @param array<FileStorageContainerTypeAppPermission>|null $value Value to set for the applicationPermissions property.
    */
    public function setApplicationPermissions(?array $value): void {
        $this->getBackingStore()->set('applicationPermissions', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the delegatedPermissions property value. Allowed permissions when you use application tokens. The possible values are: none, readContent, writeContent, manageContent, create, delete, read, write, enumeratePermissions, addPermissions, updatePermissions, deletePermissions, deleteOwnPermission, managePermissions, full, unknownFutureValue.
     * @param array<FileStorageContainerTypeAppPermission>|null $value Value to set for the delegatedPermissions property.
    */
    public function setDelegatedPermissions(?array $value): void {
        $this->getBackingStore()->set('delegatedPermissions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
