<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAppStatusRaw extends ManagedAppStatus implements Parsable 
{
    /**
     * @var Json|null $content Status report content.
    */
    private ?Json $content = null;
    
    /**
     * Instantiates a new ManagedAppStatusRaw and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedAppStatusRaw');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppStatusRaw
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppStatusRaw {
        return new ManagedAppStatusRaw();
    }

    /**
     * Gets the content property value. Status report content.
     * @return Json|null
    */
    public function getContent(): ?Json {
        return $this->content;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('content', $this->content);
    }

    /**
     * Sets the content property value. Status report content.
     *  @param Json|null $value Value to set for the content property.
    */
    public function setContent(?Json $value ): void {
        $this->content = $value;
    }

}
