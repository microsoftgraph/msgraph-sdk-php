<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosMinimumOperatingSystem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $v10_0 Version 10.0 or later.
    */
    private ?bool $v10_0 = null;
    
    /**
     * @var bool|null $v11_0 Version 11.0 or later.
    */
    private ?bool $v11_0 = null;
    
    /**
     * @var bool|null $v12_0 Version 12.0 or later.
    */
    private ?bool $v12_0 = null;
    
    /**
     * @var bool|null $v13_0 Version 13.0 or later.
    */
    private ?bool $v13_0 = null;
    
    /**
     * @var bool|null $v14_0 Version 14.0 or later.
    */
    private ?bool $v14_0 = null;
    
    /**
     * @var bool|null $v8_0 Version 8.0 or later.
    */
    private ?bool $v8_0 = null;
    
    /**
     * @var bool|null $v9_0 Version 9.0 or later.
    */
    private ?bool $v9_0 = null;
    
    /**
     * Instantiates a new iosMinimumOperatingSystem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.iosMinimumOperatingSystem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosMinimumOperatingSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosMinimumOperatingSystem {
        return new IosMinimumOperatingSystem();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'v10_0' => function (ParseNode $n) use ($o) { $o->setV10_0($n->getBooleanValue()); },
            'v11_0' => function (ParseNode $n) use ($o) { $o->setV11_0($n->getBooleanValue()); },
            'v12_0' => function (ParseNode $n) use ($o) { $o->setV12_0($n->getBooleanValue()); },
            'v13_0' => function (ParseNode $n) use ($o) { $o->setV13_0($n->getBooleanValue()); },
            'v14_0' => function (ParseNode $n) use ($o) { $o->setV14_0($n->getBooleanValue()); },
            'v8_0' => function (ParseNode $n) use ($o) { $o->setV8_0($n->getBooleanValue()); },
            'v9_0' => function (ParseNode $n) use ($o) { $o->setV9_0($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the v10_0 property value. Version 10.0 or later.
     * @return bool|null
    */
    public function getV10_0(): ?bool {
        return $this->v10_0;
    }

    /**
     * Gets the v11_0 property value. Version 11.0 or later.
     * @return bool|null
    */
    public function getV11_0(): ?bool {
        return $this->v11_0;
    }

    /**
     * Gets the v12_0 property value. Version 12.0 or later.
     * @return bool|null
    */
    public function getV12_0(): ?bool {
        return $this->v12_0;
    }

    /**
     * Gets the v13_0 property value. Version 13.0 or later.
     * @return bool|null
    */
    public function getV13_0(): ?bool {
        return $this->v13_0;
    }

    /**
     * Gets the v14_0 property value. Version 14.0 or later.
     * @return bool|null
    */
    public function getV14_0(): ?bool {
        return $this->v14_0;
    }

    /**
     * Gets the v8_0 property value. Version 8.0 or later.
     * @return bool|null
    */
    public function getV8_0(): ?bool {
        return $this->v8_0;
    }

    /**
     * Gets the v9_0 property value. Version 9.0 or later.
     * @return bool|null
    */
    public function getV9_0(): ?bool {
        return $this->v9_0;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('v10_0', $this->v10_0);
        $writer->writeBooleanValue('v11_0', $this->v11_0);
        $writer->writeBooleanValue('v12_0', $this->v12_0);
        $writer->writeBooleanValue('v13_0', $this->v13_0);
        $writer->writeBooleanValue('v14_0', $this->v14_0);
        $writer->writeBooleanValue('v8_0', $this->v8_0);
        $writer->writeBooleanValue('v9_0', $this->v9_0);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the v10_0 property value. Version 10.0 or later.
     *  @param bool|null $value Value to set for the v10_0 property.
    */
    public function setV10_0(?bool $value ): void {
        $this->v10_0 = $value;
    }

    /**
     * Sets the v11_0 property value. Version 11.0 or later.
     *  @param bool|null $value Value to set for the v11_0 property.
    */
    public function setV11_0(?bool $value ): void {
        $this->v11_0 = $value;
    }

    /**
     * Sets the v12_0 property value. Version 12.0 or later.
     *  @param bool|null $value Value to set for the v12_0 property.
    */
    public function setV12_0(?bool $value ): void {
        $this->v12_0 = $value;
    }

    /**
     * Sets the v13_0 property value. Version 13.0 or later.
     *  @param bool|null $value Value to set for the v13_0 property.
    */
    public function setV13_0(?bool $value ): void {
        $this->v13_0 = $value;
    }

    /**
     * Sets the v14_0 property value. Version 14.0 or later.
     *  @param bool|null $value Value to set for the v14_0 property.
    */
    public function setV14_0(?bool $value ): void {
        $this->v14_0 = $value;
    }

    /**
     * Sets the v8_0 property value. Version 8.0 or later.
     *  @param bool|null $value Value to set for the v8_0 property.
    */
    public function setV8_0(?bool $value ): void {
        $this->v8_0 = $value;
    }

    /**
     * Sets the v9_0 property value. Version 9.0 or later.
     *  @param bool|null $value Value to set for the v9_0 property.
    */
    public function setV9_0(?bool $value ): void {
        $this->v9_0 = $value;
    }

}
