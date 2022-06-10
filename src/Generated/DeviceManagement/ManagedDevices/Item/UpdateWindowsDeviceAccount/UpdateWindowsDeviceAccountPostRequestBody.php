<?php

namespace Microsoft\Graph\DeviceManagement\ManagedDevices\Item\UpdateWindowsDeviceAccount;

use Microsoft\Graph\Models\UpdateWindowsDeviceAccountActionParameter;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateWindowsDeviceAccountPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var UpdateWindowsDeviceAccountActionParameter|null $updateWindowsDeviceAccountActionParameter The updateWindowsDeviceAccountActionParameter property
    */
    private ?UpdateWindowsDeviceAccountActionParameter $updateWindowsDeviceAccountActionParameter = null;
    
    /**
     * Instantiates a new updateWindowsDeviceAccountPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'updateWindowsDeviceAccountActionParameter' => function (ParseNode $n) use ($o) { $o->setUpdateWindowsDeviceAccountActionParameter($n->getObjectValue(array(UpdateWindowsDeviceAccountActionParameter::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the updateWindowsDeviceAccountActionParameter property value. The updateWindowsDeviceAccountActionParameter property
     * @return UpdateWindowsDeviceAccountActionParameter|null
    */
    public function getUpdateWindowsDeviceAccountActionParameter(): ?UpdateWindowsDeviceAccountActionParameter {
        return $this->updateWindowsDeviceAccountActionParameter;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('updateWindowsDeviceAccountActionParameter', $this->updateWindowsDeviceAccountActionParameter);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the updateWindowsDeviceAccountActionParameter property value. The updateWindowsDeviceAccountActionParameter property
     *  @param UpdateWindowsDeviceAccountActionParameter|null $value Value to set for the updateWindowsDeviceAccountActionParameter property.
    */
    public function setUpdateWindowsDeviceAccountActionParameter(?UpdateWindowsDeviceAccountActionParameter $value ): void {
        $this->updateWindowsDeviceAccountActionParameter = $value;
    }

}
