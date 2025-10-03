<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A folder containing pages of apps and web clips on the Home Screen.
*/
class IosHomeScreenFolder extends IosHomeScreenItem implements Parsable 
{
    /**
     * Instantiates a new IosHomeScreenFolder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosHomeScreenFolder');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosHomeScreenFolder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosHomeScreenFolder {
        return new IosHomeScreenFolder();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'pages' => fn(ParseNode $n) => $o->setPages($n->getCollectionOfObjectValues([IosHomeScreenFolderPage::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the pages property value. Pages of Home Screen Layout Icons which must be applications or web clips. This collection can contain a maximum of 500 elements.
     * @return array<IosHomeScreenFolderPage>|null
    */
    public function getPages(): ?array {
        $val = $this->getBackingStore()->get('pages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosHomeScreenFolderPage::class);
            /** @var array<IosHomeScreenFolderPage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pages'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('pages', $this->getPages());
    }

    /**
     * Sets the pages property value. Pages of Home Screen Layout Icons which must be applications or web clips. This collection can contain a maximum of 500 elements.
     * @param array<IosHomeScreenFolderPage>|null $value Value to set for the pages property.
    */
    public function setPages(?array $value): void {
        $this->getBackingStore()->set('pages', $value);
    }

}
