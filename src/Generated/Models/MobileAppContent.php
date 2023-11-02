<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains content properties for a specific app version. Each mobileAppContent can have multiple mobileAppContentFile.
*/
class MobileAppContent extends Entity implements Parsable 
{
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
     * Gets the containedApps property value. The collection of contained apps in a MobileLobApp acting as a package.
     * @return array<MobileContainedApp>|null
    */
    public function getContainedApps(): ?array {
        $val = $this->getBackingStore()->get('containedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileContainedApp::class);
            /** @var array<MobileContainedApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containedApps'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'containedApps' => fn(ParseNode $n) => $o->setContainedApps($n->getCollectionOfObjectValues([MobileContainedApp::class, 'createFromDiscriminatorValue'])),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfObjectValues([MobileAppContentFile::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the files property value. The list of files for this app content version.
     * @return array<MobileAppContentFile>|null
    */
    public function getFiles(): ?array {
        $val = $this->getBackingStore()->get('files');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileAppContentFile::class);
            /** @var array<MobileAppContentFile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'files'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('containedApps', $this->getContainedApps());
        $writer->writeCollectionOfObjectValues('files', $this->getFiles());
    }

    /**
     * Sets the containedApps property value. The collection of contained apps in a MobileLobApp acting as a package.
     * @param array<MobileContainedApp>|null $value Value to set for the containedApps property.
    */
    public function setContainedApps(?array $value): void {
        $this->getBackingStore()->set('containedApps', $value);
    }

    /**
     * Sets the files property value. The list of files for this app content version.
     * @param array<MobileAppContentFile>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value): void {
        $this->getBackingStore()->set('files', $value);
    }

}
