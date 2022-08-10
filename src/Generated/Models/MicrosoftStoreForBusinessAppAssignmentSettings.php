<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftStoreForBusinessAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * @var bool|null $useDeviceContext Whether or not to use device execution context for Microsoft Store for Business mobile app.
    */
    private ?bool $useDeviceContext = null;
    
    /**
     * Instantiates a new MicrosoftStoreForBusinessAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftStoreForBusinessAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftStoreForBusinessAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftStoreForBusinessAppAssignmentSettings {
        return new MicrosoftStoreForBusinessAppAssignmentSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'useDeviceContext' => function (ParseNode $n) use ($o) { $o->setUseDeviceContext($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the useDeviceContext property value. Whether or not to use device execution context for Microsoft Store for Business mobile app.
     * @return bool|null
    */
    public function getUseDeviceContext(): ?bool {
        return $this->useDeviceContext;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('useDeviceContext', $this->useDeviceContext);
    }

    /**
     * Sets the useDeviceContext property value. Whether or not to use device execution context for Microsoft Store for Business mobile app.
     *  @param bool|null $value Value to set for the useDeviceContext property.
    */
    public function setUseDeviceContext(?bool $value ): void {
        $this->useDeviceContext = $value;
    }

}
