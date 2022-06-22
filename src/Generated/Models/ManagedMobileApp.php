<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedMobileApp extends Entity implements Parsable 
{
    /**
     * @var MobileAppIdentifier|null $mobileAppIdentifier The identifier for an app with it's operating system type.
    */
    private ?MobileAppIdentifier $mobileAppIdentifier = null;
    
    /**
     * @var string|null $version Version of the entity.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new managedMobileApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedMobileApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedMobileApp {
        return new ManagedMobileApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mobileAppIdentifier' => function (ParseNode $n) use ($o) { $o->setMobileAppIdentifier($n->getObjectValue(array(MobileAppIdentifier::class, 'createFromDiscriminatorValue'))); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the mobileAppIdentifier property value. The identifier for an app with it's operating system type.
     * @return MobileAppIdentifier|null
    */
    public function getMobileAppIdentifier(): ?MobileAppIdentifier {
        return $this->mobileAppIdentifier;
    }

    /**
     * Gets the version property value. Version of the entity.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('mobileAppIdentifier', $this->mobileAppIdentifier);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the mobileAppIdentifier property value. The identifier for an app with it's operating system type.
     *  @param MobileAppIdentifier|null $value Value to set for the mobileAppIdentifier property.
    */
    public function setMobileAppIdentifier(?MobileAppIdentifier $value ): void {
        $this->mobileAppIdentifier = $value;
    }

    /**
     * Sets the version property value. Version of the entity.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
