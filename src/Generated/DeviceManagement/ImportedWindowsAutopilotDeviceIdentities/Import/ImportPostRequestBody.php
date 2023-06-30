<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\Import;

use Microsoft\Graph\Generated\Models\ImportedWindowsAutopilotDeviceIdentity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ImportPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new importPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportPostRequestBody {
        return new ImportPostRequestBody();
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
     * Gets the backingStore property value. Stores model information.
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
            'importedWindowsAutopilotDeviceIdentities' => fn(ParseNode $n) => $o->setImportedWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues([ImportedWindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the importedWindowsAutopilotDeviceIdentities property value. The importedWindowsAutopilotDeviceIdentities property
     * @return array<ImportedWindowsAutopilotDeviceIdentity>|null
    */
    public function getImportedWindowsAutopilotDeviceIdentities(): ?array {
        $val = $this->getBackingStore()->get('importedWindowsAutopilotDeviceIdentities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ImportedWindowsAutopilotDeviceIdentity::class);
            /** @var array<ImportedWindowsAutopilotDeviceIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importedWindowsAutopilotDeviceIdentities'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('importedWindowsAutopilotDeviceIdentities', $this->getImportedWindowsAutopilotDeviceIdentities());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the importedWindowsAutopilotDeviceIdentities property value. The importedWindowsAutopilotDeviceIdentities property
     * @param array<ImportedWindowsAutopilotDeviceIdentity>|null $value Value to set for the importedWindowsAutopilotDeviceIdentities property.
    */
    public function setImportedWindowsAutopilotDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('importedWindowsAutopilotDeviceIdentities', $value);
    }

}
