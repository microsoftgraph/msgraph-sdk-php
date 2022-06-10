<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VppLicensingType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $supportsDeviceLicensing Whether the program supports the device licensing type.
    */
    private ?bool $supportsDeviceLicensing = null;
    
    /**
     * @var bool|null $supportsUserLicensing Whether the program supports the user licensing type.
    */
    private ?bool $supportsUserLicensing = null;
    
    /**
     * Instantiates a new vppLicensingType and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VppLicensingType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VppLicensingType {
        return new VppLicensingType();
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
            'supportsDeviceLicensing' => function (ParseNode $n) use ($o) { $o->setSupportsDeviceLicensing($n->getBooleanValue()); },
            'supportsUserLicensing' => function (ParseNode $n) use ($o) { $o->setSupportsUserLicensing($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the supportsDeviceLicensing property value. Whether the program supports the device licensing type.
     * @return bool|null
    */
    public function getSupportsDeviceLicensing(): ?bool {
        return $this->supportsDeviceLicensing;
    }

    /**
     * Gets the supportsUserLicensing property value. Whether the program supports the user licensing type.
     * @return bool|null
    */
    public function getSupportsUserLicensing(): ?bool {
        return $this->supportsUserLicensing;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('supportsDeviceLicensing', $this->supportsDeviceLicensing);
        $writer->writeBooleanValue('supportsUserLicensing', $this->supportsUserLicensing);
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
     * Sets the supportsDeviceLicensing property value. Whether the program supports the device licensing type.
     *  @param bool|null $value Value to set for the supportsDeviceLicensing property.
    */
    public function setSupportsDeviceLicensing(?bool $value ): void {
        $this->supportsDeviceLicensing = $value;
    }

    /**
     * Sets the supportsUserLicensing property value. Whether the program supports the user licensing type.
     *  @param bool|null $value Value to set for the supportsUserLicensing property.
    */
    public function setSupportsUserLicensing(?bool $value ): void {
        $this->supportsUserLicensing = $value;
    }

}
