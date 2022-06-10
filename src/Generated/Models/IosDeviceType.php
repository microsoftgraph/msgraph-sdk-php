<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosDeviceType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $iPad Whether the app should run on iPads.
    */
    private ?bool $iPad = null;
    
    /**
     * @var bool|null $iPhoneAndIPod Whether the app should run on iPhones and iPods.
    */
    private ?bool $iPhoneAndIPod = null;
    
    /**
     * Instantiates a new iosDeviceType and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosDeviceType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosDeviceType {
        return new IosDeviceType();
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
            'iPad' => function (ParseNode $n) use ($o) { $o->setIPad($n->getBooleanValue()); },
            'iPhoneAndIPod' => function (ParseNode $n) use ($o) { $o->setIPhoneAndIPod($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the iPad property value. Whether the app should run on iPads.
     * @return bool|null
    */
    public function getIPad(): ?bool {
        return $this->iPad;
    }

    /**
     * Gets the iPhoneAndIPod property value. Whether the app should run on iPhones and iPods.
     * @return bool|null
    */
    public function getIPhoneAndIPod(): ?bool {
        return $this->iPhoneAndIPod;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('iPad', $this->iPad);
        $writer->writeBooleanValue('iPhoneAndIPod', $this->iPhoneAndIPod);
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
     * Sets the iPad property value. Whether the app should run on iPads.
     *  @param bool|null $value Value to set for the iPad property.
    */
    public function setIPad(?bool $value ): void {
        $this->iPad = $value;
    }

    /**
     * Sets the iPhoneAndIPod property value. Whether the app should run on iPhones and iPods.
     *  @param bool|null $value Value to set for the iPhoneAndIPod property.
    */
    public function setIPhoneAndIPod(?bool $value ): void {
        $this->iPhoneAndIPod = $value;
    }

}
