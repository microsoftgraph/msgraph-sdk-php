<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidMinimumOperatingSystem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $v10_0 Version 10.0 or later.
    */
    private ?bool $v10_0 = null;
    
    /**
     * @var bool|null $v11_0 Version 11.0 or later.
    */
    private ?bool $v11_0 = null;
    
    /**
     * @var bool|null $v4_0 Version 4.0 or later.
    */
    private ?bool $v4_0 = null;
    
    /**
     * @var bool|null $v4_0_3 Version 4.0.3 or later.
    */
    private ?bool $v4_0_3 = null;
    
    /**
     * @var bool|null $v4_1 Version 4.1 or later.
    */
    private ?bool $v4_1 = null;
    
    /**
     * @var bool|null $v4_2 Version 4.2 or later.
    */
    private ?bool $v4_2 = null;
    
    /**
     * @var bool|null $v4_3 Version 4.3 or later.
    */
    private ?bool $v4_3 = null;
    
    /**
     * @var bool|null $v4_4 Version 4.4 or later.
    */
    private ?bool $v4_4 = null;
    
    /**
     * @var bool|null $v5_0 Version 5.0 or later.
    */
    private ?bool $v5_0 = null;
    
    /**
     * @var bool|null $v5_1 Version 5.1 or later.
    */
    private ?bool $v5_1 = null;
    
    /**
     * Instantiates a new androidMinimumOperatingSystem and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidMinimumOperatingSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidMinimumOperatingSystem {
        return new AndroidMinimumOperatingSystem();
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
            'v10_0' => function (ParseNode $n) use ($o) { $o->setV10_0($n->getBooleanValue()); },
            'v11_0' => function (ParseNode $n) use ($o) { $o->setV11_0($n->getBooleanValue()); },
            'v4_0' => function (ParseNode $n) use ($o) { $o->setV4_0($n->getBooleanValue()); },
            'v4_0_3' => function (ParseNode $n) use ($o) { $o->setV4_0_3($n->getBooleanValue()); },
            'v4_1' => function (ParseNode $n) use ($o) { $o->setV4_1($n->getBooleanValue()); },
            'v4_2' => function (ParseNode $n) use ($o) { $o->setV4_2($n->getBooleanValue()); },
            'v4_3' => function (ParseNode $n) use ($o) { $o->setV4_3($n->getBooleanValue()); },
            'v4_4' => function (ParseNode $n) use ($o) { $o->setV4_4($n->getBooleanValue()); },
            'v5_0' => function (ParseNode $n) use ($o) { $o->setV5_0($n->getBooleanValue()); },
            'v5_1' => function (ParseNode $n) use ($o) { $o->setV5_1($n->getBooleanValue()); },
        ];
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
     * Gets the v4_0 property value. Version 4.0 or later.
     * @return bool|null
    */
    public function getV4_0(): ?bool {
        return $this->v4_0;
    }

    /**
     * Gets the v4_0_3 property value. Version 4.0.3 or later.
     * @return bool|null
    */
    public function getV4_0_3(): ?bool {
        return $this->v4_0_3;
    }

    /**
     * Gets the v4_1 property value. Version 4.1 or later.
     * @return bool|null
    */
    public function getV4_1(): ?bool {
        return $this->v4_1;
    }

    /**
     * Gets the v4_2 property value. Version 4.2 or later.
     * @return bool|null
    */
    public function getV4_2(): ?bool {
        return $this->v4_2;
    }

    /**
     * Gets the v4_3 property value. Version 4.3 or later.
     * @return bool|null
    */
    public function getV4_3(): ?bool {
        return $this->v4_3;
    }

    /**
     * Gets the v4_4 property value. Version 4.4 or later.
     * @return bool|null
    */
    public function getV4_4(): ?bool {
        return $this->v4_4;
    }

    /**
     * Gets the v5_0 property value. Version 5.0 or later.
     * @return bool|null
    */
    public function getV5_0(): ?bool {
        return $this->v5_0;
    }

    /**
     * Gets the v5_1 property value. Version 5.1 or later.
     * @return bool|null
    */
    public function getV5_1(): ?bool {
        return $this->v5_1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('v10_0', $this->v10_0);
        $writer->writeBooleanValue('v11_0', $this->v11_0);
        $writer->writeBooleanValue('v4_0', $this->v4_0);
        $writer->writeBooleanValue('v4_0_3', $this->v4_0_3);
        $writer->writeBooleanValue('v4_1', $this->v4_1);
        $writer->writeBooleanValue('v4_2', $this->v4_2);
        $writer->writeBooleanValue('v4_3', $this->v4_3);
        $writer->writeBooleanValue('v4_4', $this->v4_4);
        $writer->writeBooleanValue('v5_0', $this->v5_0);
        $writer->writeBooleanValue('v5_1', $this->v5_1);
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
     * Sets the v4_0 property value. Version 4.0 or later.
     *  @param bool|null $value Value to set for the v4_0 property.
    */
    public function setV4_0(?bool $value ): void {
        $this->v4_0 = $value;
    }

    /**
     * Sets the v4_0_3 property value. Version 4.0.3 or later.
     *  @param bool|null $value Value to set for the v4_0_3 property.
    */
    public function setV4_0_3(?bool $value ): void {
        $this->v4_0_3 = $value;
    }

    /**
     * Sets the v4_1 property value. Version 4.1 or later.
     *  @param bool|null $value Value to set for the v4_1 property.
    */
    public function setV4_1(?bool $value ): void {
        $this->v4_1 = $value;
    }

    /**
     * Sets the v4_2 property value. Version 4.2 or later.
     *  @param bool|null $value Value to set for the v4_2 property.
    */
    public function setV4_2(?bool $value ): void {
        $this->v4_2 = $value;
    }

    /**
     * Sets the v4_3 property value. Version 4.3 or later.
     *  @param bool|null $value Value to set for the v4_3 property.
    */
    public function setV4_3(?bool $value ): void {
        $this->v4_3 = $value;
    }

    /**
     * Sets the v4_4 property value. Version 4.4 or later.
     *  @param bool|null $value Value to set for the v4_4 property.
    */
    public function setV4_4(?bool $value ): void {
        $this->v4_4 = $value;
    }

    /**
     * Sets the v5_0 property value. Version 5.0 or later.
     *  @param bool|null $value Value to set for the v5_0 property.
    */
    public function setV5_0(?bool $value ): void {
        $this->v5_0 = $value;
    }

    /**
     * Sets the v5_1 property value. Version 5.1 or later.
     *  @param bool|null $value Value to set for the v5_1 property.
    */
    public function setV5_1(?bool $value ): void {
        $this->v5_1 = $value;
    }

}
