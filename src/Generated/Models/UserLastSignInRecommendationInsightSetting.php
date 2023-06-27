<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserLastSignInRecommendationInsightSetting extends AccessReviewRecommendationInsightSetting implements Parsable 
{
    /**
     * Instantiates a new UserLastSignInRecommendationInsightSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userLastSignInRecommendationInsightSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserLastSignInRecommendationInsightSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserLastSignInRecommendationInsightSetting {
        return new UserLastSignInRecommendationInsightSetting();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recommendationLookBackDuration' => fn(ParseNode $n) => $o->setRecommendationLookBackDuration($n->getDateIntervalValue()),
            'signInScope' => fn(ParseNode $n) => $o->setSignInScope($n->getEnumValue(UserSignInRecommendationScope::class)),
        ]);
    }

    /**
     * Gets the recommendationLookBackDuration property value. The recommendationLookBackDuration property
     * @return DateInterval|null
    */
    public function getRecommendationLookBackDuration(): ?DateInterval {
        return $this->getBackingStore()->get('recommendationLookBackDuration');
    }

    /**
     * Gets the signInScope property value. The signInScope property
     * @return UserSignInRecommendationScope|null
    */
    public function getSignInScope(): ?UserSignInRecommendationScope {
        return $this->getBackingStore()->get('signInScope');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('recommendationLookBackDuration', $this->getRecommendationLookBackDuration());
        $writer->writeEnumValue('signInScope', $this->getSignInScope());
    }

    /**
     * Sets the recommendationLookBackDuration property value. The recommendationLookBackDuration property
     * @param DateInterval|null $value Value to set for the recommendationLookBackDuration property.
    */
    public function setRecommendationLookBackDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('recommendationLookBackDuration', $value);
    }

    /**
     * Sets the signInScope property value. The signInScope property
     * @param UserSignInRecommendationScope|null $value Value to set for the signInScope property.
    */
    public function setSignInScope(?UserSignInRecommendationScope $value): void {
        $this->getBackingStore()->set('signInScope', $value);
    }

}
