<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsMinimumOperatingSystem implements AdditionalDataHolder, Parsable 
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
     * @var bool|null $v10_0 Windows version 10.0 or later.
    */
    private ?bool $v10_0 = null;
    
    /**
     * @var bool|null $v8_0 Windows version 8.0 or later.
    */
    private ?bool $v8_0 = null;
    
    /**
     * @var bool|null $v8_1 Windows version 8.1 or later.
    */
    private ?bool $v8_1 = null;
    
    /**
     * Instantiates a new windowsMinimumOperatingSystem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.windowsMinimumOperatingSystem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsMinimumOperatingSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsMinimumOperatingSystem {
        return new WindowsMinimumOperatingSystem();
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
            'v8_0' => function (ParseNode $n) use ($o) { $o->setV8_0($n->getBooleanValue()); },
            'v8_1' => function (ParseNode $n) use ($o) { $o->setV8_1($n->getBooleanValue()); },
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
     * Gets the v10_0 property value. Windows version 10.0 or later.
     * @return bool|null
    */
    public function getV10_0(): ?bool {
        return $this->v10_0;
    }

    /**
     * Gets the v8_0 property value. Windows version 8.0 or later.
     * @return bool|null
    */
    public function getV8_0(): ?bool {
        return $this->v8_0;
    }

    /**
     * Gets the v8_1 property value. Windows version 8.1 or later.
     * @return bool|null
    */
    public function getV8_1(): ?bool {
        return $this->v8_1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('v10_0', $this->v10_0);
        $writer->writeBooleanValue('v8_0', $this->v8_0);
        $writer->writeBooleanValue('v8_1', $this->v8_1);
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
     * Sets the v10_0 property value. Windows version 10.0 or later.
     *  @param bool|null $value Value to set for the v10_0 property.
    */
    public function setV10_0(?bool $value ): void {
        $this->v10_0 = $value;
    }

    /**
     * Sets the v8_0 property value. Windows version 8.0 or later.
     *  @param bool|null $value Value to set for the v8_0 property.
    */
    public function setV8_0(?bool $value ): void {
        $this->v8_0 = $value;
    }

    /**
     * Sets the v8_1 property value. Windows version 8.1 or later.
     *  @param bool|null $value Value to set for the v8_1 property.
    */
    public function setV8_1(?bool $value ): void {
        $this->v8_1 = $value;
    }

}
