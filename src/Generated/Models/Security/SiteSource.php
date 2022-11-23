<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Site;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SiteSource extends DataSource implements Parsable 
{
    /**
     * Instantiates a new SiteSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.siteSource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SiteSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SiteSource {
        return new SiteSource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'site' => fn(ParseNode $n) => $o->setSite($n->getObjectValue([Site::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the site property value. The site property
     * @return Site|null
    */
    public function getSite(): ?Site {
        return $this->getBackingStore()->get('site');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('site', $this->getSite());
    }

    /**
     * Sets the site property value. The site property
     *  @param Site|null $value Value to set for the site property.
    */
    public function setSite(?Site $value): void {
        $this->getBackingStore()->set('site', $value);
    }

}
