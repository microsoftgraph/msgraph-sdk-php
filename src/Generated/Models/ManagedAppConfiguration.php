<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAppConfiguration extends ManagedAppPolicy implements Parsable 
{
    /**
     * @var array<KeyValuePair>|null $customSettings A set of string key and string value pairs to be sent to apps for users to whom the configuration is scoped, unalterned by this service
    */
    private ?array $customSettings = null;
    
    /**
     * Instantiates a new managedAppConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppConfiguration {
        $mappingValueNode = ParseNode::getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.managedAppConfiguration': return new ManagedAppConfiguration();
            }
        }
        return new ManagedAppConfiguration();
    }

    /**
     * Gets the customSettings property value. A set of string key and string value pairs to be sent to apps for users to whom the configuration is scoped, unalterned by this service
     * @return array<KeyValuePair>|null
    */
    public function getCustomSettings(): ?array {
        return $this->customSettings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customSettings' => function (ParseNode $n) use ($o) { $o->setCustomSettings($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('customSettings', $this->customSettings);
    }

    /**
     * Sets the customSettings property value. A set of string key and string value pairs to be sent to apps for users to whom the configuration is scoped, unalterned by this service
     *  @param array<KeyValuePair>|null $value Value to set for the customSettings property.
    */
    public function setCustomSettings(?array $value ): void {
        $this->customSettings = $value;
    }

}
