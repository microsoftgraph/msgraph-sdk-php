<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10CustomConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var array<OmaSetting>|null $omaSettings OMA settings. This collection can contain a maximum of 1000 elements.
    */
    private ?array $omaSettings = null;
    
    /**
     * Instantiates a new Windows10CustomConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10CustomConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10CustomConfiguration {
        return new Windows10CustomConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'omaSettings' => function (ParseNode $n) use ($o) { $o->setOmaSettings($n->getCollectionOfObjectValues(array(OmaSetting::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the omaSettings property value. OMA settings. This collection can contain a maximum of 1000 elements.
     * @return array<OmaSetting>|null
    */
    public function getOmaSettings(): ?array {
        return $this->omaSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('omaSettings', $this->omaSettings);
    }

    /**
     * Sets the omaSettings property value. OMA settings. This collection can contain a maximum of 1000 elements.
     *  @param array<OmaSetting>|null $value Value to set for the omaSettings property.
    */
    public function setOmaSettings(?array $value ): void {
        $this->omaSettings = $value;
    }

}
