<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSMinimumOperatingSystem implements AdditionalDataHolder, Parsable 
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
     * @var bool|null $v10_10 When TRUE, indicates OS X 10.10 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v10_10 = null;
    
    /**
     * @var bool|null $v10_11 When TRUE, indicates OS X 10.11 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v10_11 = null;
    
    /**
     * @var bool|null $v10_12 When TRUE, indicates macOS 10.12 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v10_12 = null;
    
    /**
     * @var bool|null $v10_13 When TRUE, indicates macOS 10.13 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v10_13 = null;
    
    /**
     * @var bool|null $v10_14 When TRUE, indicates macOS 10.14 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v10_14 = null;
    
    /**
     * @var bool|null $v10_15 When TRUE, indicates macOS 10.15 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v10_15 = null;
    
    /**
     * @var bool|null $v10_7 When TRUE, indicates Mac OS X 10.7 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v10_7 = null;
    
    /**
     * @var bool|null $v10_8 When TRUE, indicates OS X 10.8 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v10_8 = null;
    
    /**
     * @var bool|null $v10_9 When TRUE, indicates OS X 10.9 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v10_9 = null;
    
    /**
     * @var bool|null $v11_0 When TRUE, indicates macOS 11.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v11_0 = null;
    
    /**
     * @var bool|null $v12_0 When TRUE, indicates macOS 12.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v12_0 = null;
    
    /**
     * @var bool|null $v13_0 When TRUE, indicates macOS 13.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
    */
    private ?bool $v13_0 = null;
    
    /**
     * Instantiates a new macOSMinimumOperatingSystem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.macOSMinimumOperatingSystem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSMinimumOperatingSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSMinimumOperatingSystem {
        return new MacOSMinimumOperatingSystem();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'v10_10' => fn(ParseNode $n) => $o->setV10_10($n->getBooleanValue()),
            'v10_11' => fn(ParseNode $n) => $o->setV10_11($n->getBooleanValue()),
            'v10_12' => fn(ParseNode $n) => $o->setV10_12($n->getBooleanValue()),
            'v10_13' => fn(ParseNode $n) => $o->setV10_13($n->getBooleanValue()),
            'v10_14' => fn(ParseNode $n) => $o->setV10_14($n->getBooleanValue()),
            'v10_15' => fn(ParseNode $n) => $o->setV10_15($n->getBooleanValue()),
            'v10_7' => fn(ParseNode $n) => $o->setV10_7($n->getBooleanValue()),
            'v10_8' => fn(ParseNode $n) => $o->setV10_8($n->getBooleanValue()),
            'v10_9' => fn(ParseNode $n) => $o->setV10_9($n->getBooleanValue()),
            'v11_0' => fn(ParseNode $n) => $o->setV11_0($n->getBooleanValue()),
            'v12_0' => fn(ParseNode $n) => $o->setV12_0($n->getBooleanValue()),
            'v13_0' => fn(ParseNode $n) => $o->setV13_0($n->getBooleanValue()),
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
     * Gets the v10_10 property value. When TRUE, indicates OS X 10.10 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_10(): ?bool {
        return $this->v10_10;
    }

    /**
     * Gets the v10_11 property value. When TRUE, indicates OS X 10.11 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_11(): ?bool {
        return $this->v10_11;
    }

    /**
     * Gets the v10_12 property value. When TRUE, indicates macOS 10.12 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_12(): ?bool {
        return $this->v10_12;
    }

    /**
     * Gets the v10_13 property value. When TRUE, indicates macOS 10.13 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_13(): ?bool {
        return $this->v10_13;
    }

    /**
     * Gets the v10_14 property value. When TRUE, indicates macOS 10.14 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_14(): ?bool {
        return $this->v10_14;
    }

    /**
     * Gets the v10_15 property value. When TRUE, indicates macOS 10.15 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_15(): ?bool {
        return $this->v10_15;
    }

    /**
     * Gets the v10_7 property value. When TRUE, indicates Mac OS X 10.7 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_7(): ?bool {
        return $this->v10_7;
    }

    /**
     * Gets the v10_8 property value. When TRUE, indicates OS X 10.8 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_8(): ?bool {
        return $this->v10_8;
    }

    /**
     * Gets the v10_9 property value. When TRUE, indicates OS X 10.9 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_9(): ?bool {
        return $this->v10_9;
    }

    /**
     * Gets the v11_0 property value. When TRUE, indicates macOS 11.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV11_0(): ?bool {
        return $this->v11_0;
    }

    /**
     * Gets the v12_0 property value. When TRUE, indicates macOS 12.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV12_0(): ?bool {
        return $this->v12_0;
    }

    /**
     * Gets the v13_0 property value. When TRUE, indicates macOS 13.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV13_0(): ?bool {
        return $this->v13_0;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('v10_10', $this->v10_10);
        $writer->writeBooleanValue('v10_11', $this->v10_11);
        $writer->writeBooleanValue('v10_12', $this->v10_12);
        $writer->writeBooleanValue('v10_13', $this->v10_13);
        $writer->writeBooleanValue('v10_14', $this->v10_14);
        $writer->writeBooleanValue('v10_15', $this->v10_15);
        $writer->writeBooleanValue('v10_7', $this->v10_7);
        $writer->writeBooleanValue('v10_8', $this->v10_8);
        $writer->writeBooleanValue('v10_9', $this->v10_9);
        $writer->writeBooleanValue('v11_0', $this->v11_0);
        $writer->writeBooleanValue('v12_0', $this->v12_0);
        $writer->writeBooleanValue('v13_0', $this->v13_0);
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
     * Sets the v10_10 property value. When TRUE, indicates OS X 10.10 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v10_10 property.
    */
    public function setV10_10(?bool $value ): void {
        $this->v10_10 = $value;
    }

    /**
     * Sets the v10_11 property value. When TRUE, indicates OS X 10.11 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v10_11 property.
    */
    public function setV10_11(?bool $value ): void {
        $this->v10_11 = $value;
    }

    /**
     * Sets the v10_12 property value. When TRUE, indicates macOS 10.12 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v10_12 property.
    */
    public function setV10_12(?bool $value ): void {
        $this->v10_12 = $value;
    }

    /**
     * Sets the v10_13 property value. When TRUE, indicates macOS 10.13 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v10_13 property.
    */
    public function setV10_13(?bool $value ): void {
        $this->v10_13 = $value;
    }

    /**
     * Sets the v10_14 property value. When TRUE, indicates macOS 10.14 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v10_14 property.
    */
    public function setV10_14(?bool $value ): void {
        $this->v10_14 = $value;
    }

    /**
     * Sets the v10_15 property value. When TRUE, indicates macOS 10.15 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v10_15 property.
    */
    public function setV10_15(?bool $value ): void {
        $this->v10_15 = $value;
    }

    /**
     * Sets the v10_7 property value. When TRUE, indicates Mac OS X 10.7 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v10_7 property.
    */
    public function setV10_7(?bool $value ): void {
        $this->v10_7 = $value;
    }

    /**
     * Sets the v10_8 property value. When TRUE, indicates OS X 10.8 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v10_8 property.
    */
    public function setV10_8(?bool $value ): void {
        $this->v10_8 = $value;
    }

    /**
     * Sets the v10_9 property value. When TRUE, indicates OS X 10.9 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v10_9 property.
    */
    public function setV10_9(?bool $value ): void {
        $this->v10_9 = $value;
    }

    /**
     * Sets the v11_0 property value. When TRUE, indicates macOS 11.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v11_0 property.
    */
    public function setV11_0(?bool $value ): void {
        $this->v11_0 = $value;
    }

    /**
     * Sets the v12_0 property value. When TRUE, indicates macOS 12.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v12_0 property.
    */
    public function setV12_0(?bool $value ): void {
        $this->v12_0 = $value;
    }

    /**
     * Sets the v13_0 property value. When TRUE, indicates macOS 13.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     *  @param bool|null $value Value to set for the v13_0 property.
    */
    public function setV13_0(?bool $value ): void {
        $this->v13_0 = $value;
    }

}
