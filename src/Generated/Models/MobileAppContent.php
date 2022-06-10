<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppContent extends Entity implements Parsable 
{
    /**
     * @var array<MobileAppContentFile>|null $files The list of files for this app content version.
    */
    private ?array $files = null;
    
    /**
     * Instantiates a new mobileAppContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppContent {
        return new MobileAppContent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'files' => function (ParseNode $n) use ($o) { $o->setFiles($n->getCollectionOfObjectValues(array(MobileAppContentFile::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the files property value. The list of files for this app content version.
     * @return array<MobileAppContentFile>|null
    */
    public function getFiles(): ?array {
        return $this->files;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('files', $this->files);
    }

    /**
     * Sets the files property value. The list of files for this app content version.
     *  @param array<MobileAppContentFile>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value ): void {
        $this->files = $value;
    }

}
