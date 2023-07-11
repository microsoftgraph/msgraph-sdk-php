<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The user experience analytics overview entity contains the overall score and the scores and insights of every metric of all categories.
*/
class UserExperienceAnalyticsOverview extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsOverview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsOverview {
        return new UserExperienceAnalyticsOverview();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'insights' => fn(ParseNode $n) => $o->setInsights($n->getCollectionOfObjectValues([UserExperienceAnalyticsInsight::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the insights property value. The user experience analytics insights. Read-only.
     * @return array<UserExperienceAnalyticsInsight>|null
    */
    public function getInsights(): ?array {
        $val = $this->getBackingStore()->get('insights');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsInsight::class);
            /** @var array<UserExperienceAnalyticsInsight>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insights'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('insights', $this->getInsights());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the insights property value. The user experience analytics insights. Read-only.
     * @param array<UserExperienceAnalyticsInsight>|null $value Value to set for the insights property.
    */
    public function setInsights(?array $value): void {
        $this->getBackingStore()->set('insights', $value);
    }

}
