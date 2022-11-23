<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutlookUser extends Entity implements Parsable 
{
    /**
     * Instantiates a new outlookUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutlookUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutlookUser {
        return new OutlookUser();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'masterCategories' => fn(ParseNode $n) => $o->setMasterCategories($n->getCollectionOfObjectValues([OutlookCategory::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the masterCategories property value. A list of categories defined for the user.
     * @return array<OutlookCategory>|null
    */
    public function getMasterCategories(): ?array {
        return $this->getBackingStore()->get('masterCategories');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('masterCategories', $this->getMasterCategories());
    }

    /**
     * Sets the masterCategories property value. A list of categories defined for the user.
     *  @param array<OutlookCategory>|null $value Value to set for the masterCategories property.
    */
    public function setMasterCategories(?array $value): void {
        $this->getBackingStore()->set('masterCategories', $value);
    }

}
