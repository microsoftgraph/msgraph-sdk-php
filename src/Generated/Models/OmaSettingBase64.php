<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OmaSettingBase64 extends OmaSetting implements Parsable 
{
    /**
     * @var string|null $fileName File name associated with the Value property (.cer
    */
    private ?string $fileName = null;
    
    /**
     * @var string|null $value Value. (Base64 encoded string)
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new OmaSettingBase64 and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.omaSettingBase64');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OmaSettingBase64
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OmaSettingBase64 {
        return new OmaSettingBase64();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileName property value. File name associated with the Value property (.cer
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the value property value. Value. (Base64 encoded string)
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fileName', $this->fileName);
        $writer->writeStringValue('value', $this->value);
    }

    /**
     * Sets the fileName property value. File name associated with the Value property (.cer
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

    /**
     * Sets the value property value. Value. (Base64 encoded string)
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}
