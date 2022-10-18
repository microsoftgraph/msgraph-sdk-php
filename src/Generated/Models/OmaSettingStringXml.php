<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class OmaSettingStringXml extends OmaSetting implements Parsable 
{
    /**
     * @var string|null $fileName File name associated with the Value property (.xml).
    */
    private ?string $fileName = null;
    
    /**
     * @var StreamInterface|null $value Value. (UTF8 encoded byte array)
    */
    private ?StreamInterface $value = null;
    
    /**
     * Instantiates a new OmaSettingStringXml and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.omaSettingStringXml');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OmaSettingStringXml
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OmaSettingStringXml {
        return new OmaSettingStringXml();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getBinaryContent()),
        ]);
    }

    /**
     * Gets the fileName property value. File name associated with the Value property (.xml).
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the value property value. Value. (UTF8 encoded byte array)
     * @return StreamInterface
    */
    public function getValue(): StreamInterface {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fileName', $this->fileName);
        $writer->writeBinaryContent('value', $this->value);
    }

    /**
     * Sets the fileName property value. File name associated with the Value property (.xml).
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

    /**
     * Sets the value property value. Value. (UTF8 encoded byte array)
     *  @param StreamInterface|null $value Value to set for the value property.
    */
    public function setValue(?StreamInterface $value ): void {
        $this->value = $value;
    }

}
