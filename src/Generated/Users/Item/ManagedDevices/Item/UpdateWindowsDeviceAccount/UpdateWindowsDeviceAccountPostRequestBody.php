<?php

namespace Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\UpdateWindowsDeviceAccount;

use Microsoft\Graph\Generated\Models\UpdateWindowsDeviceAccountActionParameter;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateWindowsDeviceAccountPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new updateWindowsDeviceAccountPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateWindowsDeviceAccountPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateWindowsDeviceAccountPostRequestBody {
        return new UpdateWindowsDeviceAccountPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'updateWindowsDeviceAccountActionParameter' => fn(ParseNode $n) => $o->setUpdateWindowsDeviceAccountActionParameter($n->getObjectValue([UpdateWindowsDeviceAccountActionParameter::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the updateWindowsDeviceAccountActionParameter property value. The updateWindowsDeviceAccountActionParameter property
     * @return UpdateWindowsDeviceAccountActionParameter|null
    */
    public function getUpdateWindowsDeviceAccountActionParameter(): ?UpdateWindowsDeviceAccountActionParameter {
        return $this->getBackingStore()->get('updateWindowsDeviceAccountActionParameter');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('updateWindowsDeviceAccountActionParameter', $this->getUpdateWindowsDeviceAccountActionParameter());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the updateWindowsDeviceAccountActionParameter property value. The updateWindowsDeviceAccountActionParameter property
     *  @param UpdateWindowsDeviceAccountActionParameter|null $value Value to set for the updateWindowsDeviceAccountActionParameter property.
    */
    public function setUpdateWindowsDeviceAccountActionParameter(?UpdateWindowsDeviceAccountActionParameter $value): void {
        $this->getBackingStore()->set('updateWindowsDeviceAccountActionParameter', $value);
    }

}
