<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InternetExplorerMode extends Entity implements Parsable 
{
    /**
     * Instantiates a new internetExplorerMode and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InternetExplorerMode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InternetExplorerMode {
        return new InternetExplorerMode();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'siteLists' => fn(ParseNode $n) => $o->setSiteLists($n->getCollectionOfObjectValues([BrowserSiteList::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the siteLists property value. A collection of site lists to support Internet Explorer mode.
     * @return array<BrowserSiteList>|null
    */
    public function getSiteLists(): ?array {
        return $this->getBackingStore()->get('siteLists');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('siteLists', $this->getSiteLists());
    }

    /**
     * Sets the siteLists property value. A collection of site lists to support Internet Explorer mode.
     * @param array<BrowserSiteList>|null $value Value to set for the siteLists property.
    */
    public function setSiteLists(?array $value): void {
        $this->getBackingStore()->set('siteLists', $value);
    }

}
